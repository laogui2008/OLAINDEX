<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登陆</title>
    <link rel="stylesheet"
          href="https://cdn.bootcss.com/bootswatch/4.3.1/{{ setting('theme','materia') }}/bootstrap.min.css">
    <link href="https://cdn.remixicon.com/releases/v1.2.2/remixicon.css" rel="stylesheet">
    @yield('css')
</head>

<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ setting('name','OLAINDEX') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}"><i class="remixicon-home-fill"></i> 首页</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-3">
    @if (session()->has('alertMessage'))
        <div class="alert alert-dismissible alert-{{ session()->pull('alertType')}}">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{ session()->pull('alertMessage') }}</p>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-light mb-3">
                <div class="card-header">
                    <i class="remixicon-login-box-fill"></i> 登陆
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label" for="name">用户名</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                   required>
                            @if($errors->has('name')) <span
                                class="form-text text-danger">{{ $errors->first('name') }}</span>  @endif
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="password">请输入密码</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            @if($errors->has('password')) <span
                                class="form-text text-danger">{{ $errors->first('password') }}</span>  @endif
                        </div>
                        <button type="submit" class="btn btn-primary">登陆</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="row text-center">
            <div class="col-lg-12">
                <p>Made by <a href="http://imwnk.cn">IMWNK</a>.</p>
            </div>
        </div>
    </footer>
</div>
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
@yield('js')
</body>

</html>
