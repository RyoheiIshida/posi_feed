<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
    public function index()
    {
        $data = ['users' => User::find(10)];
        return view('users.index', $data);
    }
    public function store()
    {
        return redirect('users'); 
    }
    public function edit()
    {
        return view('users/edit');
    }
    public function view()
    {
        return view('users/vieww');
    }
}
