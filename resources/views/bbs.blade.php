<!DOCTYPE html>
<html>
<head>
    <title>小菊花</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">

</head>
<body>
{{--导航栏--}}
@extends('layouts.app')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">欢迎来到{{$name}}的主页</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>

<div class="card container">
    @foreach($lists as $list)
    <div class="card-body">
        <h4 class="card-title">{{$list->title}}</h4>
        <p class="card-text">{{$list->content}}</p>
        <a href="#" class="card-link">{{$list->id}}</a>
        <a href="#" class="card-link">Another link</a>
    </div>
    @endforeach
        {{ $lists->links() }}
</div>

</body>
</html>