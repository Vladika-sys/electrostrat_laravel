<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use Validator;

class UserAuthController extends Controller
{
    function login()
    {
        return view('auth.login');
    }
    function register(){
        return  view('auth.register');
    }

    function newUser(Request $req)
    {
    $req->validate([
        'name' => 'required|max:100|unique:users',
        'email' => 'required|email|max:80|unique:users',
        'password' => 'required|min:8|max:15'
    ]);



        $values = [
            'name'=> $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ];

        $querry = DB::table('users')->insert($values);
        if($querry)
        {
           return back()->with('success','Ați fost înregistrat cu succes');
        }else{
            return back()->with('fail','A apărut o eroare!');
        }
    }

    function verify(Request $req)
    {
        $req->validate([
           
            'email' => 'required|email|max:80',
            'password' => 'required|min:8|max:15'
        ]);

        $user = Users::where('email','=',$req->email)->first();
        if($user){
            if(Hash::check($req->password, $user->password)){
                $req->session()->put('LoggedUser',$user->id);
                return redirect('/dashboard');
            }else{
                return back()->with('fail','Parolă greșită');
            }
        }else{
            return back()->with('fail','Nu există un asemenea utilizator cu așa email');
        }
    }
    function logout()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }

}

