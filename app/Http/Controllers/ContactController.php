<?php

namespace App\Http\Controllers;
use App\Models\User;

class ContactController{
      public function allusers(){

        $users = User::all();
        return view('addcontact', compact('users'));
    }
}
