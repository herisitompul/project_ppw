<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Del Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: right;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            background: url('/images/bakwan.jpg');
            background-position: left;
            background-repeat: no-repeat;
            background-size: 1110px;
            height: 100vh;
            width: 100%;
        }
        .login-container {
            /* display: flex; */
            position: absolute;
            right: 100px;
            width: 30%;
            /* max-width: 1000px; */
            /* box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); */
            /* border-radius: 10px; */
            /* overflow: hidden; */
            background-color: white;
        }
        /* .login-image {
            flex: 1;
            background: url('/images/login-image.jpg') no-repeat center center;
            background-size: cover;
            position: relative;
        } */
        /* .login-image::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        } */
        .login-text {
            position: absolute;
            left: 200px;
            /* top: 50%; */
            /* transform: translateY(-50%); */
            color: white;
        }
        .login-text h1 {
            font-size: 5rem;
            margin: 0;
            font-family: 'Aharoni', sans-serif;
        }
        .login-form {
            flex: 1;
            padding: 40px;
        }
        .login-form h2{
            font-size: 2rem;
            margin: 0;
            font-family: 'Arial Rounded MT Bold', sans-serif;
            font-weight: bold;
        }
        .login-form h3 {
            font-size: 2rem;
            font-family: 'Arial Rounded MT Bold', sans-serif;
            font-weight: bold;

        }
        .form-control {
            margin-bottom: 20px;
        }
        .btn-login {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
        }
        .btn-google {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            color: #333;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            margin-top: 20px;
        }
        .btn-google img {
            margin-right: 10px;
        }
        .login-footer {
            text-align: center;
            margin-top: 20px;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #ccc;
            margin: 0 10px;
        }

        .divider span {
            color: #888;
            font-size: 14px;
        }

    </style>
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
                <input type="text" name="name" class="form-control" placeholder="Your username or email" required>
                {{-- <input type="email" name="email" class="form-control" placeholder="Email" required> --}}
                <input type="password" name="password" class="form-control" placeholder="Your password" required>
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
