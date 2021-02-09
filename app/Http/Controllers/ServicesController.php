<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services(){

        $services = Services::all();

        return view('services', [
            'services' => $services
        ]);
    }
}
