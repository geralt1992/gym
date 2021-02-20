<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    public function save_info($request){

        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'subject' => 'required',
        ]);


        $new_info = new info;
        $new_info->name = $request->name;
        $new_info->email = $request->email;
        $new_info->subject = $request->subject;

        $new_info->save();
        }
}
