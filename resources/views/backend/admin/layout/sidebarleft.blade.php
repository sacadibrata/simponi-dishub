<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/simponi_logo.png') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/simponi_logo.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/simponi_logo.png') }}" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/simponi_logo.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="{{ asset('pengguna/'.$users->foto) }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">{{ $users->name}}</span>
                <span class="leftbar-user-name">{{ $users->role->nama_role}}</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Navigation</li>

            <li class="side-nav-item">
                <a href="{{ route('admin.indexAdmin') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>Dashboards</span>
                </a>
            </li>

            <li class="side-nav-title">Kelola Simponi</li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTarif" aria-expanded="false" aria-controls="sidebarTarif" class="side-nav-link">
                    <i class='uil uil-bill'></i>
                    <span>Kelola Tarif</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTarif">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('kendaraan.index') }}">Jenis Kendaraan</a>
                        </li>
                        <li>
                            <a href="{{ route('tarif.index') }}">Jenis Tarif</a>
                        </li>
                        <!--- Belum Berfungsi
                        <li>
                            <a href="{{ route('besaranTarif.index') }}">Besaran Tarif</a>
                        </li>
                        -->
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('jukir.index') }}" class="side-nav-link">
                    <i class='uil uil-users-alt'></i>
                    <span>Kelola Juru Parkir (Jukir)</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarParkir" aria-expanded="false" aria-controls="sidebarParkir" class="side-nav-link">
                    <i class='uil uil-map-marker'></i>
                    <span>Kelola Lokasi Parkir </span>
                    <span class="menu-arrow"></span>

                </a>
                <div class="collapse" id="sidebarParkir">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('zonaparkir.index') }}">Zona Parkir</a>
                        </li>
                        <!--- Belum Berfungsi
                        <li>
                            <a href="#">Lokasi Parkir</a>
                        </li>
                        -->
                        <li>
                            <a href="{{ route('besaranTarif.index') }}">Set Besaran Tarif Zona Parkir</a>
                        </li>
                        <li>
                            <a href="#">Tambah Jukir pada Zona Parkir</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTransaksi" aria-expanded="false" aria-controls="sidebarTransaksi" class="side-nav-link">
                    <i class='uil uil-file-check-alt'></i>
                    <span>Kelola Laporan</span>
                    <span class="menu-arrow"></span>

                </a>
                <div class="collapse" id="sidebarTransaksi">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="#">Transaksi</a>
                        </li>
                        <li>
                            <a href="#">Laporan Transaksi</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title">Kelola Pengguna</li>

            <li class="side-nav-item">
                <a href="{{ route('role.index') }}" class="side-nav-link">
                    <i class=" ri-file-user-line"></i>
                    <span>Hak Akses</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('jabatan.index') }}" class="side-nav-link">
                    <i class='uil uil-briefcase-alt'></i>
                    <span>Jabatan</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('pengguna.index') }}" class="side-nav-link">
                    <i class=" uil-user-circle"></i>
                    <span>Pengguna</span>
                </a>
            </li>

        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->
