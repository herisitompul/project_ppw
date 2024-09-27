<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DelCafe Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
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
    {{-- slidebar --}}
    <div id="carouselExampleIndicators" class="carousel slide mx-2 my-2" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/images/slide1.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/slide2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/slide3.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <section class="container">
        <h2>Apa aja nih yang enak di DelCafe?</h2>
        <div class="row">
            <div class="col-md-3 product-card">
                <img src="/images/bakwan.jpg" alt="Bakwan Saus Kacang">
                <h4>Bakwan Saus Kacang</h4>
                <p>Wortel, kubis, kacang</p>
                <p>Rp 10.000,00</p>
            </div>
            <div class="col-md-3 product-card">
                <img src="product2.jpg" alt="Tempe Mendoan">
                <h4>Tempe Mendoan</h4>
                <p>Tempe, saos</p>
                <p>Rp 12.000,00</p>
            </div>
            <div class="col-md-3 product-card">
                <img src="product3.jpg" alt="Nugget Ayam">
                <h4>Nugget Ayam</h4>
                <p>Daging Ayam, saos</p>
                <p>Rp 15.000,00</p>
            </div>
            <div class="col-md-3 product-card">
                <img src="/images/bakwan.jpg" alt="Bakwan Saus Kacang">
                <h4>Bakwan Saus Kacang</h4>
                <p>Wortel, kubis, kacang</p>
                <p>Rp 10.000,00</p>
            </div>
            <div class="col-md-3 product-card">
                <img src="/images/bakwan.jpg" alt="Bakwan Saus Kacang">
                <h4>Bakwan Saus Kacang</h4>
                <p>Wortel, kubis, kacang</p>
                <p>Rp 10.000,00</p>
            </div>
            <!-- Tambahkan lebih banyak produk sesuai kebutuhan -->
        </div>
    </section>
    
    <!-- Bootstrap JS and dependencies (for dropdown functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
