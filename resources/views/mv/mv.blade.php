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
        <h1>高清电影</h1>
        <p>看的不止是电影，更是人生！</p>
    </div>
</div>
<div class="container">

<div class="row  mx-auto ">
    <div class="col-sm-9 row">
        @foreach($lists as $list)
        <div class="container col-sm-4">
            <div class="card" style="width:200px">
                <img class="card-img-top" src="{{$list->img}}" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">{{$list->title}}</h4>
                    <p class="card-text" style="overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">{{$list->describe}}</p>
                    <a href="{{$list->link}}" class="btn btn-primary">在线播放</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-sm-3 mx-auto">
        <div class="container">
            <div class="card-header">添加电影</div>
            <form method="post" action="">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">电影名字:</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="number">图片链接:</label>
                    <textarea class="form-control" name="img" rows="2" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">描述:</label>
                    <textarea class="form-control" name="describe" rows="2" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <label for="number">视频链接:</label>
                    <textarea class="form-control" name="link" rows="2" id="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">提交</button>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>
