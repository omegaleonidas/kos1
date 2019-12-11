
  <!-- Services -->
  <section class="page-section" id="macamKos">
  <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Macam Macam Kamar </h2>
          <h3 class="section-subheading text-muted">pilihlah kamar sesuai kenyamanan anda</h3>
        </div>
      </div>
    <div class="container">
      <div class="row">
		  

<?php   foreach ($kamar as $kmr)  : ?>

	  <div class="card ml-4" style="width: 20rem;">
  <img src="<?php echo base_url().'/uploads/image.jpg' ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> jenis Kamar :  <?php   echo $kmr['jenis']; ?> </h5>

    <h5>  HARGA : <span class="badge badge-pill  badge-success"> Rp. <?php   echo $kmr['harga']; ?></span></h5>
   <!-- <a href="masuk" class="btn btn-primary">Booking</a> -->
    <a href="auth/pemesanan/<?=$kmr['id']?>" class="btn btn-primary">Booking</a>
    <!-- <a href="booking/pemesanan/<?=$kmr['id']?>" class="btn btn-primary">Booking</a> -->
  </div>
</div>
<?php  endforeach;   ?>


      </div>
    </div>
  </section>