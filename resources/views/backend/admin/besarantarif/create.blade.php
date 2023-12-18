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
                                <li class="breadcrumb-item"><a href="{{ route('besaranTarif.index') }}">List Besaran Tarif</a></li>
                                <li class="breadcrumb-item active">Tambah Besaran Tarif</li>
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
                            <form action='{{ route('besaranTarif.store') }}' method='POST'>
                                @csrf
                                <div class="row">
                                    <!-- input -->
                                    <div class="mb-3">
                                        <label for="zonaparkir" class="form-label">Zona Parkir</label>
                                        <select class="form-control" name="zonaparkir_id" id="zonaparkir_id" style="width: 100%">
                                            <option value>Pilih Zona Parkir</option>
                                            @foreach ($zonaparkirs as $k)
                                                <option value="{{ $k->id }}">{{ $k->zona_parkir }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kendaraan" class="form-label">Jenis Kendaraan</label>
                                        <select class="form-control" name="kendaraan_id" id="kendaraan_id" style="width: 100%">
                                            <option value>Pilih Jenis Kendaraan</option>
                                            @foreach ($kendaraan as $k)
                                                <option value="{{ $k->id }}">{{ $k->jenis_kendaraan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenisTarif" class="form-label">Jenis Tarif</label>
                                        <select class="form-control" name="jenistarif_id" id="jenistarif_id" style="width: 100%">
                                            <option value>Pilih Jenis Tarif</option>
                                            @foreach ($jenisTarif as $k)
                                                <option value="{{ $k->id }}">{{ $k->jenis_tarif }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Besaran Tarif</label>
                                        <input type="number" class="form-control" placeholder="Masukkan besaran Tarif" name="besaran_tarif"  required>
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

@include('backend.admin.besarantarif.scriptbesarantarif')


