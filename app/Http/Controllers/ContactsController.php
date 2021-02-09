<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
//  use CEITI\W1741\BestsFriends\ReaboiVictor;
//  use CEITI\W1741\BestsFriends\VaneaCiobanu;


class ContactsController extends Controller
{
    public function contacts()
    {
        return view('contacts');
    }

    function save(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:messages',
            'company' => 'required',
            'subject' => 'required',
            'description' => 'required'
        ]);

        if (!$validator->passes()){

            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $values = [
                'name'=> $req->name,
                'email' => $req->email,
                'company' => $req->company,
                'subject' => $req->subject,
                'description' => $req->description,
            ];

            $querry = DB::table('messages')->insert($values);
            if($querry)
            {
                return response()->json(['status' => 1, 'msg' => 'Mesajul dumeavoastra a fost inregistrat cu succes']);
            }
        }
    }
}
