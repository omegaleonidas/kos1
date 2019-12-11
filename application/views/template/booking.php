<!--================ Accomodation Area  =================-->


<script   type="text/javascript"   src="https://code.jquery.com/jquery-3.4.1.min.js" >       </script>
<script    type="text/javascript">
	$(".perhitungan").keyup(function(){
		var bil1 =  parseInt($("#bil1").val())
		var bil2 =  parseInt($("#bil2").val())

		var hasil  = bil2 * bil1;
		$("#hasil").attr("value",hasil)


	});

</script>
   <?php echo $script_captcha; // javascript recaptcha ?>
<section class="accomodation_area section_gap" id='booking'>
	<div class="container ">
	

	
		<div class="section_title text-center">
			<h2 class="title_color">Booking room</h2>
			<p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
		</div>

	
		<form action="<?=base_url('Booking/insert/')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
		
		

		
		
		<div class="row mb_50 " >
			<div class="col-lg-5 col-sm-7">
			<div class='form-group'>
					<div class="input-group flex-nowrap">
					<div class='input-group email' id='txtemail'>
					<span class="input-group-text" id="addon-wrapping">@</span>
						<input type='Email' class="form-control" name='txtemail' placeholder="Email" />
						<?= form_error('txtemail','<small class="text-danger">','</small>');?>

					</div>
				</div>
				</div>


				<!-- <div class="form-group">
					<div class='input-group date' id='txtiduser'>
					<span class="input-group-text" id="addon-wrapping">Rp</span>
						<input type='text' class="form-control" name='txtiduser' value="<?=$jenis_kamar['id']?>">

					</div>
				</div> -->

				<div class="form-group">
					<div class="input-group flex-nowrap" >
					<div class='input-group' id='txttgl'>
			
					<input type='date' class="form-control" name='txtdate' placeholder="date" />
					<?= form_error('txtdate','<small class="text-danger">','</small>');?>
					</div>
				</div>
				</div>

			<div class="perhitungan">
			<div class="form-group">
					<div class='list-group'  >
						
						<select class="list-group-item " id='bil1'   name='txtlama' class="form-control">
							<option>Lama Sewa</option>
							<?php for($i=1;$i<=12;$i++){?>
								<option    value="<?=$i?>"><?=$i.' Bulan'?></option>
							<?php }?>	
						</select>
						<?= form_error('txtlama','<small class="text-danger">','</small>');?>
					</div>
				</div>


				<div class="form-group">
					<div class='input-group date' >
					<span class="input-group-text" id="addon-wrapping"> harga Rp</span>
						<input type='text'   class="form-control" id='bil2' name='txtharga'disabled value="<?=$jenis_kamar['harga']?>">

					</div>
				</div>

				<div class="form-group">
					<div class='input-group date' >
					<span class="input-group-text" id="addon-wrapping">total Rp</span>
						<input type='text' id='hasil' class="form-control" name='txtharga' >
						<?= form_error('txtharga','<small class="text-danger">','</small>');?>

					</div>
				</div>
			
			</div>


				<div class="form-group">
					<div class='input-group date' id='txtidkamar'>
			
						<input type='hidden' class="form-control" name='txtidKamar' value="<?=$jenis_kamar['id']?>"  >

					</div>

					<div class='input-group date' id='txtidkamar'>
			
						<input type='text' class="form-control" name='txtidKamar1' value="<?=$jenis_kamar['jenis']?>"  >

					</div>
				</div>

				<div class="form-group">
                <?php echo $captcha // tampilkan recaptcha ?>
            </div>
				
					
				<button type="submit" class="btn btn-primary ml-2 "  >
                               Submit
                             </button>

						
							 
				</div>
				</div>
				</div>
				</div>
			</div>

		</div>



		</form>
	</div>
</section>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script   type="text/javascript"  src="<?=base_url('assets/')?>vendor/jquery/jquery.min.js">    </script>
<script    type="text/javascript">
	$(".perhitungan").keyup(function(){
		var bil1 =  parseInt($("#bil1").val())
		var bil2 =  parseInt($("#bil2").val())

		var hasil  = bil2 * bil1;
		$("#hasil").attr("value",hasil)


	});

</script>



<!--================ Accomodation Area  =================-->
