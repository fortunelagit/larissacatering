<?php $__env->startSection('content'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/main.css')); ?> ">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
  <body>
  
<section id="main">
        <div id="Carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
            <li data-target="#Carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block mb-5">
                    <h1 class="display-3 h-color">Semua Jenis Masakan Ada Disini</h1>
                    <p class="lead">Catering Larissa melayani segala jenis pesanan, mulai dari tumpeng, nasi kotak, prasmanan, hingga cake dan roti.</p>
                    <a href="#" class="btn btn-color slide-btn btn-lg">Daftar Sekarang</a>
                </div>
              </div>
            </div>
    
            <div class="carousel-item carousel-image-2">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block mb-5">
                    <h1 class="display-3 h-color">Berbagai Menu Tersedia</h1>
                    <p class="lead">Ingin melihat apa saja yang tersedia? Langsung jelajah produk-produk kami!</p>
                    <a href="#" class="btn btn-color slide-btn btn-lg">Lihat Menu</a>
                </div>
              </div>
            </div>
    
            <div class="carousel-item carousel-image-3">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block  mb-5">
                    <h1 class="display-3 h-color">Masih Bingung?</h1>
                    <p class="lead">Silahkan akses panduan pemesanan di bawah ini.</p>
                    <a href="#" class="btn btn-color slide-btn btn-lg">Bantuan</a>
                </div>
              </div>
            </div>
        </div>
        
    
        <a href="#Carousel" data-slide="prev" class="carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
    
        <a href="#Carousel" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon"></span>
        </a>
      </section>
      
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Program Files\XAMPP\htdocs\larissacatering\resources\views/home.blade.php ENDPATH**/ ?>