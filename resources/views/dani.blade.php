<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PERISAI SMK Telkom Makassar">
    <meta name="author" content="Metrotech Digital Asia">

    <title>PERISAI Telkom Makassar</title>

    <!-- Styles -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://perisai.smktelkom-mks.sch.id/assets/front-end/css/bootstrap.css" rel="stylesheet">
    <link href="https://perisai.smktelkom-mks.sch.id/assets/front-end/css/fontawesome-all.css" rel="stylesheet">
    <link href="https://perisai.smktelkom-mks.sch.id/assets/front-end/css/swiper.css" rel="stylesheet">
    <link href="https://perisai.smktelkom-mks.sch.id/assets/front-end/css/magnific-popup.css" rel="stylesheet">
    <link href="https://perisai.smktelkom-mks.sch.id/assets/front-end/css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/front-end/img/favicon/apple-touch-icon_kb80nr.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/front-end/img/favicon/favicon-32x32_ux2g6r.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/front-end/img/favicon/favicon-16x16_gvhou0.png">
    <link rel="manifest" href="assets/front-end/img/favicon/site_pva2qo.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XT3YZHPV7P"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-XT3YZHPV7P');
    </script>
</head>


<body data-spy="scroll" data-target=".fixed-top">
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

        <a class="navbar-brand logo-image" href="/"><img
                src="assets/front-end/img/other/logo_pcpqhr.png"
                alt="alternative"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">HOME <span
                            class="sr-only">(current)</span></a>
                </li>

                                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pendaftaran">JALUR PENDAFTARAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#jadwalPdbb">JADWAL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="https://smktelkom-mks.sch.id/profilJurusan" target="_blank" rel="noopener noreferrer">PROFIL JURUSAN</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" data-toggle="modal" data-target="#loginModal" href="#">LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Header Home -->
        <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h2><span class="turquoise text-uppercase" style="font-size: 47px">Perisai-Stelk 2022</span></h2>
                            <h3>SMK TELKOM MAKASSAR</h3>
                            <p class="p-large">Selamat datang di website penerimaan siswa baru Telkom School tahun ajaran 2022/2023.</p>
                            <p class="p-large" style="line-height: 0; font-weight: bold;"><a data-toggle="modal" data-target="#persayaratanModal" href="#">* Syarat Pendaftaran</a></p>
                            <a class="btn-solid-lg page-scroll" href="https://perisai.smktelkom-mks.sch.id/register" >DAFTAR SEKARANG</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid"
                                src="assets/front-end/img/other/header_qmlonf.png"
                                alt="alternative">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>




    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0">
                <h3 class="modal-title" id="exampleModalLabel">Login Akun</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="https://perisai.smktelkom-mks.sch.id/user/login" id="form-login" method="POST">
                    <input type="hidden" name="_token" value="7MFSHAdRNeDNHNCI36LQBVHLe5LI9w8wPez3Wj5k">                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">NISN:</label>
                        <input type="text" class="form-control" id="nisnLogin" name="nisn">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <label for="message-text" class="col-form-label">*Gunakan NISN sebagai password</label>
                    </div>
                    <div style="font-weight: bold;">
                        Belum Daftar PERISAI-STELK 2021 ? <a class="btn btn-link" href="/register">Ayo Daftar</a>
                    </div>

            </div>
            <div class="modal-footer" style="border-top: 0">
                <button type="submit" class="btn btn-primary">LOGIN</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="persayaratanModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0">
                <h3 class="modal-title" id="exampleModalLabel">Syarat Pendaftaran</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="basic-2" style="padding-bottom: 1rem;">
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Foto Copy Rapor Kelas VIII (Semester 1 dan 2) 1 Lembar</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Foto Copy Ijazah SD 1 Lembar</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Foto Copy Kartu Keluarga 1 Lembar</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Foto Copy Akte Kelahiran 1 Lembar</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Pas Foto 3x4 ( Berwarna Atau Hitam Putih ) 2 Lembar</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Menyiapkan NISN (Nomor Induk Siswa Nasional)</div>
                        </li>
                    </ul>
                </div>
                <div>
                    <b style="margin-bottom: 20px;">Catatan:</b>
                    <p>Berkas diatas dibawa serta pada saat registrasi dipanitia PERISAI-STELK</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jalur Pendaftaran -->
