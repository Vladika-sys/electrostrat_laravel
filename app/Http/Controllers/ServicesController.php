<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ServicesController extends Controller
{
    public function services(){

        $services = Services::all();

        return view('services', [
            'services' => $services
        ]);
    }
    public function showMore($slug)
    {
       
        $services = Services::where('slug', '=', $slug)->firstOrFail();



        return view('services_description',['services'=>$services]);
    }
}
