@include('backend.admin.layout.header')
@include('backend.admin.layout.topbar')
@include('backend.admin.layout.sidebarleft')
@include('sweetalert::alert')


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
                                <li class="breadcrumb-item active">List Jenis Kendaraan</li>
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

                            <div class="col-sm-12">
                                <div class="text-sm-end">
                                    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-2"><i class="mdi mdi-plus-circle me-2"></i>Jenis Kendaraan</a>
                                </div>
                            </div><!-- end col-->
                            <div class="tab-content">
                                <div class="tab-pane show active" id="buttons-table-preview">
                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Jenis Kendaraan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kendaraans as $item)
                                            <tr>
                                                <td>{{$item->jenis_kendaraan}}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="uil-ellipsis-v"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="{{ route('kendaraan.edit', $item->id) }}" class="dropdown-item">
                                                                    <i class="uil-pen"></i>&nbsp;&nbsp;Edit
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('kendaraan.destroy', $item->id) }}" class="dropdown-item" data-confirm-delete="true">
                                                                    <i class="uil-trash-alt"></i>&nbsp;&nbsp;Hapus
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- end preview-->

                            </div> <!-- end tab-content-->

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row-->

        </div> <!-- container -->

    </div>
    <!-- content -->



@include('backend.admin.layout.footer')

@include('backend.admin.kendaraan.scriptkendaraan')