<div id="pendaftaran" class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Jalur Pendaftaran</h2>
                <p class="p-heading p-large">Berikut merupakan jalur pendaftaran yang kami tawarkan kepada calon
                    pendaftar.</p>
            </div>
        </div>
    </div>
</div>

<!-- Details 1 -->
<div class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Jalur Prestasi</h2>
                    <p>Berikut merupakan persyaratan untuk jalur prestasi:</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Bidang prestasi meliputi Akademik dan Non Akademik</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Nilai Raport Kelas VIII</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Tahap 1: Verifikasi Berkas</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Tahap 2: Psikotes, Kesehatan &amp; Wawancara</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Proses tes wawancara diikuti oleh orang tua dan calon siswa</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5" style="align-self:center">
                <div class="image-container">
                    <img class="img-fluid"
                        src="assets/front-end/img/other/prestasi_zfglb5.svg"
                        alt="PERISAI SMK TELKOM MAKASSAR">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Details 2 -->
<div class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5" style="align-self:center">
                <div class="image-container">
                    <img class="img-fluid"
                        src="assets/front-end/img/other/reguler_gs404c.svg"
                        alt="PERISAI SMK TELKOM MAKASSAR"">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Jalur Reguler</h2>
                    <p>Berikut merupakan persyaratan untuk jalur reguler:</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Seleksi Tahap 1 berupa Tes Akademik</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Materi tes Akademik: Matematika, Bahasa Inggris &amp; IPA</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Seleksi Tahap 2 berupa tes non akademik</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Tes non akademik: Psikotes, kesehatan dan wawancara</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Proses tes wawancara diikuti oleh orang tua dan calon siswa</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Details 3 -->
<div class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Jalur Prestasi Khusus</h2>
                    <p>Berikut merupakan persyaratan untuk jalur prestasi:</p>
                    <br/>
                    <p style="font-weight:bold">Memiliki salah satu prestasi yang ada dibawah ini :</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Pernah menjuarai lomba tingkat nasional minimal juara 5 atau tingkat kota minimal juara 3 (dibuktikan dengan sertifikat)</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Pernah menjabat sebagai Ketua/Wakil Ketua Osis (dibuktikan dengan sertifikat)</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Memiliki hafalan al-quran minamal 1 Juz (dibuktikan dengan sertifikat)</div>
                        </li>
                        <br/>
                        <p>Lainnya :</p>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Nilai Rapor minimal 7.00 Untuk Mapel B. Ing, Mtk, dan IPA </div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Mendapat surat rekomendasi dari Sekolah Asal</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Tahap 1: Verifikasi Berkas</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Tahap 2: Psikotes, Kesehatan &amp; Wawancara</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Proses tes wawancara diikuti oleh calon siswa</div>
                        </li>
                    </ul>
                    <br/>
                    <p style="font-weight:bold">Note :</p>
                    <p>Jika telah lulus pada jalur reguler dan memenuhi persyaratan untuk mengikuti Jalur Prestasi Khusus maka peserta Jalur Reguler dapat mengikuti pe-rankingan pada Jalur Prestasi Khusus tanpa melalui tes yang sudah dilewati sebelumnya. Silahkan menghubungi Panitia Perisai 2022.</p>
                </div>
            </div>
            <div class="col-lg-5" style="align-self:center">
                <div class="image-container">
                    <img class="img-fluid"
                        src="assets/front-end/img/other/prestasi_zfglb5.svg"
                        alt="PERISAI SMK TELKOM MAKASSAR">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jadwal PDBB -->
