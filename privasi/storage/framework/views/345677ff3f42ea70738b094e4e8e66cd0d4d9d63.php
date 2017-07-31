<?php $__env->startSection('content'); ?>
<?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>
 <div class="clearfix"></div>
 

	<div class="slider_tab_main">
	<!-- Home first slider start -->
  <div class="full_width home_slider">
	  <div class="example">
		  <div class="content hero__" style="width:100%; float:left;">
			<h1><b>Hamboo</b> Temukan Lapangan Terdekat,<p> teman bermain, dan </p>rekomendasi terbaikmu.</h1>
              <form action="<?php echo url('/search'); ?>" method="post">
              <div class="form-search-homepage">
                <div class="row">
                    <div class="col-md-4 col-sm-12 border-left-form">
                        <div class="form__search">
                            <h3>Dimana</h3>
                            <p><input type="text" id="dimana" name="dimana" placeholder="Masukan kota"></input></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 border-left-form">
                         <div class="form__search">
                            <h3>Kapan</h3>
                  <div class="travel_form_element">
                 <p> <input type="text" id="Check_in_date_global_search" name="Check_in_date_global_search" placeholder="dd/mm/yyyy">
                  <i class="fa fa-calendar"></i> </p></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                         <div class="form__search search-form">
                            <h3>Jam</h3>
                              <span><p>
                                <select class="selectpicker">
                    <option data-tokens="5am to 7am">08.00 WIB</option>
                    <option data-tokens="7am to 9am">09.00 WIB</option>
                    <option data-tokens="9am to 11am">10.00 WIB</option>
                    <option data-tokens="11am to 1pm">11.00 WIB</option>
                    <option data-tokens="1pm to 3pm">12.00 WIB</option>
                  </select>
                 
                             </span>
                        </div>
                       
                    </div>
                    <div class="col-md-2 col-sm-12">
                       <button class="btn-form-search" onClick="javascript:this.form.submit();">Cari</button>
						<?php echo csrf_field(); ?>

                </div>
                </form>
              </div>
			 </div>
			  <!-- END REVOLUTION SLIDER -->
		  </div>
	  </div>
	  <!-- section end -->
    </div>
  <!-- Home first slider End -->
  <!-- slider tab section start -->
  <!-- slider tab section End -->
  </div><!-- slider main wrapper end -->
 
<!-- top destination section start -->
	<div class="full_width Travelite_world_section">
		<div class="container">
			<div class="row">
			<div class="Travelite_destinaion_main">
				<div class="heading_team">
					<h3>Top Recomendation</h3>
					<p>Create stunning pages with our powerful admin panel. Functionality and usability combine. Travelllers Deals and Offers on Hotels, Vacation Packages, Flights, Cruises and Car Rentals</p>
				</div>
				
						   <!-- first ractangle start -->
					       <div class="col-md-4 col-sm-6">
						    <div class=" full_width destination_box_wrapper">
							
							<img src="images/field/lapangan1.jpg" class="img-responsive" alt="destination">
							
							<div class="full_width offer_inner_desc">
							<div class="desc_left_inner"><a href="#">KUNINGAN FUTSAL /<span>Jaksel</span></a>
                                <p>Rp 200.000,00</p>
                                </div>
							</div>
					 </div>
					</div>
					<!-- first ractangle End -->
					
					<!-- second ractangle start -->
					       <div class="col-md-4 col-sm-6">
						    <div class=" full_width destination_box_wrapper">
							
							<img src="images/field/lapangan2.jpg" class="img-responsive" alt="destination">
							
								<div class="full_width offer_inner_desc">
							<div class="desc_left_inner"><a href="#">acer FUTSAL /<span>Jaksel</span></a>
                                <p>Rp 200.000,00</p>
                                </div>
							</div>
					 </div>
					</div>
					<!-- second ractangle End -->
					
					<!-- thired ractangle start -->
					       <div class="col-md-4 col-sm-6">
						    <div class=" full_width destination_box_wrapper">
							
							<img src="images/field/lapangan3.jpg" class="img-responsive" alt="destination">
							
								<div class="full_width offer_inner_desc">
							<div class="desc_left_inner"><a href="#">rasa FUTSAL /<span>Jaksel</span></a>
                                <p>Rp 200.000,00</p>
                                </div>
							</div>
					 </div>
					</div>
					<!-- thired ractangle End -->
					<!-- fourth ractangle start -->
					       <div class="col-md-4 col-sm-6">
						    <div class=" full_width destination_box_wrapper">
							
							<img src="images/field/lapangan4.jpg" class="img-responsive" alt="destination">
							
							
								<div class="full_width offer_inner_desc">
							<div class="desc_left_inner"><a href="#">Merk FUTSAL /<span>Jaksel</span></a>
                                <p>Rp 200.000,00</p>
                                </div>
							</div>
					 </div>
					</div>
					<!-- fourth ractangle End -->
				<!-- second ractangle start -->
					       <div class="col-md-4 col-sm-6">
						    <div class=" full_width destination_box_wrapper">
							
							<img src="images/field/lapangan2.jpg" class="img-responsive" alt="destination">
							
								<div class="full_width offer_inner_desc">
							<div class="desc_left_inner"><a href="#">acer FUTSAL /<span>Jaksel</span></a>
                                <p>Rp 200.000,00</p>
                                </div>
							</div>
					 </div>
					</div>
					<!-- second ractangle End -->
                	<!-- second ractangle start -->
					       <div class="col-md-4 col-sm-6">
						    <div class=" full_width destination_box_wrapper">
							
							<img src="images/field/lapangan2.jpg" class="img-responsive" alt="destination">
							
								<div class="full_width offer_inner_desc">
							<div class="desc_left_inner"><a href="#">acer FUTSAL /<span>Jaksel</span></a>
                                <p>Rp 200.000,00</p>
                                </div>
							</div>
					 </div>
					</div>
					<!-- second ractangle End -->
					</div> <!-- Travelite_destinaion_main end -->
			
			</div>
		</div>
	</div>
