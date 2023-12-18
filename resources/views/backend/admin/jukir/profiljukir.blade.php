@include('backend.admin.layout.header')
@include('backend.admin.layout.topbar')
@include('backend.admin.layout.sidebarleft')
@include('sweetalert::alert')


<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.indexAdmin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('pengguna.index') }}">List Juru Parkir</a></li>
                            <li class="breadcrumb-item active">Profil Juru Parkir</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ $title }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-sm-12">
                <!-- Profile -->
                <div class="card bg-primary">
                    <div class="card-body shadow profile-user-box">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-lg">
                                            <img src="{{ asset('pengguna/'.$penggunas->foto) }}" alt="" class="rounded-circle img-thumbnail">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <h4 class="mt-1 mb-1 text-white">{{ $penggunas->name }}</h4>
                                            <p class="font-13 text-white-50">{{ $penggunas->nama_jabatan }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row -->

                    </div> <!-- end card-body/ profile-user-box-->
                </div><!--end profile/ card -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-4">
                <!-- Personal-Information -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">Informasi Pengguna</h4>
                        <hr/>

                        <div class="text-start">
                            <p class="text-muted"><strong>NIK:</strong> <span class="ms-2">{{ $penggunas->nik }}</span></p>

                            <p class="text-muted"><strong>Nama Lengkap:</strong> <span class="ms-2">{{ $penggunas->name }}</span></p>

                            <p class="text-muted"><strong>Jenis Kelamin:</strong> <span class="ms-2">{{ $penggunas->jenisKelamin }}</span></p>

                            <p class="text-muted"><strong>Tempat, Tanggal Lahir :</strong> <span class="ms-2">{{ $penggunas->tempatlhr }}, {{ \Carbon\Carbon::parse($penggunas->tgllahir)->isoFormat('DD MMMM YYYY') }}</span></p>

                            <p class="text-muted"><strong>No. Telp :</strong><span class="ms-2">{{ $penggunas->notelp }}</span></p>

                            <p class="text-muted"><strong>Email :</strong> <span class="ms-2">{{ $penggunas->email }}</span></p>

                            <p class="text-muted"><strong>Jabatan :</strong> <span class="ms-2">{{ $penggunas->nama_jabatan }}</span></p>

                            <p class="text-muted"><strong>Jabatan :</strong> <span class="ms-2">{{ $penggunas->alamat }}</span></p>

                        </div>
                    </div>
                </div>
                <!-- Personal-Information -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

    </div> <!-- container -->

    </div> <!-- content -->




@include('backend.admin.layout.footer')

@include('backend.admin.pengguna.scriptpengguna')


