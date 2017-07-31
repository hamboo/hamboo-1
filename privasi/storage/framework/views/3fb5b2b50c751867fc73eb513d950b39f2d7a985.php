<?php $__env->startSection('content'); ?>
  <!--content body start-->
  <!--page title Start-->
	<div class="page_title" data-stellar-background-ratio="0" data-stellar-vertical-offset="0" style="background-image:url(images/sub-banner.jpg);">
      <ul>
        <li><a href="javascript:;">Detail Page</a></li>
      </ul>
    </div>
    <!--page title end-->
    <div class="clearfix"></div>
	
	<div class="full_width destinaion_sorting_section">
	  <div class="container">
	   <div class="row space_100">	   
    <!-- right main start -->
		<div class="col-md-12">
		<div class="tour_packages_right_section left_space_40">
		<div class="tour_packages_details_top hotel_details_package">
		
		
		<div class="top_head_bar">
		   <h4><?php echo $data2->futsal_name; ?></h4>
	    </div>
			<div class="bottom_desc">
				<h5 class="starting_text"><?php echo $data2->kota; ?> </h5>
			</div>
		</div>
		    <!-- slider start -->
		 	<!-- package tabs start -->
			
		  <div class="full_width hotel_details_mdl_tab" id="Travelite_middle_tabs">
			
		    <div class="pcg_tabs_panel">
				<ul>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<li> <a href="#tab_search_<?php echo $res->court; ?>" onclick ="getIdField('idLapangan<?php echo $res->court; ?>')">Lapangan <?php echo $res->court; ?></a></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</ul>
            </div>
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		    <!--  tab content start -->
			<div id="tab_search_<?php echo $res->court; ?>" class="tab_details_part hotel_details_tab">
				<div class="row">
					<div class="slide_img_wrpr col-lg-9 col-md-9 col-sm-9">
						<div class="top_head_bar top_head_details">
							<h4><?php echo $data2->futsal_name; ?></h4><span class="sub_city">/Lapangan <?php echo $res->court; ?></span>
						</div>							
						<img src="<?php echo asset('images/'.$res->file_img); ?>" alt="" class="img-responsive" > </img>					
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 slide_right_thumb">
						<p class="slide_paragraph">
							<div class="choise_time">
                            <p> <label><b>Pilih Jam awal <?php echo e($res->court); ?>: </b></label>
								<select class="selectpicker" title="Flight Times">
									<option data-tokens="5am to 7am">08.00 WIB</option>
									<option data-tokens="7am to 9am">09.00 WIB</option>
									<option data-tokens="9am to 11am">10.00 WIB</option>
									<option data-tokens="11am to 1pm">11.00 WIB</option>
									<option data-tokens="1pm to 3pm">12.00 WIB</option>
								 </select>
							</p>
                            <p><label><b>Pilih Jam akhir: </b></label>
								 <select class="selectpicker" title="Flight Times">
									<option data-tokens="5am to 7am">08.00 WIB</option>
									<option data-tokens="7am to 9am">09.00 WIB</option>
									<option data-tokens="9am to 11am">10.00 WIB</option>
									<option data-tokens="11am to 1pm">11.00 WIB</option>
									<option data-tokens="1pm to 3pm">12.00 WIB</option>
								</select></p>
								
								<p id="test2"></p>
                            <!--<p><div class="button-book-detail" id="book_detail">BOOK</div></p>-->
                            <p>
								<div class="button-book-detail" id="but1<?php echo $res->court; ?>">
									<button class="btn-warning" onclick="coba('myModal<?php echo $res->court; ?>','but1<?php echo $res->court; ?>')" value="BOOK">BOOK</button>
								</div>
							</p>
							
							</div>
							
							<!--<button class="button-book-detail" id='but1<?php echo $res->court; ?>' onclick="coba('myModal<?php echo $res->court; ?>','but1<?php echo $res->court; ?>')">test</button> -->
                        </p>
                        <?php $x = 1; ?>
					</div>
					<div class="unanvailable_detail">
						<h4>Available at : <?php echo $tgl; ?></h4>		
						<div class="w3-container w3-red">
  							<p>London is the capital city of England.</p>
						</div>

							</br>
							</br>
							</br>			     
					<div class="col-md-12">
						
						

						<script>
						var clicks = 0;
														
								
							function getJam(id,valJam,first_jam,last_jam,harga){
								
								//clicks += 1; //utk user klik jam dan dapat total jam main
								var getjamVal = document.getElementById(valJam).value;
								document.getElementById("waktu").value =getjamVal+" :00"; //assign ke field waktu
								document.getElementById("first_jam").value =getjamVal+" :00"; //assign ke field fist_jam
								var click = clicks+=1;
								var last_jam = id - 1 + 1 + click;
								console.log('last_jam  '+last_jam)
								console.log('click  '+click)
								document.getElementById("last_jam").value =last_jam+" :00"; //assign ke field last_jam
								console.log('id + 1 = '+last_jam)
								//var vharga = document.getElementById(harga).innerHTML;
								//console.log('harga  '+vharga)
								//alert(jam_end);
								
								var x = document.getElementById("Total_main").value = click;
								console.log('total Main  '+x);
							}
							function getIdField (idF){
								var x=document.getElementById(idF).value;
								document.getElementById("idLapangan").value=x;
								
							}
							//function myFunction (harga){
							//	var vharga = document.getElementById(harga).value;
							//	console.log(vharga);
							//	return vharga;
							//}
							
							//document.getElementById("Harga_per_jam").value = myFunction ("hrg<?php echo $res->id_field; ?>");	
				
						</script>
						
                        </div>
					</div>
				</div>
            <!-- The Modal -->				
				<div id="myModal<?php echo $res->court; ?>" class="modal">
				  <!-- Modal content -->
					<div class="checkout_modal">
					<span class="close">&times;</span>
					 <div id="booking_details" class="main_content_area hotel_main_content">
								  <div class="inner_container"> 
									<!--  tab inner section two Start -->
									<div class="tab_inner_section flight_inner_section ">
									  <div class="heading_tab_inner">
										<h5>Book Details</h5>
									  </div>
									  <div class="tab_inner_body full_width padding_detail">
										<div class="flight_review_area full_width background_white">
										  <div class="col-lg-10 col-md-9"> 
											<!--  review area start -->
											<div class="row">
											  <div class="col-lg-4 col-md-4"> <img src="<?php echo asset('images/'.$res->file_img); ?>" alt="review image"> </div>
											  <div class="col-lg-8 col-md-8">
												<div class="review_content">
												  <div class="top_head_bar">
													<h4><?php echo $data2->futsal_name; ?></h4>
													<span class="country_span">Jakarta</span></div>
												  <div class="review_star_cover">
													Lapangan <?php echo $res->court; ?>

													</div>
												</div>
											  </div>
											  <!--  review area end --> 
											</div>
											<!-- row --> 
										  </div>
										  <!--  col-lg-9 -->
										  
										  <div class="right_includes_flight col-lg-2 col-md-3">
											<div class="doller_left booking_id">
											<?php $__currentLoopData = $get_book_order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
											  <h5>INV<?php echo $book ->auto_increment; ?></h2>
											 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
											</div>
										  </div>
										</div>
										<!-- tab include area Start -->
										<div class="inludes_section flight_schedule_section background_white"> <span class="emirates_button address_info">Alamat</span>
										  <div class="main_section_address">
											<p>Jalan Garuda No 2 Blok A2 Jakarta Timur
											<br>
											id Lapangan:<br>
												<input type="text" id="idLapangan<?php echo $res->court; ?>" name="idLapangan<?php echo $res->court; ?>" value="<?php echo $res->id_field; ?>">
												id Price:<br>
												<input type="text" id="idPrice<?php echo $res->court; ?>" name="idPrice<?php echo $res->court; ?>" value="<?php echo $res->id_price; ?>">
												<br>
												<br>
											</p>
										  </div>
										</div>
										<!-- tab include area End --> 
										<!-- tab include area Start -->
									  <div class="inludes_section flight_schedule_section background_white"> <span class="emirates_button address_info">Waktu Bermain</span>
										  <div class="main_section_flight">
											<div class="country_section_box">
											  <h4 id="jamAwal<?php echo $res->court; ?>"></h4>
											  <p class="shedule_d">Tanggal <?php echo $tgl; ?></p>
											</div>
											<div class="middle_flight_section" >
											  <h5>Harga Per Jam</h5>
											  <p id="harga<?php echo $res->id_field; ?>" ><?php echo $res ->price; ?></p>
											</div>
											<div class="middle_flight_section">
											  <h5>Total Main</h5>
											  <p id="duration<?php echo $res->court; ?>"></p>
											</div>
											 <div class="country_section_box">
											  <h4 id="jamAkhir<?php echo $res->court; ?>"></h4>
											  <p class="shedule_d">Tanggal <?php echo $tgl; ?></p>
											</div>
										  </div>
										   <!-- total row Start-->
								  <div class="full_width total_price_row">
									<p>Total </p>
									<?php $kali = $res ->price*1;?>
									<h2 id="total<?php echo $res->court; ?>">Rp.<?php echo $kali; ?>,00</h2>
								  </div>
								  <!-- total row End--> 								  
								  <!-- proceed button -->
								  <div class="full_width t_align_c">
									<button type="submit" value="proceed to next step" class="btn_blue proceed_buttton btns" form="form1">proceed to next step</button>
									<?php echo csrf_field(); ?>

								  </div>
								  <!-- proceed button --> 
										</div>
										<!-- tab include area End --> 
									  </div>
									  <!--  tab inner body  End--> 
									  
									</div>
									<!-- tab inner section end --> 
									
								  </div>
								  <!--  inner_container --> 
								  
								 
								</div>
					</div>
				</div>
				
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

						<p>
							Jalan Garuda No 2 Blok A2 Jakarta Timur
							<form  action="<?php echo url('/checkOut'); ?>" method="GET" id="form1">
								waktu : </br>
								<input type="text" id="waktu"></input>
								</br>
								Jam Awal:<br>
								<input type="text" id="first_jam" name="first_jam" value="">
								<br>
								Jam Akhir:<br>
								<input type="text" id="last_jam" name="last_jam">
								<br>
								Harga Per Jam:<br>
								<input type="text" id="Harga_per_jam" name="Harga_per_jam" value="">
								<br>
								Total Main:<br>
								<input type="text" id="Total_main" name="Total_main">
								<br>
								Tanggal Main:<br>
								<input type="text" id="tanggal" name="tanggal" value="<?php echo $tgl; ?>">
								<br>
								id Lapangan:<br>
								<input type="text" id="idLapangan" name="idLapangan" value="<?php echo $firstlpn->id_field; ?>">
								<br>
								id Futsal:<br>
								<input type="text" id="idFutsal" name="idFutsal" value="<?php echo $res->id_futsal; ?>">
								<br>
								id Price:<br>
								<input type="text" id="idPrice" name="idPrice">
								<br>
								<?php 
									$date = str_replace('/', '-', $tgl);
									$date = date('Y-m-d', strtotime($date));
								?>
								from date:<br>
								<input type="text" id="fromDate" name="fromDate" value="<?php echo $date; ?>">
								<br>
								Harga Total:<br>
								<input type="text" id="Tot_bayar" name="Tot_bayar">
								<br>
						</p>
		
			 <!--  tab content End -->
				</div>
	
			</div>
			<!-- package tabs 
		     <!-- slider end -->
			 
			 <!-- Booking area Start-->
         <!-- Booking area End -->

	   </div><!-- right main start -->	  
	</div> <!-- col-lg-9-end -->
	</div><!--  row main -->
  </div> <!-- container -->
  
<script>
function coba(id_modal,id_button){
//var cek = document.getElementById("waktu").value;
//	if (cek == "") {
//		alert("Pilih Jam Dulu Sobb !!!");
//		return false;
//	}else{
		var modal = document.getElementById(id_modal);
		// Get the button that opens the modal
		var btn = document.getElementById(id_button);
		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];
		// When the user clicks the button, open the modal 
		//btn.onclick = function() {
		modal.style.display = "block";
		//}
		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	}


// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("book_detail");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
//btn.onclick = function() {
 //   modal.style.display = "block";
//}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>