<div id="jadwalPdbb" class="cards-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Jadwal PERISAI</h2>
                <p class="p-heading p-large">Berikut merupakan jadwal PERISAI-STELK untuk calon pendaftar.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <!-- Card-->
                                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Jalur Reguler 3</div>
                        <div class="card-subtitle">Rp. 200.000</div>
                        <hr class="cell-divide-hr">
                        <div class="price">
                            <div class="frequency" style="margin-bottom: 10px;">Jadwal Pendaftaran:</div>
                            <span class="value">10 April 2022</span>
                            <div class="frequency">-</div>
                            <span class="value">27 Mei 2022</span>
                        </div>
                        <hr class="cell-divide-hr">
                        <div class="price">
                            <div class="frequency" style="margin-bottom: 10px;">Test / Ujian:</div>
                            <span class="value">28 Mei 2022</span>
                        </div>
                        <hr class="cell-divide-hr">
                        <div class="price">
                            <div class="frequency" style="margin-bottom: 10px;">Pengumuman:</div>
                            <span class="value">31 Mei 2022</span>
                        </div>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="https://perisai.smktelkom-mks.sch.id/register">DAFTAR</a>
                        </div>
                    </div>
                </div>


                                <div class="card">
                    <div class="card-body">
                        <div class="card-title">CBT</div>
                        <div class="card-subtitle">Rp. 200.000</div>
                        <hr class="cell-divide-hr">
                        <div class="price">
                            <div class="frequency" style="margin-bottom: 10px;">Jadwal Pendaftaran:</div>
                            <span class="value">29 April 2022</span>
                            <div class="frequency">-</div>
                            <span class="value">30 Juli 2022</span>
                        </div>
                        <hr class="cell-divide-hr">
                        <div class="price">
                            <div class="frequency" style="margin-bottom: 10px;">Test / Ujian:</div>
                            <span class="value">6 Juni 2022</span>
                        </div>
                        <hr class="cell-divide-hr">
                        <div class="price">
                            <div class="frequency" style="margin-bottom: 10px;">Pengumuman:</div>
                            <span class="value">13 Juni 2022</span>
                        </div>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="https://perisai.smktelkom-mks.sch.id/register">DAFTAR</a>
                        </div>
                    </div>
                </div>


                            </div>
        </div>
    </div>
</div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-col" style="text-align: justify;">
                        <h4>Tentang Kami</h4>
                        <p><b>SMK TELKOM MAKASSAR</b> dengan tekad hendak membentuk insan berkarakter unggul dalam
                            kerangka pencerdasan anak bangsa
                            dan pembangunan peradaban bangsa.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Lokasi Kami</h4>
                        <p>Jl. A. P. Pettarani No.4, Gn. Sari, Rappocini, Kota Makassar, Sulawesi Selatan 90222.</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col last">
                        <h4>Social Media Kami</h4>
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/smktelkommakassar" target="_blank" rel="noopener noreferrer">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/stelkmakassar/?hl=id" target="_blank" rel="noopener noreferrer">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <b>SMK TELKOM MAKASSAR</b></p>
                </div>
            </div>
        </div>
    </div>
</body>
<div class="modal fade" id="konfirmasiDaftarModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" style="justify-content: center;">
                    <img src="assets/front-end/img/other/undraw_Mail_sent_re_0ofv_crmwlv.svg"
                        width="300" height="241" alt="PERISAI SMK Telkom Makassar" style="padding-bottom: 5%;">
                    <h6>Registrasi anda berhasil.</h6>
                    <p>Selanjutnya kami akan melakukan verifikasi data.</p>
                    <p style="text-align: center;">Biaya Pendaftaran Di Transfer Ke Rekening </br><b>Bank Mandiri No.
                            1740001157809</b></br>Atas Nama <b>Adhytia
                            Adhyaksa</b></p>
                </div>
                <div style="text-align: center; margin: 20px 0px 20px 0px;">
                    <a class="btn-solid-lg page-scroll" href="https://bit.ly/uploadberkasperisai2022" target="_blank"
                        rel="noopener noreferrer">Upload
                        Berkas</a>
                </div>
                <div style="margin-bottom: 20px;">
                    <p><b>Catatan:</b></br> Silahkan Login menggunakan <b>NISN</b> dan <b>Password: NISN</b>. Anda baru bisa <b>login</b> setelah <b>berkas anda di verifikasi</b> oleh pihak panitia, paling lambat 2x24 jam. Jika terdapat kendala, silahkan hubungi kontak dibawah.</p>
                </div>
                <div>
                    <p><b>Contact Person:</b></p>
                    <div style="display: flex;">
                        <p style="width: 40%">Pak Farid: </br>+62 812 41196425</p>
                        <p style="width: 40%">Ibu Widi: </br>+62 823 48586115</p>
                        <p style="width: 40%">Ibu Nisa: </br>+62 852 99740725</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script src="https://perisai.smktelkom-mks.sch.id/assets/front-end/js/jquery.min.js"></script>
