<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;

class FeedsController extends Controller
{
    public function index()
    {
        $data=['feeds'=>Feed::all()];
        return view('feeds/index',$data);
    }
    public function create()
    {
        return view('feeds.create');
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
