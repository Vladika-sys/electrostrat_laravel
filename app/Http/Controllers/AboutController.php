<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedbacks;

class AboutController extends Controller
{
    public function about()
    {
        $feedbacks = Feedbacks::all()->where('status','=','public');
        return view('about',[
            'feedbacks' => $feedbacks
        ]);
    }
}
