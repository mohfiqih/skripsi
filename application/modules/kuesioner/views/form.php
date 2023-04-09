 <!DOCTYPE html>
 <html lang="en">

 <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Form Kuesioner Sistem</title>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/css/bootstrap.min.css">
      <!-- Icon -->
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/fonts/line-icons.css">
      <!-- Owl carousel -->
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/css/owl.theme.css">

      <!-- Animate -->
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/css/animate.css">
      <!-- Main Style -->
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/css/main.css">
      <!-- Responsive Style -->
      <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/kuesioner/css/responsive.css">
      <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png" />

 </head>

 <body>

      <header id="header-wrap">
           <div id="hero-area" class="hero-area-bg">
                <div class="container">
                     <div class="row">
                          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                               <div class="contents" style="margin-left: 20px;margin-right: 20px;">
                                    <?php
                                        $no=0+1;
                                        if ($data_paket){
                                        foreach ($data_paket as $d){ 
                                   ?>
                                    <a class="navbar-brand brand-logo mr-5" href="#"><img
                                              src="<?php echo base_url('assets/auth/images/logo-long.png') ?>"
                                              style="width: 150px;height: 50px;margin-bottom: 10px;" /></a>
                                    <p class="mb-3">Kuesioner Peningkatan Sistem</p>
                                    <h2 class="head-title">Kuesioner <?php echo $d->nama_paket; ?>
                                         v.<?php echo $d->versi_apl_paket; ?></h2>
                                    <p style="text-align: justify;color: grey;">Dalam rangka untuk pengembangan sistem
                                         kedepannya,
                                         mohon untuk
                                         pengguna
                                         sistem bisa memberikan ulasan pada
                                         kuesioner berikut ini, isi dengan jujur selama anda menggunakan sistem
                                         tersebut. Jika
                                         ada
                                         kendala sampaikan dalam kolom komentar. Terimakasih</p>

                                    <?php }} else { ?>
                                    <td class="text-center" colspan="6">Tidak ada data</td>
                                    <?php } ?>
                                    <div class="header-button">
                                         <a href="<?php echo base_url('kuesioner/skala/') . uri(3) ?>"
                                              class="btn text-white" style="background-color: #4747A1;">Isi
                                              Kuesioner</a>
                                         <a href="#" class="btn btn-border video-popup" data-toggle="modal"
                                              data-target="#addModal">About <i class="lni lni-reply"></i></a>
                                    </div>
                                    <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                         <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                   <div class="modal-header">
                                                        <p class="modal-title" style="color: black;"
                                                             id="exampleModalLabel">
                                                             About Kuesioner
                                                        </p>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                             aria-label="Close">
                                                             <span aria-hidden="true">&times;</span>
                                                        </button>
                                                   </div>
                                                   <div class="modal-body">
                                                        <div class="row">
                                                             <div class="col-md-12">

                                                             </div>
                                                        </div>
                                                   </div>
                                              </div>
                                         </div>
                                    </div>
                               </div>
                          </div>
                          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 wow fadeInRight">
                               <div class="intro-img">
                                    <img style="margin-top: 40px;" class="img-fluid"
                                         src="<?php echo base_url(''); ?>assets/kuesioner/img/intro-mobile.png" alt="">
                               </div>
                          </div>
                     </div>
                </div>
           </div>
           <!-- Hero Area End -->

      </header>
      <!-- Header Area wrapper End -->

      <!-- Go to Top Link -->
      <a href="#" class="back-to-top">
           <i class="lni-arrow-up"></i>
      </a>

      <!-- Preloader -->
      <div id="preloader">
           <div class="loader" id="loader-1"></div>
      </div>
      <!-- End Preloader -->

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/jquery-min.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/popper.min.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/owl.carousel.min.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/wow.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/jquery.nav.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/scrolling-nav.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/jquery.easing.min.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/main.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/form-validator.min.js"></script>
      <script src="<?php echo base_url(''); ?>assets/kuesioner/js/contact-form-script.min.js"></script>

 </body>

 </html>