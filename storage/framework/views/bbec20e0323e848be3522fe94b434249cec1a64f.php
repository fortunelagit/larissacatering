<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/main.css')); ?> ">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo e(asset('assets/images/logo.png')); ?>" class= "catering-logo" alt="catering-logo">
            </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
              
            <li class="nav-item">
                <a href="#" class="nav-link">Menu</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Bantuan</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Kontak</a>
              </li>
              <?php if(Route::has('login')): ?>
                
                    <?php if(auth()->guard()->check()): ?>
                        <li>
                        <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline nav-link">Home</a>
                        </li>
                    <?php else: ?>
                        <li>
                        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline nav-link">LOGIN</a>
                        </li>
                      <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>" class="text-sm text-gray-700 dark:text-gray-500 nav-link underline">REGISTER</a>
                        <?php endif; ?>    
                    <?php endif; ?>
                
            <?php endif; ?>
            </ul>
            
          </div>
        </div>
      </nav>

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
      
    <footer class="footer mt-5">
      <div class="container">
          <div class="row mb-3">
              <div class="col-lg-8 offset-lg-2 text-center">
                <h2 class="py-3">Kontak Kami</h2>
                  <p>Ingin mengenal kami lebih lanjut? Silahkan cek akun sosial media kami.</p>
                  <div class="justify-content-center">
                    <i class="fab fa-whatsapp fa-2x" href="#"></i>
                    <i class="fab fa-instagram fa-2x" href="#"></i>
                  </div>
             </div>
          </div>
          <div class="copyright text-center py-3 border-top text-light">
            <p>Made by Fortunela with ❤️</p>
              
          </div>
      </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH E:\Program Files\XAMPP\htdocs\larissacatering\resources\views/welcome.blade.php ENDPATH**/ ?>