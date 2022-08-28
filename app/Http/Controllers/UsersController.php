<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
    public function index()
    {
        $data = ['msg' => 'こんにちは、世界！！'];
        return view('users.index', $data);
    }
}
