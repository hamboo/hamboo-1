 <header>
          <div class="hero-title">Cari Lapangan Bermain Terdekatmu</div>
            <div class="hero-form">
                <div class="row">
                <form action="<?php echo e(url('/search')); ?>" method="post">
                    <div class="medium-12 columns row-form">
                        <div class="lapangan"><input type="text" id="search" name="search" placeholder="Cari Lapangan"></div>
                    </div>
                </div>
                 <div class="row button-hero-small-padding">
                     <div class="medium-12 columns">
                      <?php echo csrf_field(); ?>

                        <button type="submit"><div class="button-hero" >CARI SEKARANG</div></button>
                     </div>
                </div>
            </div>
    </header>