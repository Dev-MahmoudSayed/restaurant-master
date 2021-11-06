<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index(){
        return view("contact.contact");
    }
    public function conFact(Request $request) 
    {

      
      $request->validate([
        'name'=>'required|string|max:15',
        'phone'=>'required|numeric',
        'message'=>'required|string|max:1500',
        'email'=>'required|string',
        ]);

        $data = new contact;
        $data->name = $request->name;
        $data->email= $request->email;
        $data->phone= $request->phone;
        $data->message=$request->message;
        $data->save();
        Session::flash('message', 'Added Success ');
        return redirect()->back();
    }
    public function viewCon()
    {
      $data = contact::all();
      return view("contact.contact",compact("data"));
    }
}
