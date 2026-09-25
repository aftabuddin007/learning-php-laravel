<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function addUser(Request $request){
        return $request->input();
    }
}