<!-- top destination section End -->
	   
	   
	   
	   <!-- our partners crousel section section start -->
	<div class="full_width our_partners_crousel_section">
		<div class="container">
			<div class="row row_top_padding">
		<div class="heading_team">
					<h3>our partners</h3>
					</div>
			<div id="partner_crousel_slide">
              <div class="item"><img src="images/ourpartner/aqua.png" alt="logo image"></div>
              <div class="item"><img src="images/ourpartner/bca.png" alt="logo image"></div>
              <div class="item"><img src="images/ourpartner/bni.png" alt="logo image"></div>
              <div class="item"><img src="images/ourpartner/indomaret.png" alt="logo image"></div>
              <div class="item"><img src="images/ourpartner/mandiri.png" alt="logo image"></div>
              <div class="item"><img src="images/ourpartner/hsbc.png" alt="logo image"></div>
              <div class="item"><img src="images/ourpartner/bca.png" alt="logo image"></div>
			  <div class="item"><img src="images/ourpartner/cocacola.png" alt="logo image"></div>
              <div class="item"><img src="images/ourpartner/nike.png" alt="logo image"></div>
             </div>
					
				
				</div>
			</div>
		</div>
		
	<!-- our partners crousel section section End -->
	   
	<!-- testimonials section start -->
	  <div class="full_width testimonials_section_home">
	   <div class="container">
			  <div class="row">
			  <div id="home_testimonials" class="owl-carousel owl-theme">
						<!--  item one  start -->
							<div class="item">
							<div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 pad_z">
							<div class="main_testimonials_content">
							<p>Create stunning pages with our powerful admin panel. Functionality and usability combine.
							Travelllers Deals and Offers on Hotels, Vacation Packages, Flights, Cruises and Car Rentals.
							<b>“Create stunning pages with our powerful admin panel. Functionality and usability combine.”</b>
							Deals and Offers on Hotels, Vacation Packages, Flights, Cruises and Car Rentals</p>
							</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 pad_z">
							<div class="testimonial_img_part">
							<img src="http://placehold.it/106x106" class="img-circle" alt="testimonial-thumb">
							<h4>Ana Levley</h4>
							<p>HeapsTech, CEO</p>
							</div>
							</div>
							</div>
						<!--  item one  End -->
						
						<!--  item two  start -->
							<div class="item">
							<div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 pad_z">
							<div class="main_testimonials_content">
							<p>Create stunning pages with our powerful admin panel. Functionality and usability combine.
							Travelllers Deals and Offers on Hotels, Vacation Packages, Flights, Cruises and Car Rentals.
							<b>“Create stunning pages with our powerful admin panel. Functionality and usability combine.”</b>
							Deals and Offers on Hotels, Vacation Packages, Flights, Cruises and Car Rentals</p>
							</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 pad_z">
							<div class="testimonial_img_part">
							<img src="http://placehold.it/106x106" class="img-circle" alt="testimonial-thumb">
							<h4>Ana Levley</h4>
							<p>HeapsTech, CEO</p>
							</div>
							</div>
							</div>
						<!--  item two  End -->
							
							
							</div>
			  </div>
	   </div>
			
	   
	  </div>
	    <!-- testimonials section End -->
	  


<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('template.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>