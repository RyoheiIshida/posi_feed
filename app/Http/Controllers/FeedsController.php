<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;
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
        $data=['Auth'=>Auth::id()];
        return view('feeds.create',$data);
    }
    public function store(Request $req)
    {
        $f=new Feed();
        $f->fill($req->except('_token'))->save();
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
