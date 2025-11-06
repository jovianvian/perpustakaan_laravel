<div class="col-md-3 col-lg-2 bg-dark text-white min-vh-100 p-3">
    <div class="text-center mb-3">
        <img src="{{ asset('images/asset1.png') }}" alt="Logo" class="img-fluid mb-2" width="50%">
        <a href="/home" class="nav-link text-white text-nowrap d-inline-block">
            <h5 class="fs-6 mb-0">Aplikasi Perpustakaan</h5>
        </a>
    </div>

    <hr class="text-white">

    <ul class="nav flex-column">

        @if(Session('level') == 1 || Session('level') == 2)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">
                    Data Master
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/databuku">Data Buku</a></li>
                    <li><a class="dropdown-item" href="/datamasuk">Data Masuk Buku</a></li>
                    <li><a class="dropdown-item" href="/peminjaman">Data Peminjaman</a></li>
                </ul>
            </li>
        @endif

        @if(Session('level') == 1)
            <li class="nav-item">
                <a class="nav-link text-white" href="/datauser">Data User</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">
                    Laporan
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/laporanpeminjaman">Laporan Peminjaman</a></li>
                    <li><a class="dropdown-item" href="/laporanmasuk">Laporan Buku Masuk</a></li>
                </ul>
            </li>
        @endif

        @if(Session('level') == 4)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">
                    Laporan
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/laporanpeminjaman">Laporan Peminjaman</a></li>
                    <li><a class="dropdown-item" href="/laporanmasuk">Laporan Buku Masuk</a></li>
                </ul>
            </li>
        @endif


        @if(Session('level') == 3)
            <li class="nav-item">
                <a class="nav-link text-white" href="/koleksi">Koleksi Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/riwayat">Riwayat Peminjaman</a>
            </li>
        @endif

        @if(Session::has('id'))
            <li class="nav-item mt-3">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100">Logout</button>
                </form>
            </li>
        @endif
    </ul>
</div>
<div class="col-md-9 col-lg-10 p-4">
