@extends('back.template')
@section('title')
    <title>New Post</title>
@stop

@section('main')
    @include('back.portfolio.post_form',['route' => '/posts'])
@stop