<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Messages;
use App\Models\Feedbacks;
use Illuminate\Support\Facades\DB;
use Validator;

class DashboardController extends Controller
{
 public function dashboard()
 {
    $services = Services::all();
    $orders = Messages::all();
    $feedbacks = Feedbacks::all();

    return view('dashboard', [
        'services' => $services,
        'orders' => $orders,
        'feedbacks' => $feedbacks
    ]);



 }
 public function save(Request $req)
 {

     $validator = Validator::make($req->all(), [
         'slug' => 'required|unique:services',
         'title' => 'required|max:100',
         'description' => 'required|unique:services',
         'image_path' => 'required'
     ]);

     if (!$validator->passes()){

         return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
     } else {

         $values = [
             'slug'=> $req->slug,
             'title' => $req->title,
             'description' => $req->description,
             'image_path' => $req->image_path
         ];

         $querry = DB::table('services')->insert($values);
         if($querry)
         {
             return response()->json(['status' => 1, 'msg' => 'Serviciul dumeavoastră a fost înregistrat cu succes']);
         }
     }
 }
 public function edit(Request $req,$id)
    {
        $services = Services::find($id);
        $services->slug = $req->input('slug');
        $services->title = $req->input('title');
        $services->description = $req->input('description');
        $services->image_path = $req->input('image_path');
        $services->save();

         return response()->json(['status' => 1, 'msg' => 'Serviciul  a fost editat cu succes!']);



    }
    public function delete(Request $req, $id)
    {
            $services = Services::find($id);
            $services->delete();

        return response()->json(['status' => 1, 'msg' => 'Serviciul  a fost șters cu succes!']);
    }

}
