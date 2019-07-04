<?php
session_start();
include '../konek.php';
include '../admin/cek.php';
if($_SESSION['type']!="siswa"){
    die("Error");
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Management School System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Sistem Akademik</div>
    <div class="address-bar">Adisty & Arifah</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Sistem Akademik</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="biodata.php">Profile</a>
                    </li>
                    <li>
                        <a href="nilai.php">Nilai</a>
                    </li>
                    <li>
                        <a href="gantipassword.php">Ganti Password</a>
                    </li>
                    <li>
                        <a href="../logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive img-full" src="img/slide11.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="img/slide12.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="img/slide13.jpg" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <small>Selamat datang di</small>
                </h2>
                <h1 class="brand-name">Management School System</h1>
                <hr class="tagline-divider">
                <h2>
                    <small>By
                        <strong>Adisty & Arifah</strong>
                    </small>
                </h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Politeknik Negeri Semarang</strong>
                </h2>
                <hr>
                <img class="img-responsive img-border img-left" src="img/slide14.png" alt="">
                <hr class="visible-xs">
                <p>Politeknik Negeri Semarang ( Semarang State Polytechnic ), adalah perguruan tinggi negeri yang terdapat di kota Semarang, Provinsi Jawa Tengah, Indonesia.</p>
                <p>Polines merupakan perguruan tinggi yang menyelenggarakan dan mengembangkan pendidikan vokasi. Dalam Undang-Undang Nomor 12 tahun 2012 tentang Pendidikan Tinggi tanggal 10 Agustus 2012, Pasal 16,  disebutkan bahwa pendidikan vokasi merupakan Pendidikan Tinggi program diploma yang menyiapkan mahasiswa untuk pekerjaan dengan keahlian terapan tertentu sampai program sarjana terapan.</p>
                <p>Politeknik Negeri Semarang pada awalnya bernama Politeknik Universitas Diponegoro (Politeknik UNDIP), Berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan No. 175/O/1997 tertanggal 6 Agustus 1997, terjadi pemisahan politeknik dari Universitas Diponegoro menjadi perguruan tinggi mandiri dengan nama Politeknik Negeri Semarang</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Jurusan 
                    <strong>Politeknik Negeri Semarang</strong>
                </h2>
                <hr>
                <img class="img-responsive img-border img-left" src="img/slide15.png" alt="">
                <p>Terdapat 5 Jurasan Di POLINES</p>
                <p> </p>
                <p>1. Teknik Mesin</p>
                <p>2. Teknik Sipil</p>
                <p>3. Teknik Elektro</p>
                <p>4. Administrasi Bisnis</p>
                <p>5. Akuntansi</p>
            </div>
        </div>n,m
    </div>

</div>
<!-- /.container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; Adisty & Arifah</p>
            </div>
        </div>
    </div>
</footer>
 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
