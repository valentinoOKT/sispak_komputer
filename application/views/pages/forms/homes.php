<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Home
      <small>Diagnosa Kerusakan Hardware Komputer</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      <li class="active">Home</li>
    </ol>
  </section>


    <!-- Main content -->
    <section class="content">
      <div class="container">
      <div class="jawaban">
          <br>
          <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <style>
              .right img {
                transform: scale(1.20);
                filter: brightness(50%);
                transition: opacity 0.4s, transform 0.4s;
              }

              .right img:hover {
                transform: scale(1.03);
                filter: brightness(85%);
              }
              </style>

              <div class="right">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                <div class="item active">
              <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/Komputer.jpg" alt="komputer" style="width:100%;">
              <div class="carousel-caption">
                <h3>Komputer</h3>
              </div>
            </div>

            <div class="item">
              <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/sispak.jpg" alt="Sistem Pakar" style="width:100%;">
              <div class="carousel-caption">
                <h3>Sistem Pakar</h3>
              </div>
            </div>
            <div class="item">
              <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/servis.jpg" alt="Servis Komputer" style="width:100%;">
              <div class="carousel-caption">
                <h3>Servis Komputer</h3>
              </div>
            </div>
                </div>

              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

          <hr>
          <!-- Left-aligned media object -->
          <div class="media">
            <div class="media-left">
              <img src="<?php echo base_url(); ?>assets/img/teknisi.jpg" alt="doctor" class="media-object" style="width:60px">
            </div>
            <div class="media-body">
              <h3 class="media-heading">Diagnosa Kerusakan Hardware Komputer</h3>
              <p>Sistem Pakar Diagnosa Kerusakan hardware komputer menggunakan Metode Forward Chaining berbasis WEB merupakan suatu sistem yang dapat mendiagnosa kerusakan hardware komuter berdasarkan gejala-gejala yang dialami komputer.
                  Sistem ini bertujuan untuk membantu para pengguna komputer yang sering mnegalami kerusakan pada hardware komputer. Sistem ini dapat memudahkan pengguna komputer untuk menemukan kerusakan yang dialami komputer sehingga tidak perlu menemui orang servis komputer terlebih dahulu</p>
            </div>
          <br>
          </div>
      </div>
      </div>
    </section>




  <script type="text/javascript">

  $('#click').on("click",function(){
    console.log('ok');


  });
  </script>
  <!-- /.content -->
</div>
