<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Messages;

class DashboardController extends Controller
{
 public function dashboard()
 {
    $services = Services::all();
    $orders = Messages::all();

    return view('dashboard', [
        'services' => $services,
        'orders' => $orders
    ]);



 }

}
