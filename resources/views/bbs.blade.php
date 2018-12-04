<!DOCTYPE html>
<html>
<head>
    <title>小菊花</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
{{--导航栏--}}
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">博客</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">首页</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">我的个人主页</a>
        </li>
    </ul>
</nav>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">欢迎来到{{$name}}的主页</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>姓名</th>
                    <th>标题</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lists as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$name}}</td>
                        <td>{{$list->title}}</td>
                        <td>{{$list->content}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $lists->links() }}
        </div>
    </div>
</div>

</body>
</html>