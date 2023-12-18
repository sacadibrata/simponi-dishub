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
                                <li class="breadcrumb-item"><a href="{{ route('tarif.index') }}">List Jenis Tarif</a></li>
                                <li class="breadcrumb-item active">Tambah Jenis tarif</li>
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
                            <form action='{{ route('tarif.store') }}' method='POST'>
                                @csrf
                                <div class="row">
                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Tarif</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Jenis Tarif" name="jenis_tarif"  required>
                                    </div>
                                    <div>
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

@include('backend.admin.jenistarif.scriptjenistarif')