<script src="https://perisai.smktelkom-mks.sch.id/assets/front-end/js/popper.min.js"></script>
<script src="https://perisai.smktelkom-mks.sch.id/assets/front-end/js/bootstrap.min.js"></script>
<script src="https://perisai.smktelkom-mks.sch.id/assets/front-end/js/jquery.easing.min.js"></script>
<script src="https://perisai.smktelkom-mks.sch.id/assets/front-end/js/swiper.min.js"></script>
<script src="https://perisai.smktelkom-mks.sch.id/assets/front-end/js/jquery.magnific-popup.js"></script>
<script src="https://perisai.smktelkom-mks.sch.id/assets/front-end/js/validator.min.js"></script>
<script src="https://perisai.smktelkom-mks.sch.id/assets/front-end/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script>
          $('#form-login').submit(function (e) {
            e.preventDefault();
            var that = this;
            $.post(this.action, $(this).serialize()).then((res) => {
                if (res.message == "success") {
                    window.location.href = "https://perisai.smktelkom-mks.sch.id/home/user"
                } else if (res.message == "invalid") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Akun anda belum aktif',
                    })
                } else if(res.message=="Username/Password Salah!!"){
                     Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Username/Password Salah!!',
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        html: res.html,
                    })
                }
                $(that)[0].reset();
            }, (err) => {
                alert(err.responseText);
            })
        })
    </script>
    <script type="text/javascript">
        // jQuery wait till the page is fullt loaded
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#konfirmasiDaftarModal').modal({
                        backdrop: 'static',
                        keyboard: true,
                        show: false
            });

            $(document).ready(function(e) {
                $('#konfirmasiDaftarModal').on('hidden.bs.modal', function(e) {
                    window.location.href = '/'
                });
            });


            window.addEventListener('DOMContentLoaded', function() {
                $(function() {
                    $('#provinsi').on('change', function() {
                        axios.post('https://perisai.smktelkom-mks.sch.id/register', {
                                    id: $(this).val()
                                })
                            .then(function(response) {
                                $('#kabupaten').empty();

                                $.each(response.data, function(id, name) {
                                    $('#kabupaten').append(new Option(name, id))
                                })
                            });
                    });
                });
            });



        // initiate a click function on each search result

        // $("#konfirmasiDaftarModal").modal('show')

        $("#form-insert").submit(function(e) {
        e.preventDefault();
        let data = new FormData(this);
        let that = this;
        $.ajax({
            url: that.action,
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(res) {
                if (res.message == "successfully") {
                    $(that)[0].reset()
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'berhasil daftar',
                    //     showConfirmButton: true,
                    // }).then(function() {
                    //     window.location.href = "https://perisai.smktelkom-mks.sch.id"
                    // });
                    $('#konfirmasiDaftarModal').modal('show');
                }
            },
            error: function(err) {
                if (err.status == 422) { // when status code is 422, it's a validation issue
                    let errors = [];
                    for (key in err.responseJSON.errors) {
                        errors.push(err.responseJSON.errors[key])
                    }
                    let html = '';
                    errors.map(e => {
                        html += `${e},`
                    })
                    Swal.fire({
                        icon: 'error',
                        html: listErrors = html.split(",").join("</br>")

                    })
                }
            }
        })
        })
        });
    </script>
</html>
