@extends('layouts.base')
@section('title','ユーザー登録')
@section('main')

<form method='POST' action='/save/store'>
    @csrf
    <label id='email'>Eメールアドレス</label>
    <input id='email' name='email' type='text' size='32' value='{{old("email")}}' />
    <br>
    <label id='password'>パスワード</label>
    <input id='password' name='password' type='text' size='32' value='{{old("password")}}' />
    <br>
    <label id='authority'>権限</label>
    <input id='authority' name='authority' type='text' size='32' value='{{old("authority")}}' />
    {{form::select('authority',['一般','役員'])}}
</form>
@endsection