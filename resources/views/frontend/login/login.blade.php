<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="login/style/style.css"/>
    <link rel="stylesheet" href="login/style/register.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container container-login">
    <div class="login">
        <div>
            <p>Library</p>
            <p>
                Sehife haqqinda melumat
            </p>
        </div>
        <div class="log-reg">

            <form action="{{route('login.post')}}" method="POST" class="form form1">
                @csrf
                @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>

                @elseif(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif


                <input type="email" name="login_email" id="login_email" class="login-email" placeholder="Email"
                       value="{{old('login_email')}}">

                <input type="password" class="login-pass" placeholder="Password" name="login_password"
                       id="login_password">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" value="1" id="remember"
                        {{old('remember') ? 'checked' : ''}}>
                    <label class="form-check-label" for="remember">
                        Məni xatırla
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
                <span>Forgot Password?</span>

                <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addAccount">Register</a>
                {{--                <button class="register-btn">Create Account</button>--}}
            </form>
        </div>
    </div>
</div>


{{--<script src="login/script.js"></script>--}}
@include('frontend.login.register.register_modal')
@include('frontend.login.register.js')
</body>
</html>
