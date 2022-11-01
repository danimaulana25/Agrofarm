<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fas fa-city me-2"></i>AGROFARM</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('admin/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth::user() -> name}}</h6>
                <span>{{Auth::user() -> role}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/adminhome" class="nav-item nav-link {{Request::is('adminhome') ? 'active' : ''}}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="/" class="nav-item nav-link {{Request::is('/') ? 'active' : ''}}"><i class="fas fa-laptop me-2"></i>Landingpage</a>
            <a href="/adminproduk" class="nav-item nav-link {{Request::is('adminproduk') ? 'active' : ''}}"><i class="fas fa-coffee me-2"></i>Product</a>
            <a href="/adminkategori" class="nav-item nav-link {{Request::is('adminkategori') ? 'active' : ''}}"><i class="fas fa-leaf me-2"></i>Kategori</a>
            <a href="/adminpengambilan" class="nav-item nav-link {{Request::is('adminpengambilan') ? 'active' : ''}}"><i class="fas fa-people-carry me-2 "></i>Pengambilan</a>
            <a href="/adminpenjualan" class="nav-item nav-link {{Request::is('adminpenjualan') ? 'active' : ''}}"><i class="fas fa-shopping-cart me-2"></i>Penjualan</a>
            <a href="index.html" class="nav-item nav-link"><i class="fas fa-book me-2"></i>Laporan</a>
        </div>
    </nav>
</div>