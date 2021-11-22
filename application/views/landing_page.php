<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.css">
        <script language='JavaScript'>
        var txt="Sistem Informasi Kepegawaian  ";
        var speed=300;
        var refresh=null;
        function action() { document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        refresh=setTimeout("action()",speed);}action();
        </script>

    <!-- StyleSheets -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/lmg.png"/>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>

<div class="sidebar-right" id="sidebar">
    <button class="btn btn-primary btn-lg btn-circle" onclick="sidebarClose()"> <i class="fa fa-times"></i> </button>
    <a href="#gototop" class="active">HOME</a>
    <a href="#services">TENTANG KAMI</a>
    <a href="<?php echo base_url('auth/login');?>">LOGIN</a>
</div>

<div class="bg">

    <nav class="navbar justify-content-between">
        <div class="logo">
            <a href="#">
                <img src="assets/images/lmg.png" alt="" srcset="" height="50px">
            </a>
        </div>
        <div class="menu">
            <a href="#gototop" class="active">HOME</a>
            <a href="#services">TENTANG KAMI</a>
            <a href="<?php echo base_url('auth/login');?>">LOGIN</a>
            <button class="btn btn-primary btn-lg icon" onclick="sidebarOpen()"><i class="fa fa-bars"></i></button>
        </div>
    </nav>

    <br>

    <div class="container-fluid">

        <div class="d-sm-flex justify-content-around content">

            <div class="content-left">
                <br>
                <br>
                <br>
                <br>
                <h1 class="text-blue"><b>SISTEM INFORMASI KEPEGAWAIAN</b></h1>
                <h1>KECAMATAN TIKUNG</h1>
                <div class="description">
                    <p>Jl. Raya Mantup No.29, Bakalanpule, Tikung, Kabupaten Lamongan, Jawa Timur 62281, Indonesia</p>
                </div>
                <br>
            </div>

            <div class="image1">
                <img src="assets/images/img.svg" alt="" srcset="" height="450px">
            </div>

        </div>

    </div>

</div>

    <!-- Tentang Kami -->
     <div class="container">
        <br>
         <!-- Tentang Kami -->
            <section id="services">
               <center>
                   <h1>Tentang Kami</h1>
               </center>
            <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/gapura.jpg" class="d-block w-100" alt="gapura" width="900" height="720">
                        <div class="carousel-caption d-none d-md-block">
                             <h3>Gapura</h3>
                             <p>Kabupaten Lamongan</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/pic.jpg" class="d-block w-100" alt="staff" width="900" height="720">
                        <div class="carousel-caption d-none d-md-block">
                             <h3>Staff dan Kepegawaian</h3>
                             <p>Kecamatan Tikung</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap4/js/bootstrap.js"></script> 
    <script src="assets/bootstrap4/js/bootstrap.js"></script>
</body>
<script>
    function sidebarOpen(){
        document.getElementById("sidebar").style.transform = "translateX(0px)";
    }
    function sidebarClose(){
        document.getElementById("sidebar").style.transform = "translateX(300px)";
    }
</script>
</html>
