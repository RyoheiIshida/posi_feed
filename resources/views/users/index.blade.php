@extends('layouts.base')
@section('title','User一覧')

@section('main')

@foreach($users as $user)
<p>{{$user->email}}
{{$user->authority}}</p>
@endforeach

@endsection