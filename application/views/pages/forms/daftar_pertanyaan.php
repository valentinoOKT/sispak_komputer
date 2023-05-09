<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pertanyaan
      <small>Diagnosa Kerusakan Hardware Komputer</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-list"></i> Pertanyaan</a></li>
      <li class="active">Pertanyaan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

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
        .carousel .item {
          height: 230px;
        }

        .item img {
            position: absolute;
            top: 0;
            left: 0;
            min-height: 230px;
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
        <img src="<?php echo base_url(); ?>assets/img/logo_50.png" alt="doctor" class="media-object" style="width:60px">
      </div>
      <div class="media-body">
        <h3 class="media-heading">Sistem Pakar Komputer</h3>
        <p>Sistem Pakar Diagnosa Kerusakan hardware komputer menggunakan Metode Forward Chaining berbasis WEB merupakan suatu sistem yang dapat mendiagnosa kerusakan hardware komuter berdasarkan gejala-gejala yang dialami komputer.
          Sistem ini bertujuan untuk membantu para pengguna komputer yang sering mnegalami kerusakan pada hardware komputer. Sistem ini dapat memudahkan pengguna komputer untuk menemukan kerusakan yang dialami komputer sehingga tidak perlu menemui orang servis komputer terlebih dahulu</p>
      </div>
    <br>
    </div>

    <!-- Left-aligned media object -->
    <div class="media">
      <div class="media-left">
        <img src="<?php echo base_url(); ?>assets/img/doctor.png" alt="doctor" class="media-object" style="width:60px">
      </div>
      <div class="media-body">
        <h3 class="media-heading">Diagnosa Kerusakan Hardware Komputer</h3>
        <p>Daftar pertanyaan ini disusun oleh seorang ahli yang berpengalaman dibidang teknik komputer yaitu bapak Bryan David S.Kom.
          Bapak Bryan David ini sudah memiliki pengalaman dalam bidang servis komputer selama 4 tahun dan sekarang beliau bekerja sebegaia servis komputer di mall TangCity.</p>
      </div>
    <hr>
    </div>

    <br>

    <div class="container">
    <div class="jawaban">
        <div class="row">
          <div class="jawab">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>
                <div class="info-box-content">
                  <h4>Jawablah pertanyaan berikut ini :</h4>
                  <span class="progress-description">
                    Untuk mendiagnosis kerusakan hardware komputer
                  </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->

            <script>
            var base_url = 'http://localhost/sispak_komputer/'
            var api_rule = base_url+'api_rule'

            let rule_list = []
            let gejala_list = []

            fetch(api_rule)
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error(response.statusText);
                    }
                })
                .then(data => {
                    rule_list = data.rule;
                });


            function pencet(click_gejala) {
              var kode_gejala = click_gejala
              gejala_list.push(kode_gejala)
              //console.log(gejala_list)
              for (var i = 0; i < rule_list.length; i++) {
                rule = rule_list[i].kode_gejala.split(" ")
                merge = rule.concat(gejala_list)
                let findDuplicates = arr => arr.filter((item, index) => arr.indexOf(item) != index)
                duplicate = ([...new Set(findDuplicates(merge))])
                if (JSON.stringify(duplicate) === JSON.stringify(rule)) {
                  submitForm(duplicate)
                }
              }
              function submitForm(jawaban) {
                var form = document.createElement("form");
                var element1 = document.createElement("input");
                var element2 = document.createElement("input");

                var today = new Date();
                var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                var dateTime = date+' '+time;

                form.method = "POST";
                form.action = base_url+'Konsultasi_control/cek_diagnosa';

                element1.value=jawaban;
                element1.name="jawaban";
                form.appendChild(element1);

                element2.value=dateTime;
                element2.name="waktu";
                form.appendChild(element2);

                document.body.appendChild(form);

                form.submit();
              }
            }
            function pencet_last(click_gejala) {
              var kode_gejala = click_gejala
              gejala_list.push(kode_gejala)
              //console.log(gejala_list)
              for (var i = 0; i < rule_list.length; i++) {
                rule = rule_list[i].kode_gejala.split(" ")
                merge = rule.concat(gejala_list)
                let findDuplicates = arr => arr.filter((item, index) => arr.indexOf(item) != index)
                duplicate = ([...new Set(findDuplicates(merge))])
                if (JSON.stringify(duplicate) === JSON.stringify(rule)) {
                  submitForm(duplicate)
                }
              }
              submitLast()
              function submitForm(jawaban) {
                var form = document.createElement("form");
                var element1 = document.createElement("input");
                var element2 = document.createElement("input");

                var today = new Date();
                var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                var dateTime = date+' '+time;

                form.method = "POST";
                form.action = base_url+'Konsultasi_control/cek_diagnosa';

                element1.value=jawaban;
                element1.name="jawaban";
                form.appendChild(element1);

                element2.value=dateTime;
                element2.name="waktu";
                form.appendChild(element2);

                document.body.appendChild(form);

                form.submit();
              }
              function submitLast() {
                var form = document.createElement("form");
                var element1 = document.createElement("input");
                var element2 = document.createElement("input");

                var today = new Date();
                var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                var dateTime = date+' '+time;

                form.method = "POST";
                form.action = base_url+'Konsultasi_control/cek_diagnosa';

                element1.value=gejala_list;
                element1.name="jawaban";
                form.appendChild(element1);

                element2.value=dateTime;
                element2.name="waktu";
                form.appendChild(element2);

                document.body.appendChild(form);

                form.submit();
              }
            }
            function lastNo() {
              var form = document.createElement("form");
              var element1 = document.createElement("input");
              var element2 = document.createElement("input");

              var today = new Date();
              var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
              var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
              var dateTime = date+' '+time;

              form.method = "POST";
              form.action = base_url+'Konsultasi_control/cek_diagnosa';

              element1.value=gejala_list;
              element1.name="jawaban";
              form.appendChild(element1);

              element2.value=dateTime;
              element2.name="waktu";
              form.appendChild(element2);

              document.body.appendChild(form);

              form.submit();
            }
            </script>

            <form name="form_pertanyaan">

            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalpertanyaan1" data-backdrop="static" data-keyboard="false">
              Mulai Pertanyaan
            </button>
            <hr>

            <?php
            $no = 1;
            foreach ($pertanyaan as $p) {
              ?>
              <div class="modal modal-default fade" id="modalpertanyaan<?php echo $no; ?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><?php echo $p->gejala; ?>?</h4>
                    </div>
                    <div class="modal-body">
                      <div class="center-block well">
                        <div class="text-center">
                          <button type="button" class="btn btn-success btn-block" data-dismiss="modal" id="jwby" onclick="<?php if ($jumlah_pertanyaan==$no) {echo "pencet_last('".$p->kode_gejala."')";}else {echo "pencet('".$p->kode_gejala."')";} ?>" name="jwby" data-toggle="modal" data-target="#modalpertanyaan<?php echo $no+1; ?>" data-backdrop="static" data-keyboard="false">Ya</button>
                          <br>
                          <button type="button" class="btn btn-danger btn-block" data-dismiss="modal" id="jwbt" onclick="<?php if ($jumlah_pertanyaan==$no) {echo "lastNo()";}?>" name="jwbt" data-toggle="modal" data-target="#modalpertanyaan<?php echo $no+1; ?>" data-backdrop="static" data-keyboard="false">Tidak</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              $no++;
            }
            ?>

            <script>
            /*
              const container = document.getElementById("container");
              fetch('http://localhost/sispak_komputer/api_pertanyaan')
                  .then(response => {
                      if (response.ok) {
                          return response.json();
                      } else {
                          throw new Error(response.statusText);
                      }
                  })
                  .then(data => {
                      pertanyaan_list = data.pertanyaan;
                      pertanyaan_list.forEach(obj => {
                        let li = document.createElement("li");
                        let node = document.createTextNode(obj.gejala);
                        li.appendChild(node);
                        container.appendChild(li);
                      });
                  });
              */
              </script>

            <!--div class="modal modal-default fade" id="modalakhir">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Jawaban Anda :</h4>
                  </div>

                  <div class="modal-body" id="hasil-jawaban">

                  </div>

                  <div class="modal-footer">
                    <div class="pertanyaan">
                      <input type="hidden" name="waktu" value="<php echo date('Y-m-d H:i:s'); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="button">Diagnosis</button>
                    <a href="<php //echo base_url(); ?>konsultasi">
                      <button type="button" class="btn btn-danger" name="button">Ulangi</button>
                    </a>
                  </div>

                </div>
              </div>
            </div-->

            </form>
          </div>
        </div>

    </div>
    </div>
  </section>
  <!-- /.content -->
</div>

<script type="text/javascript">
$(document).ready(function () {

 $('.modal').on("hidden.bs.modal", function (e) { //fire on closing modal box
        if ($('.modal:visible').length) { // check whether parent modal is opend after child modal close
            $('body').addClass('modal-open'); // if open mean length is 1 then add a bootstrap css class to body of the page
        }
    });
});

</script>
