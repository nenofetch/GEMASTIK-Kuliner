<!-- Header -->
<div class="header right dark sticky">
    <div class="container">
        <!-- Logo -->
        <div class="header-logo">
            <h3><a href="#">SIKUKU</a></h3>
        </div>
        <!-- Menu -->
        <div class="header-menu">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/') }}#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/') }}#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/') }}#faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/') }}#shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list-produk') }}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
        <button class="header-toggle">
            <span></span>
        </button>
    </div><!-- end container -->
</div>
<!-- end Header -->