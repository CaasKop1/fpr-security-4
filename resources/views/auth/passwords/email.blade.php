<!DOCTYPE html>
<html lang="en" class="theme-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-bulma/>
    <title>Login</title>
    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>
<body class="is-flex is-justify-content-center is-align-items-center" style="height: 100vh;">
    <div class="box" style="width: 25%">
        @if (session('status'))
        <div class="notification is-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <h1 class="subtitle"><b>Reset your password</b></h1>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="field">
                <label class="label" for="email">Email</label>
                <input class="input" name="email" value="{{ old('email') }}">
                @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="buttons is-justify-content-space-between">
                <button class="button is-success" type="submit">Mail password reset link</button>
                <a href="{{ route('login') }}" class="button is-info" >Back to login page</a>
            </div>
        </form>
    </div>
</body>
</html>
