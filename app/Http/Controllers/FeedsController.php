<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class FeedsController extends Controller
{
    public function index()
    {
        $data=['feeds'=>Feed::all()];
        return view('feeds/index',$data);
    }
    public function create()
    {
        $data=['Auth'=>Auth::id(),'namelist'=>User::all()];
        return view('feeds.create',$data);
    }
    public function store(Request $req)
    {
        $f=new Feed();
        $f->fill($req->except(['_token','posted_users_id']));
        $f->posted_users_id=User::where('name',$req->input('posted_users_id'))->first()['id'];
        $f->save();
        return redirect('feeds/create');
    }
    public function view()
    {

    }
    public function edit()
    {

    }
    public function destroy()
    {

    }
}
