<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Del Cafe</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
            <div class="login-text">
                <h2>Welcome to</h2>
                    <h1>DEL CAFE</h1>
            </div>
        <div class="login-container">
            <form action="{{ route('login') }}" method="post">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        </div>
                        @endif
        <div class="login-form">
            <h2>Welcome Back!</h2>
            <h3>Login to your Account</h3><br>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="text" id="name" name="name" class="form-control" placeholder="Your username" required>
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                <input type="password" id="password" name="password" class="form-control" placeholder="Your password" required>
                <button type="submit" class="btn btn-login">Log In</button>
            </form>
            {{-- <div class="divider">
                <span>or</span>
            </div> --}}
            {{-- <button class="btn btn-google">
                <img src="/icon/google.png" alt="Google" width="20">
                Continue with Google
            </button> --}}
            <div class="login-footer">
                <p>Don't have an account? <a href = "/register" >Sign Up</a></p>
            </div>
        </div>
    </div>
</body>
</html>
