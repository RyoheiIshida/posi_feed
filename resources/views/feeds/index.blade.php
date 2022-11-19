@extends('layouts.base')
@section('title','Feed一覧')
@section('main')

@foreach($feeds as $feed)

<p>
{{$feed->posted_users_id}}
{{$feed->content}}
{{$feed->created_users_id}}</p>
@endforeach

@endsection