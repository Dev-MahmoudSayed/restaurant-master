<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Chef;
use App\Models\Menu;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $data = Menu::all();
        $data2= Chef::all();
        return view('pages.index',compact('data','data2'));
    }
    public function redirects()
    {
        $data = Menu::all();
        $data2= Chef::all();
     
        $userType= Auth::user()->usertype;
        if($userType =='1')
        {
            return view('admin.adminhome');
        }
        else
        {
            $user_id=Auth::id();
            $count = Card::where('user_id',$user_id)->count();

            return view('pages.index',compact("data","data2","count"));
        }
    }

    public function addCard(Request $request,$id)
    {
        
        if(Auth::id())
        {
            $user_id=Auth::id();
            $foodId = $id;
            $quantity = $request->quantity;
            
            $card = new Card;
            $card->user_id= $user_id;
            $card->user_id=  $foodId ;
            $card->quantity= $quantity;
            $card->save();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }
    
}
