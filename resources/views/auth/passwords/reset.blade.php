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
        <h1 class="subtitle"><b>Reset your password</b></h1>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="field">
                <input type="email" name="email" value="{{ $email ?? old('email') }}" hidden>
            </div>
            <div class="field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="input @error('password') is-invalid @enderror" required>
            </div>
            <div class="field">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="input" required>
                @error('password')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="button is-success">Reset Password</button>
        </form>
    </div>
</body>
</html>
