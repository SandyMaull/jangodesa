<!-- Navigation -->
<nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('img/logo-bg.png') }}" width="65px" height="65px"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="SejarahNavbar" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Tentang Jango Desa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="SejarahNavbar">
                        <a class="dropdown-item" href="#Sejarah">Sejarah</a>
                        <a class="dropdown-item" href="#VisiMisi">Visi&Misi</a>
                        <a class="dropdown-item" href="#StOrganisasi">Struktur Organisasi</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="PublikasiNavbar" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Publikasi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="PublikasiNavbar">
                        <a class="dropdown-item" href="{{url('/publikasi')}}">TIM</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('/publikasi/berita')}}">Berita</a>
                        <a class="dropdown-item" href="#">Artikel</a>
                        {{-- <a class="dropdown-item" href="#">Video</a> --}}
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ProgramNavbar" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Program
                    </a>
                    <div class="dropdown-menu" aria-labelledby="ProgramNavbar">
                        <a class="dropdown-item" href="#">Penelitian</a>
                        <a class="dropdown-item" href="#">Pemberdayaan Masyarakat</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Donasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Connect">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
