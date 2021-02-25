<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/bec.svg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js" integrity="sha512-6kvhZ/39gRVLmoM/6JxbbJVTYzL/gnbDVsHACLx/31IREU4l3sI7yeO0d4gw8xU5Mpmm/17LMaDHOCf+TvuC2Q=="  crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>Login</title>
    <style>
        body{
            background-color: #f5f5f5;
            display: flex;

                    }
    </style>
</head>
<body>
<div class="container ">
    <div class="row d-flex justify-content-center" style="margin-top: 45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Înregistrează-te</h4>
            <hr>
            <form action="{{ route('auth.create') }}" id="register_form" method="POST" autocomplete="off">
                @csrf
                <div class="results">
                    @if(Session::get('success'))

                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    @if(Session::get('fail'))

                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="name" placeholder="Introduce-ți numele de utilizator" value="{{old('name')}}">
                    <span class="text-danger error-text name_error">@error('username'){{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Introduce-ți email-ul" value="{{old('email')}}">
                    <span class="text-danger error-text email_error " >@error('email'){{$message}} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="password">Parola</label>
                    <input type="password" class="form-control" name="password" placeholder="Introduce-ți parola" value="{{old('password')}}">
                    <span class="text-danger error-text password_error">@error('password'){{$message}} @enderror</span>
                </div>
                <span id="succes_response" class="text-success"></span>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-block btn-primary">
                        Înregistrează-te
                    </button>
                </div>
                <div class="mb-3 pt-3">
                    <a href="/login">Ai deja un cont? Apasă aici!</a>
                </div>

            </form>
        </div>
    </div>
</div>
</body>
<script src="/js/app.js"></script>

</html>
