<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DelCafe Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Header Styling */
        .header {
            background-color: #0000000a;
            padding: 10px 20px;
            border-bottom: 1px solid #e0e0e0b4;
        }

        /* Flex container for logo, navigation, and icons */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo and brand name */
        .logo-img {
            width: 150px;
            margin-right: 10px;
        }

        .brand-name {
            font-size: 24px;
            color: #4caf50;
            font-weight: bold;
        }

        /* Navigation styling */
        .nav-link {
            margin-right: 20px;
            color: #000;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #4caf50;
            border-bottom: 2px solid #4caf50;
        }

        /* Search bar */
        .search-bar input {
            width: 500px;
            padding: 5px 10px;
            border-radius: 20px;
            border: 1px solid #ccc;
            margin-right: 20px;
        }

        /* Icons styling */
        .icons {
            display: flex;
            align-items: center;
        }

        .cart-icon img {
            width: 40px;
            margin-right: 20px;
        }

        /* User dropdown styling */
        .user-icon {
            background-color: #4caf50;
            color: white;
            border-radius: 50%;
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .user-initial {
            font-size: 18px;
        }

        .dropdown-menu {
            min-width: 200px;
        }

        .dropdown-header {
            padding: 10px 15px;
            background-color: #f5f5f5;
            border-bottom: 1px solid #e0e0e0;
        }

        .dropdown-item:hover {
            background-color: #4caf50;
            color: white;
        }

        /* Responsive for mobile */
        @media (max-width: 768px) {
            .search-bar input {
                width: 200px;
            }

            .nav-link {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo and Brand Name -->
            <div class="logo d-flex align-items-center">
                <img src="/images/logo.png" alt="delCafe Logo" class="logo-img">
            </div>

            <!-- Navigation Menu -->
            <nav class="nav">
                <a href="#" class="nav-link">Beranda</a>
                <a href="#" class="nav-link">Pesanan saya</a>
            </nav>

            <!-- Search, Cart, and User Icon -->
            <div class="icons d-flex align-items-center">
                <!-- Search Bar -->
                <div class="search-bar">
                    <input type="text" class="form-control" placeholder="Search...">
                </div>

                <!-- Cart Icon -->
                <a href="#" class="cart-icon">
                    <img src="/icon/cart.png" alt="Cart" width="60px">
                </a>

                <!-- User Dropdown -->
                <div class="dropdown">
                    @if (auth()->check())
                        <button class="user-icon dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- Menampilkan Inisial Pengguna -->
                            <span class="user-initial">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-header">
                                <!-- Menampilkan Nama dan Email Pengguna -->
                                <strong>{{ auth()->user()->name }}</strong><br>
                                <small>{{ auth()->user()->email }}</small><br>
                            </div>
                            <a class="dropdown-item" href="#">Pesanan saya</a>
                            <!-- Tombol Keluar -->
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Keluar</button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- Bootstrap JS and dependencies (for dropdown functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
