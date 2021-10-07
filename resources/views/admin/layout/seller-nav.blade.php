<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('storage/'.Auth::user()->store->foto) }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2 text-capitalize">{{ Auth::user()->name }}</span>
                    <span class="text-secondary text-small">{{ Auth::user()->store->nama }}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item {{ Request::path() === 'admin' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('user.dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('seller.edit_toko') }}">
                <span class="menu-title">Edit Toko</span>
                <i class="mdi mdi mdi-account-multiple menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('seller.product') }}">
                <span class="menu-title">Product</span>
                <i class="mdi mdi-shopping menu-icon"></i>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Transaksi</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-shopping menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('seller.transaksi') }}">Pesanan Baru</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('seller.transaksi.perludicek' )  }}">Perlu Di Cek</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('seller.transaksi.perludikirim') }}">Perlu Di Kirim</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('seller.transaksi.dikirim') }}">Barang Di Kirim</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('seller.transaksi.selesai') }}">Selesai</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('seller.transaksi.dibatalkan') }}">Dibatalkan</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>