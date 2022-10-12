@extends('layouts.base')
@section('title','ユーザー登録')
@section('main')

<h3>ユーザー登録</h3>
<form method='POST' action='/users/store'>
    @csrf
    <label id='email'>Eメールアドレス</label>
    <input id='email' name='email' type='text' size='32' value='{{old("email")}}' />
    <br>
    <label id='password'>パスワード</label>
    <input id='password' name='password' type='password' size='32' value='{{old("password")}}' />
    <br>
    <label id='authority'>権限</label>
    <input id='authority' name='authority' type='text' size='32' value='{{old("authority")}}' />
    <br>
    <input type='submit' value='送信' />
</form>
@endsection