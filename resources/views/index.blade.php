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

<div class="jumbotron text-center">
    <h1>我的PHP博客</h1>
    <p>在这里有最详细简洁的PHP经验交流</p>
</div>

<div class="container">
    {{--轮播图--}}
    <div class="col-sm-10 mx-auto">
    <div id="demo" class="carousel slide " data-ride="carousel">

        <!-- 指示符 -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- 轮播图片 -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://static.runoob.com/images/mix/img_fjords_wide.jpg">
            </div>
            <div class="carousel-item">
                <img src="https://static.runoob.com/images/mix/img_nature_wide.jpg">
            </div>
            <div class="carousel-item">
                <img src="https://static.runoob.com/images/mix/img_mountains_wide.jpg">
            </div>
        </div>

        <!-- 左右切换按钮 -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div><br></div>
    {{--表单--}}
    <div class="row">
        <div class="col-sm-8">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>姓名</th>
                    <th>手机号</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->mobile}}</td>
                    <td><a href="/bbs/{{$user->id}}">查看帖子</a>
                        <a class="del" href="/del/{{$user->id}}">删除</a>
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
        <div class="col-sm-4">
            <div class="container">
                <div class="card-header">添加成员</div>
                <form method="post" action="">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">姓名:</label>
                        <input type="text" class="form-control" name="name" placeholder="请输入姓名">
                    </div>
                    <div class="form-group">
                        <label for="number">电话:</label>
                        <input type="number" class="form-control" name="mobile" placeholder="请输入电话">
                    </div>
                    <div class="form-group">
                        <label for="pwd">密码:</label>
                        <input type="password" class="form-control" name="password" placeholder="请输入密码">
                    </div>
                    <button type="submit" class="btn btn-primary">提交</button>
                </form>
            </div>
        </div>
    </div>

</div>

</body>
</html>
