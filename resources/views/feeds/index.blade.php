@extends('layouts.base')
@section('title','Feed一覧')
@section('main')

@foreach($feeds as $feed)

<p>{{$feed->users->id}}</p>
@endforeach

@endsection