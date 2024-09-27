<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Del Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
</head>
<body>
            <div class="login-text">
                <h2>Welcome to</h2>
                    <h1>DEL CAFE</h1>
            </div>
        <div class="login-container">
        <div class="login-form">
            <h2>Join us</h2>
            <h3>Create a Del Cafe Account</h3><br>
            <form action="{{ route('register') }}" method="POST">
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
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
                <input type="password" name="password" class="form-control" placeholder="Your password" required>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" required>
                <button type="submit" class="btn btn-login">Sign Up</button>
            </form>

            {{-- <div class="divider">
                <span>or</span>
            </div> --}}
            {{-- <button class="btn btn-google">
                <img src="/icon/google.png" alt="Google" width="20">
                Continue with Google
            </button> --}}
            <div class="login-footer">
                <p>Already have an account? <a href = "/login" >Log in</a></p>
            </div>
        </div>
    </div>
</body>
</html>
