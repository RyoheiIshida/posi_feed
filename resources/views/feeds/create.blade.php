@extends('layouts.base')
@section('title','Feed投稿')
@section('main')

<h2>Feed投稿</h2>

<form method='POST' action='/feeds/store'>
    @csrf
    <label id="posted_users_id">宛先：</label><br>
    <input id="posted_users_id" name="posted_users_id" type="text" size="32" value="{{old('posted_users_id')}}" />
    <br>
    <label id="content">内容：</label><br>
    <textarea id="content" name="content" cols=40 rows=20 value="{{old('content')}}" ></textarea>
    <br>
    <br>

    <label>公開設定</label><br>
    <input id="public" name="private" type="radio" size="32" value="0" />
    <label for='public'>公開</label><br>
    <input id="private" name="private" type="radio" size="32" value="1" />
    <label for="private">非公開</label>
    <br>
    <br>
    <input id="created_users_id" name="created_users_id" type="hidden" value={{$Auth}} />

    <input type='submit'>

</form>
@endsection