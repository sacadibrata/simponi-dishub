
<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

<head>
    <meta charset="utf-8" />
    <title>SIMPONI | {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Select2 css -->
    <link href="assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg pb-0">

    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="card-body d-flex flex-column h-100 gap-3">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <a href="index.html" class="logo-dark">
                        <span><img src="assets/images/simponi_logo.png" alt="dark logo" height="70"></span>
                    </a>
                    <a href="index.html" class="logo-light">
                        <span><img src="assets/images/simponi_logo.png" alt="logo" height="70"></span>
                    </a>
                </div>

                <div class="my-auto">
                    <!-- title-->
                    <h4 class="mt-3">Daftar Dulu Yuk</h4>
                    <hr>

                    <!-- form -->
                    <form method="POST" action="{{ route('register') }}" id="validation-form" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="NIK" class="form-label">NIK</label>
                            <input class="form-control" type="text" id="fullname" name="nik" placeholder="Masukkan Nomor Identitas Kamu" required>
                        </div>
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Nama Lengkap</label>
                            <input class="form-control" type="text" id="fullname" name="name" placeholder="Masukkan Nama Kamu" required>
                        </div>
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Jenis Kelamin</label>
                            <select class="form-control select2" name="jenisKelamin" data-toggle="select2">
                                <option>Pilih Jenis Kelamin</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Username" class="form-label">Username</label>
                            <input class="form-control" type="text" id="fullname" name="username" placeholder="Masukkan Username Kamu" required>
                        </div>
                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Email</label>
                            <input class="form-control" type="email" id="emailaddress" name="email" required placeholder="Masukkan Email Kamu">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" required id="password" name="password" placeholder="Masukkan Password Kamu">
                        </div>
                        <div class="mb-3">
                            <label for="Jabatan" class="form-label">Jabatan</label>
                            <select class="form-control" name="jabatan_id" id="jabatan_id" style="width: 100%">
                                <option value>Pilih Hak Akses</option>
                                @foreach ($jabatans as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Telepon" class="form-label">No Telepon</label>
                            <input class="form-control" type="text" id="Telepon" name="notelp" placeholder="Masukkan Nomor Telepon Kamu" required>
                        </div>
                        <div class="mb-3">
                            <label for="Tempat" class="form-label">Tempat Lahir</label>
                            <input class="form-control" type="text" id="Tempat" name="tempatlhr" placeholder="Masukkan Nomor Telepon Kamu" required>
                        </div>
                        <div class="mb-3">
                            <label for="Tanggal" class="form-label">Tanggal Lahir</label>
                            <input class="form-control" type="date" id="Tanggal" name="tgllahir" placeholder="Masukkan Tanggal Lahir Kamu" required>
                        </div>
                        <div class="mb-3">
                            <label for="Hak Akses" class="form-label">Hak Akses</label>
                            <select class="form-control" name="role_id" id="role_id" style="width: 100%">
                                <option value>Pilih Hak Akses</option>
                                @foreach ($roles as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_role }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Tempat" class="form-label">Alamat</label>
                            <input class="form-control" type="text" id="Alamat" name="alamat" placeholder="Masukkan Nomor Telepon Kamu" required>
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" name="foto" id="foto">
                        </div>

                        <div class="mb-0 d-grid text-center">
                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-account-circle"></i> Sign Up </button>
                        </div>

                    </form>
                    <!-- end form-->
                </div>

                <!-- Footer-->
                <div class="mb-0">
                    <footer class="footer footer-alt">
                        <p class="text-muted">Sudah Punya Akun? <a href="{{ route('loginForm') }}" class="text-muted ms-1"><b>Silakan Masuk</b></a></p>
                    </footer>
                </div>

            </div> <!-- end .card-body -->
        </div>
        <!-- end auth-fluid-form-box-->

         <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3">SIMPONI</h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i> SISTEM INFORMASI PARKIR ONLINE <i class="mdi mdi-format-quote-close"></i>
                    </p>
                </div> <!-- end auth-user-testimonial-->
            </div>
         <!-- end Auth fluid right content -->

    </div>
    <!-- end auth-fluid-->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

   <!-- Code Highlight js -->
   <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
   <script src="assets/vendor/clipboard/clipboard.min.js"></script>
   <script src="assets/js/hyper-syntax.js"></script>

   <!-- Dropzone File Upload js -->
   <script src="assets/vendor/dropzone/min/dropzone.min.js"></script>

   <!-- File Upload Demo js -->
   <script src="assets/js/ui/component.fileupload.js"></script>

   <!--  Select2 Js -->
    <script src="assets/vendor/select2/js/select2.min.js"></script>

</body>

</html>
