<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $data=['msg'=>'こんにちは、世界！！'];
        return view('users.index',$data);
    }
}
