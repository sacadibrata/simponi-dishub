@include('backend.admin.layout.header')
@include('backend.admin.layout.topbar')
@include('backend.admin.layout.sidebarleft')

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
                                <li class="breadcrumb-item"><a href="{{ route('jukir.index') }}">List Juru Parkir</a></li>
                                <li class="breadcrumb-item active">Tambah Juru Parkir</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{ $title }}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="my-auto">
                                <!-- form -->
                                <form method="POST" action="{{ route('jukir.store') }}" id="validation-form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="NIK" class="form-label">NIP</label>
                                        <input class="form-control" type="text" id="nip" name="nip" placeholder="Masukkan NIP" value="{{ $randomNIP }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Nama Lengkap</label>
                                        <input class="form-control" type="text" id="fullname" name="namaJukir" value="{{ $penggunas->name }}"  required>
                                        <input type="hidden" name="user_id" value="{{ $penggunas->id }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email</label>
                                        <input class="form-control" type="email" id="emailaddress" name="emailJukir" value="{{ $penggunas->email }}" required placeholder="Masukkan Email Kamu">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Telepon" class="form-label">No Telepon</label>
                                        <input class="form-control" type="text" id="Telepon" name="notelp" value="{{ $penggunas->notelp }}" placeholder="Masukkan Nomor Telepon Kamu" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Tempat" class="form-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" id="Tempat" name="tempatLahir" value="{{ $penggunas->tempatlhr }}" placeholder="Masukkan Nomor Telepon Kamu" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Tanggal" class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" id="Tanggal" name="tanggalLahir" value="{{ $penggunas->tgllahir }}" placeholder="Masukkan Tanggal Lahir Kamu" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control" type="text" id="Alamat" name="alamat" placeholder="Masukkan Alamat Kamu" required></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-outline-primary mb-2">Simpan</button>
                                    </div>

                                </form>
                                <!-- end form-->
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->

        </div> <!-- container -->

    </div>
    <!-- content -->



@include('backend.admin.layout.footer')

@include('backend.admin.role.scriptrole')


