<section class="banner_area">
	<div class="booking_table d_flex align-items-center">
		<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
		</div>
		<div class="container">
			<div class="banner_content text-center">
				<h6>Kost </h6>
				<h2>Relax Your Mind</h2>
				<p>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in
					price. You may see some for as low as $.17 each.</p>
				<a href="<?php  echo base_url('register/index')   ?>" class="btn theme_btn button_hover">Register</a>
			</div>
		</div>
	</div>
	<div class="hotel_booking_area position">
		<div class="container">
			<div class="hotel_booking_table">
				<div class="col-md-3">
					<h2>Login</h2>
				</div>
				<div class="col-md-9">
					<div class="boking_table">
						<div class="row">
							<div class="col-md-4">
								<div class="book_tabel_item">
									<div class="form-group">
										<div class='input-group date' id='datetimepicker11'>
                                            <input type='txtemail' class="form-control" placeholder="Email" />
                                            <?= form_error('txtemail','<small class="text-danger">','</small>');?>

										</div>
									</div>
									<div class="form-group">
										<div class='input-group date' id='datetimepicker1'>


										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="book_tabel_item">
									<div class="form-group">
										<div class='input-group date' id='datetimepicker11'>
                                            <input type='password' class="form-control" placeholder="Password" />
                                            <?= form_error('password','<small class="text-danger">','</small>');?>

										</div>
									</div>


								</div>
							</div>
							<div class="col-md-4">
								<div class="book_tabel_item">

									<a class="book_now_btn button_hover" href="<?=base_url('auth')?>">Login</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
