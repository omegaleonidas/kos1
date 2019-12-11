
  <!-- Services -->
  <section class="page-section" id="fasilitas">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Fasilitas</h2>
          <h3 class="section-subheading text-muted">kami memberikanfan fasilitas yang nyaman untuk anda</h3>
        </div>
      </div>


      <?php   foreach ($fasilitas as $fls)  : ?>

      <div class="row text-center">
        <div class="col-md-5">
          <span class="fa-stack fa-5x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
          
          </span>
          <h4 class="service-heading">   <?php echo $fls['judul']; ?> </h4>
          <p class="text-muted"> <?php   echo $fls['keterangan']; ?></p>
        </div>
         
      <?php  endforeach;   ?>
    </div>
  </section>
