 <header class="site-header js-site-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="/"><?php echo config('sitesettings.hotelname') ?></a></div>
          <div class="col-6 col-lg-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6 mx-auto">
                      <ul class="list-unstyled menu">
                        <li class="active"><a href="/">Домой</a></li>
                        <li><a href="/rooms">Комнаты</a></li>
                        <li><a href="/about">О нас</a></li>
                        <li><a href="/reservation">Оставить заявку</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END head -->

    <section class="site-hero overlay" style="background-image: url(<?=asset('images/hero_4.jpg')?>)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <span class="custom-caption text-uppercase text-white d-block  mb-3"> 
              <?php echo config('sitesettings.hotelname') ?><span class="fa fa-star text-primary"></span></span>
            <h1 class="heading">A Best Place To Stay</h1>
             <span class="custom-caption text-uppercase text-white d-block  mb-3"> <?php echo config('sitesettings.address')?></span>
          </div>
        </div>
      </div>


          


    </section>
    <!-- END section -->