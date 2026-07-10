<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{{ url('/dashboard') }}">
                        <img src="{{ asset('template/assets/compiled/svg/logo.svg')}}" alt="Logo" srcset="">
                        <!-- <a href="index.html"><img src="{{ asset('template/assets/static/images/logo/logo.svg')}}" alt="Logo" srcset=""></a> -->
                    </a>
                </div>
                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block">
                        <i class="bi bi-x bi-middle"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu Utama</li>
                <li class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-title">Master Data</li>
                <li class="sidebar-item {{ request()->is('alat') ? 'active' : '' }}">
                    <a href="{{ url('/alat') }}" class="sidebar-link">
                        <i class="bi bi-hdd-stack-fill"></i>
                        <span>Data Alat</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('ruangan') ? 'active' : '' }}">
                    <!-- <a href="{{ url('/ruangan') }}" class="sidebar-link"> -->
                    <a href="{{ url('/dashboard/#') }}" class="sidebar-link">
                        <i class="bi bi-building"></i>
                        <span>Data Ruangan</span>
                    </a>
                </li>
                <li class="sidebar-title">Transaksi</li>
                <li class="sidebar-item {{ request()->is('pemeliharaan') ? 'active' : '' }}">
                    <!-- <a href="{{ url('/pemeliharaan') }}" class="sidebar-link"> -->
                    <a href="{{ url('/dashboard/#') }}" class="sidebar-link">
                        <i class="bi bi-tools"></i>
                        <span>Pemeliharaan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="sidebar-link border-0 bg-transparent w-100 text-start">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
