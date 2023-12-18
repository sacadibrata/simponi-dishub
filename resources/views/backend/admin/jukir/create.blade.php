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
                                        <label for="Jabatan" class="form-label">Nama</label>
                                        <select class="form-control" name="user_id" id="user_id" style="width: 100%">
                                            <option value>Pilih Staf</option>
                                            @foreach ($penggunas as $k)
                                                <option value="{{ $k->id }}">{{ $k->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="NIK" class="form-label">NIP</label>
                                        <input class="form-control" type="text" id="nip" name="nip" placeholder="Masukkan NIP" value="{{ $randomNIP }}" required>
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


