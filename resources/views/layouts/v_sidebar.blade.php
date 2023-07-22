<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Masjid Nurul imam</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            {{-- MENU PENGGUNA --}}
            {{-- SEMUA PENGGUNA / USER MEMPUNYAI MENU INI --}}
            <li class="menu-header">Pengguna</li>
            <li class="" id="liDashboard"><a class="nav-link" href="{{ URL::to('/dashboard') }}"><i
                        class="far fa-chart-bar"></i> <span>Dashboard</span></a></li>
            <li class="" id="liProfile"><a class="nav-link" href="{{ URL::to('/profile') }}"><i
                        class="far fa-user"></i>
                    <span>Profile</span></a></li>



            @if (auth()->user()->role == 'Administrator')
                {{-- MENU ADMIN --}}
                <li class="menu-header">Admin</li>

                <li class="" id="liBantuan"><a class="nav-link" href="{{ URL::to('/admin/pengguna') }}"><i
                            class="far fa-address-card"></i> <span>Pengguna</span></a></li>

                <li class="" id="liKegiatanMasjid"><a class="nav-link"
                        href="{{ URL::to('/admin/kegiatan_masjid') }}"><i class="far fa-file-alt"></i>
                        <span>Kegiatan Masjid</span></a></li>

                <li class="" id="liKasMasuk"><a class="nav-link" href="{{ URL::to('/admin/kas_masuk') }}"><i
                            class="far fa-money-bill-alt"></i>
                        <span>Kas Masuk</span></a></li>

                <li class="" id="liKasKeluar"><a class="nav-link" href="{{ URL::to('/admin/kas_keluar') }}"><i
                            class="far fa-money-bill-alt"></i>
                        <span>Kas Keluar</span></a></li>

                <li class="" id="liRekapKas"><a class="nav-link" href="{{ URL::to('/admin/rekap_kas') }}"><i
                            class="far fa-money-bill-alt"></i>
                        <span>Rekap Kas</span></a></li>

                <li class="" id="liJadwalCeramah"><a class="nav-link"
                        href="{{ URL::to('/admin/jadwal_ceramah') }}"><i class="far fa-calendar-alt"></i>
                        <span>Jadwal Ceramah</span></a></li>


                {{-- END OF MENU ADMIN --}}
            @endif


            @if (auth()->user()->role == 'bendahara')
                <li class="" id="liKasMasuk"><a class="nav-link" href="{{ URL::to('/admin/kas_masuk') }}"><i
                            class="far fa-money-bill-alt"></i>
                        <span>Kas Masuk</span></a></li>

                <li class="" id="liKasKeluar"><a class="nav-link" href="{{ URL::to('/admin/kas_keluar') }}"><i
                            class="far fa-money-bill-alt"></i>
                        <span>Kas Keluar</span></a></li>

                <li class="" id="liRekapKas"><a class="nav-link" href="{{ URL::to('/admin/rekap_kas') }}"><i
                            class="far fa-money-bill-alt"></i>
                        <span>Rekap Kas</span></a></li>
            @endif


            @if (auth()->user()->role == 'masyarakat')
                <li class="" id="liKegiatanMasjid"><a class="nav-link"
                        href="{{ URL::to('/admin/kegiatan_masjid') }}"><i class="far fa-file-alt"></i>
                        <span>Kegiatan Masjid</span></a></li>
                <li class="" id="liRekapKas"><a class="nav-link" href="{{ URL::to('/admin/rekap_kas') }}"><i
                            class="far fa-money-bill-alt"></i>
                        <span>Rekap Kas</span></a></li>

                <li class="" id="liJadwalCeramah"><a class="nav-link"
                        href="{{ URL::to('/admin/jadwal_ceramah') }}"><i class="far fa-calendar-alt"></i>
                        <span>Jadwal Ceramah</span></a></li>
            @endif



        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ URL::to('/logout') }}" class="btn bg-main text-white btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </aside>
</div>
