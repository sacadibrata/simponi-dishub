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
                                <li class="breadcrumb-item"><a href="{{ route('jabatan.index') }}">List Jabatan</a></li>
                                <li class="breadcrumb-item active">Edit Jabatan</li>
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
                            <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Jabatan Name</label>
                                        <input type="text" class="form-control" value="{{ $jabatan->nama_jabatan }}" name="nama_jabatan"  required>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-outline-primary mb-2">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->
        </div> <!-- container -->

    </div>
    <!-- content -->



@include('backend.admin.layout.footer')

@include('backend.admin.jabatan.scriptjabatan')


