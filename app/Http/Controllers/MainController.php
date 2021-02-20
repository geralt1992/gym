<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\info;
use App\Mail\Greetings;
use App\Mail\User_subject;

class MainController extends Controller
{
    public function main(){
        return view('gym_content');
    }

    public function store(Request $request){

        $info = new info;
        $info->save_info($request);

        $user_mail = $request->email;
        $user_name = $request->name;
        $user_subject = $request->subject;

        $admin_mail = "marin.sabljo@gmail.com";

        Mail::to($user_mail)->send(new Greetings($user_name));
        Mail::to($admin_mail)->send(new User_subject($user_name , $user_mail , $user_subject));

        return redirect()->route('main')->with('success' , 'Uspješno poslano, hvala Vam!');
    }

}
