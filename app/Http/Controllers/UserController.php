<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return __METHOD__;
    }

    public function show($user_id){
        return __METHOD__ . ':' . $user_id;
    }

    public function update($user_id){
        return __METHOD__ . ':' . $user_id;
    }
}
