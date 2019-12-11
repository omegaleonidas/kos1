
  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
        <form action="<?=base_url('Kontak/insert')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" name="txtname" type="text" placeholder="Your Name *">
                    <?= form_error('txtname','<small class="text-danger">','</small>');?>
                </div>
                <div class="form-group">
              
                  <input type='Email' class="form-control" name='txtemail' placeholder="Email" />
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" name="txtno" placeholder="Your Phone *">
                
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" name="txtmessage" placeholder="Your Message *" ></textarea>
                 
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
               
              <button type="submit" class="btn btn-primary ml-2 " >
                               Submit
                             </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
