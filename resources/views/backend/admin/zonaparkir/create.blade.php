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
                                <li class="breadcrumb-item"><a href="{{ route('zonaparkir.index') }}">List Zona Parkir</a></li>
                                <li class="breadcrumb-item active">Tambah Zona Parkir</li>
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
                            <form action='{{ route('zonaparkir.store') }}' method='POST'>
                                @csrf
                                <div class="row">
                                    <!-- input -->
                                    <div class="mb-3">
                                        <label class="form-label">Nama Zona Parkir</label>
                                        <input type="text" class="form-control" placeholder="Nama Zona Parkir" name="zona_parkir"  required>
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

@include('backend.admin.zonaparkir.scriptzonaparkir')


