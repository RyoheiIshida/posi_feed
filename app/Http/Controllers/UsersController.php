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
        $data = ['users' => User::all()];
        return view('users.index', $data);
    }
    public function store(Request $req)
    {
        $u=new User();
        $u->fill($req->except('_token'))->save();
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
