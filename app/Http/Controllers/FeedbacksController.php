<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Feedbacks;
use Validator;

class FeedbacksController extends Controller
{
    public function save(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'name' => 'required|max:100',
            'email' => 'required|email|max:80|unique:feedbacks',
            'description' => 'required'
        ]);

        if (!$validator->passes()){

            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $values = [
                'name'=> $req->name,
                'email' => $req->email,
                'feedback' => $req->description,
            ];

            $querry = DB::table('feedbacks')->insert($values);
            if($querry)
            {
                return response()->json(['status' => 1, 'msg' => 'Mesajul dumeavoastră a fost înregistrat cu succes']);
            }
        }
    }

}
