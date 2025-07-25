<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tips
      <small>Perawatan Hardware Komputer</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-commenting"></i> Tips</a></li>
      <li class="active">Tips</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container">
    <div class="jawaban">
        <div class="row">
          <div class="jawab">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-maroon"><i class="fa fa-commenting"></i></span>
                <div class="info-box-content">
                  <h4>Tips Perawatan Hardware Komputer</h4>
                  Tekan nama kerusakan untuk memunculkan tips perawatan hardware komputer yang mengalami kerusakan tersebut
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->

            <?php
            foreach ($kerusakan as $key) {
            ?>
            <div class="box box-info collapsed-box">
              <div class="box-header with-border" data-widget="collapse">
                <h3 class="box-title"><?php echo $key->nama_kerusakan; ?></h3><button type="button" class="btn btn-box-tool"><i class="fa fa-angle-down"></i></button>
              </div>
              <div class="box-body">
                <?php echo $key->penanganan; ?>
              </div>
            </div>
            <?php
            }
             ?>

          </div>
        </div>
    </div>
    </div>
  </section>
  <!-- /.content -->
</div>
