<?php $__env->startSection('content'); ?>


<!--<?php if(count($data)): ?>
    page title end-->
    <div class="clearfix"></div>
	
	<div class="full_width destinaion_sorting_section">
	  <div class="container">
	   <div class="row space_100">
	   
	    <!-- left sidebar start -->
	     <div class="col-lg-3 col-md-3 col-sm-12">
	       <div class="Travelite_left_sidebar">
		   <div class="sidebar_search_bar">
		    <form>
		     <input type="search" placeholder="Search" id="sidebar_search">
			 </form>
			 	
		   </div>
			 <aside class="widget destination_widget">
			 <h4 class="widget-title">chosse destination</h4>
			 <div class="travel_checkbox_round">
             <input type="checkbox" id="singapore">
             <label for="singapore">Singapore</label>
			 <input type="checkbox" id="africa">
             <label for="africa">africa</label>
			 <input type="checkbox" id="australia">
             <label for="australia">australia</label>
			 <input type="checkbox" id="america">
             <label for="america">america</label>
			 <input type="checkbox" id="nepal">
             <label for="nepal">nepal</label>
			 <input type="checkbox" id="europe">
             <label for="europe">europe</label>
			  <input type="checkbox" id="japan">
             <label for="japan">japan</label>
			 <input type="checkbox" id="india">
             <label for="india">india</label>
			 <input type="checkbox" id="egypt">
             <label for="egypt">egypt</label>
			 <input type="checkbox" id="malaysia">
             <label for="malaysia">malaysia</label>
		
              </div>
			  
			 </aside>
			 
			 <aside class="widget widget_filter">
			 <h4 class="widget-title">filter by price</h4>
			 <div class="price_filter_slider">
			 <div id="slider"></div>
			 <p class="range_text">
			 <label for="amount">Price range:</label>
            <input type="text" id="amount" readonly>
			</p>
			 </div>
			 </aside>
			 
			  <aside class="widget amenities_widget">
			 <h4 class="widget-title">amenities</h4>
			 <div class="travel_checkbox_round">
			 
             <input type="checkbox" id="Default">
             <label for="Default">Default</label>
			 
			 <input type="checkbox" id="Room_Services">
             <label for="Room_Services">Room Services (28)</label>
			 
			 <input type="checkbox" id="Wi_Fi">
             <label for="Wi_Fi">Wi-Fi</label>
			 
			 <input type="checkbox" id="PetsAllowed">
             <label for="PetsAllowed">Pets Allowed (26)</label>
			 
			 <input type="checkbox" id="MiniBar">
             <label for="MiniBar">Mini Bar (20)</label>
			 
			 <input type="checkbox" id="CableTV">
             <label for="CableTV">Cable TV (37)</label>
			 
			  <input type="checkbox" id="AirConditioning">
             <label for="AirConditioning">Air Conditioning (58)</label>
			 
			 <input type="checkbox" id="Free_Parking">
             <label for="Free_Parking">Free Parking (21)</label>
			 
			 <input type="checkbox" id="Free_Gym">
             <label for="Free_Gym">Free Gym (18)</label>
			 
			 <input type="checkbox" id="Free_Pool">
             <label for="Free_Pool">Free Pool (68)</label>
		
              </div>
			  
			 </aside>
			 
			 <aside class="widget category_widget">
			 <h4 class="widget-title">Accomodation</h4>
			 <div class="travel_checkbox_round">
             <input type="checkbox" id="default_1">
             <label for="default_1">default</label>
			 
			 <input type="checkbox" id="Residence">
             <label for="Residence">Residence</label>
			 
			 <input type="checkbox" id="Hotel_1">
             <label for="Hotel_1">Hotel</label>
			 
			 <input type="checkbox" id="Guest_House">
             <label for="Guest_House">Guest House</label>
			 
			 <input type="checkbox" id="Resort">
             <label for="Resort">Resort</label>
			 
			 <input type="checkbox" id="Apartment">
             <label for="Apartment">Apartment</label>
			 
			 <input type="checkbox" id="Bed_Breakfast">
             <label for="Bed_Breakfast">Bed & Breakfast</label>
			  
		
              </div>
			  
			 </aside>
			 
			 <aside class="widget modify_search_widget">
			  <h4 class="widget-title">Modify Search</h4>
			  <div class="sidebar_form">
			   <form>
			     <div class="destination_field">
				 <label>destination</label>
					<input type="text" placeholder="Enter Destination">
				</div>
				<div class="destination_field">
				 <label>Check in date</label>
					<input type="text" id="Check_in_date_tab" placeholder="dd/mm/yyyy">
					<i class="fa fa-calendar"></i>
				</div>
				<div class="destination_field">
				<label>check out date</label>
				<input type="text" id="Check_out_date_tab" placeholder="dd/mm/yyyy">
					<i class="fa fa-calendar"></i>
				</div>
				<ul class="sidebar_select">
				<li class="select_field">
				<label>adult</label>
				<input id="spinner_adult" type="number" placeholder="1" name="spinner" class="input_spinner">
				</li>
				<li class="select_field">
				<label>child</label>
				<input id="spinner_child" type="number" placeholder="2" name="spinner" class="input_spinner">
				</li>
				</ul>
				<div class="destination_field">
				<label>rooms</label>
				<input id="spinner_room" type="number" placeholder="1" name="spinner" class="input_spinner">
					
				</div>
				<button type="submit" class="btn-travel btn-yellow">SEARCH</button>
			   </form>
			   </div>
	        </aside>
		
		   </div>
	     </div>
	      <!-- left sidebar end -->
	     <!-- right main start -->
		<div class="col-lg-9 col-md-9 col-sm-12">
		<div class="tour_packages_right_section left_space_40">
	
	     <div class="full_width sorting_panel">
		 <div class="sorting_destination">
					<select class="form-control selectpicker" id="search_rooms">
						<option value="1">Sort by : Popularity</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
					</select>
					<i class="fa fa-chevron-down"></i>
				</div>
				<div class="sorting_destination">
					<select class="form-control selectpicker" id="search_places">
						<option value="1">Show: 9 places/page</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
					</select>
					<i class="fa fa-chevron-down"></i>
				</div>
				<div class="sorting_destination">
					<select class="form-control selectpicker" id="search_prices">
						<option value="1">Sort by : Price</option>
						<option value="2">50</option>
						<option value="3">75</option>
						<option value="4">100</option>
					</select>
					<i class="fa fa-chevron-down"></i>
				</div>
				<!-- sorting list -->
				<div class="pull-right sort_list_grid">
				<a href="Hotel-Grid-View.html"><i class="fa fa-th-large"></i></a>
				<a href="Hotel-list-View.html"><i class="fa fa-th-list active_sort"></i></a>
				</div>
		           <!-- sorting list End-->
		 </div><!--  sorting panel End -->
		 
		 
		 
		 <!-- sorting places section -->
		
		 <div class="full_width hotel_list_sorting">
             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		        <!--sort_list start -->
		  <div class="sorting_places_wrap  list_sorting_view">
		   <div class="col-lg-5 col-md-5 col-sm-5 padding_none">
		   <div class="thumb_wrape">
		   <img src="<?php echo asset('images/'.$res->file_img_futsal); ?>" class="img-responsive" alt="list thumb">
		   </div>
		   </div>
		   
		    <div class="col-lg-7 col-md-7 col-sm-7">
		   <div class="desc_right_list_hotel">
		   <div class="bottom_title">
		   <div class="pull-left">
		   <h5><a href="#"><?php echo $res->futsal_name; ?></a></h5>
		   <div class="sub_city"><?php echo $res->kota; ?></div>
		   </div>
		  
		   </div>
		  <div class="harga-listing"><h3>Rp.<?php echo $res->harga; ?></h3></div>
			 <div class="bottom_review_rating">
		<div class="pull-right book_now_btn">
			
			<a href="<?php echo url('/detailPage'); ?>" class="btn-green btn-travel">Pilih
                </a>
			</div>
			</div>
		   </div>
		   </div>
		   </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		   <!--sort_list start end-->
     	   
			 
	   </div>
	     <!-- sorting places section -->
	    <!-- pagination section -->
	   <div class="full_width pagination_bottom">
		   <ul class="pagination">
			  <li><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
	      </ul>
	   </div>
	   <!-- pagination section -->
	
	   </div>
	   </div><!-- right main start -->
	  </div>
	</div>

  </div>
<<<<<<< HEAD
<<<<<<< HEAD
           
            
=======
<?php echo csrf_field(); ?>

=======
  <!--content body end--> 


>>>>>>> ac8e6039182eb3b23fe8195abcc021da642ba019

<?php else: ?>
   <div class="card-panel red darken-3 white-text">Oops.. Data <b><?php echo e($search); ?></b> Tidak Ditemukan</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
>>>>>>> d10bb37b2aa6d37646a824106ab5834beee25eda

<?php echo $__env->make('template.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>