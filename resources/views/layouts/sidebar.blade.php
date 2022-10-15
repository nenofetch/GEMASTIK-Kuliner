<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">
    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('assets') }}/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets') }}/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            @if (Auth::user()->hasRole('Administrator'))
                <li class="side-nav-item">
                    <a href="{{ route('dashboard.index') }}" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="{{ route('kategori.index') }}" class="side-nav-link">
                        <i class="uil-sitemap"></i>
                        <span> Kategori </span>
                    </a>
                </li>
            @endif

            <li class="side-nav-item">
                <a href="{{ route('toko.index') }}" class="side-nav-link">
                    <i class="uil-shop"></i>
                    <span> Toko </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('produk.index') }}" class="side-nav-link">
                    <i class="uil-cart"></i>
                    <span> Produk </span>
                </a>
            </li>

            @if (Auth::user()->hasRole('Administrator'))
                <li class="side-nav-item">
                    <a href="{{ route('pengguna.index') }}" class="side-nav-link">
                        <i class="uil-user"></i>
                        <span> Pengguna </span>
                    </a>
                </li>
            @endif
        </ul>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
