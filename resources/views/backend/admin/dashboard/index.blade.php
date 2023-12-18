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
                                <!-- isi dengan breadcrumb -->
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard SIMPONI</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Juru Parkir</h5>
                                    <h3 class="my-2 py-1">100</h3>

                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <span class="logo-lg">
                                            <img src="assets/images/user.png" alt="logo">
                                        </span>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">Lokasi Parkir</h5>
                                    <h3 class="my-2 py-1">50</h3>
                                </div>
                                <div class="col-4">
                                    <div class="text-end">
                                        <span class="logo-lg">
                                            <img src="assets/images/location.png" style="width: 60px" alt="logo">
                                        </span>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Pengguna</h5>
                                    <h3 class="my-2 py-1">25</h3>
                                </div>
                                <div class="col-6">
                                    <span class="logo-lg">
                                        <img src="assets/images/users.png" alt="logo">
                                    </span>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Rekap Pendapatan</h5>
                                    <h6 class="my-2 py-1">Rp. 450.000.000</h6>
                                </div>
                                <div class="col-4">
                                    <span class="logo-lg">
                                        <img src="assets/images/revenue.png" alt="logo">
                                    </span>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-h-100">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <h4 class="header-title">Target Vs Realisasi</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div dir="ltr">
                                <div id="high-performing-product" class="apex-charts" data-colors="#727cf5,#91a6bd40"></div>
                            </div>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div>
                <!-- end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Rekap Pendapatan</h4>
                            <div>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    ALL
                                </button>
                                <button type="button" class="btn btn-soft-primary btn-sm">
                                    1M
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    6M
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    1Y
                                </button>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="chart-content-bg">
                                <div class="row text-center">
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0 mt-3">Bulan Ini</p>
                                        <h4 class="fw-normal mb-3">
                                            <span>Rp. 15.575.000</span>
                                        </h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-muted mb-0 mt-3">Bulan Lalu</p>
                                        <h4 class="fw-normal mb-3">
                                            <span>Rp. 20.750.000</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div dir="ltr">
                                <div id="dash-revenue-chart" class="apex-charts" data-colors="#0acf97,#fa5c7c"></div>
                            </div>

                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->


            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Top Performing</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Leads</th>
                                            <th>Deals</th>
                                            <th>Tasks</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h5 class="font-15 mb-1 fw-normal">Jeremy Young</h5>
                                                <span class="text-muted font-13">Senior Sales Executive</span>
                                            </td>
                                            <td>187</td>
                                            <td>154</td>
                                            <td>49</td>
                                            <td class="table-action">
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="font-15 mb-1 fw-normal">Thomas Krueger</h5>
                                                <span class="text-muted font-13">Senior Sales Executive</span>
                                            </td>
                                            <td>235</td>
                                            <td>127</td>
                                            <td>83</td>
                                            <td class="table-action">
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="font-15 mb-1 fw-normal">Pete Burdine</h5>
                                                <span class="text-muted font-13">Senior Sales Executive</span>
                                            </td>
                                            <td>365</td>
                                            <td>148</td>
                                            <td>62</td>
                                            <td class="table-action">
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="font-15 mb-1 fw-normal">Mary Nelson</h5>
                                                <span class="text-muted font-13">Senior Sales Executive</span>
                                            </td>
                                            <td>753</td>
                                            <td>159</td>
                                            <td>258</td>
                                            <td class="table-action">
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="font-15 mb-1 fw-normal">Kevin Grove</h5>
                                                <span class="text-muted font-13">Senior Sales Executive</span>
                                            </td>
                                            <td>458</td>
                                            <td>126</td>
                                            <td>73</td>
                                            <td class="table-action">
                                                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div>
                <!-- end col-->

                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Recent Leads</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-2">
                            <div class="d-flex align-items-start">
                                <img class="me-3 rounded-circle" src="assets/images/users/avatar-2.jpg" width="40" alt="Generic placeholder image">
                                <div class="w-100 overflow-hidden">
                                    <span class="badge badge-warning-lighten float-end">Cold lead</span>
                                    <h5 class="mt-0 mb-1">Risa Pearson</h5>
                                    <span class="font-13">richard.john@mail.com</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mt-3">
                                <img class="me-3 rounded-circle" src="assets/images/users/avatar-3.jpg" width="40" alt="Generic placeholder image">
                                <div class="w-100 overflow-hidden">
                                    <span class="badge badge-danger-lighten float-end">Lost lead</span>
                                    <h5 class="mt-0 mb-1">Margaret D. Evans</h5>
                                    <span class="font-13">margaret.evans@rhyta.com</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mt-3">
                                <img class="me-3 rounded-circle" src="assets/images/users/avatar-4.jpg" width="40" alt="Generic placeholder image">
                                <div class="w-100 overflow-hidden">
                                    <span class="badge badge-success-lighten float-end">Won lead</span>
                                    <h5 class="mt-0 mb-1">Bryan J. Luellen</h5>
                                    <span class="font-13">bryuellen@dayrep.com</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mt-3">
                                <img class="me-3 rounded-circle" src="assets/images/users/avatar-5.jpg" width="40" alt="Generic placeholder image">
                                <div class="w-100 overflow-hidden">
                                    <span class="badge badge-warning-lighten float-end">Cold lead</span>
                                    <h5 class="mt-0 mb-1">Kathryn S. Collier</h5>
                                    <span class="font-13">collier@jourrapide.com</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mt-3">
                                <img class="me-3 rounded-circle" src="assets/images/users/avatar-1.jpg" width="40" alt="Generic placeholder image">
                                <div class="w-100 overflow-hidden">
                                    <span class="badge badge-warning-lighten float-end">Cold lead</span>
                                    <h5 class="mt-0 mb-1">Timothy Kauper</h5>
                                    <span class="font-13">thykauper@rhyta.com</span>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mt-3">
                                <img class="me-3 rounded-circle" src="assets/images/users/avatar-6.jpg" width="40" alt="Generic placeholder image">
                                <div class="w-100 overflow-hidden">
                                    <span class="badge badge-success-lighten float-end">Won lead</span>
                                    <h5 class="mt-0 mb-1">Zara Raws</h5>
                                    <span class="font-13">austin@dayrep.com</span>
                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->

            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div>
    <!-- content -->


@include('backend.admin.dashboard.scriptdashboard')


@include('backend.admin.layout.footer')





