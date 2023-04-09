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
                          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                               <div class="team-item wow fadeInRight">
                                    <div class="team-img">
                                         <img class="img-fluid"
                                              src="<?php echo base_url().'assets/images/'.$user->user_foto;?>" alt="">
                                    </div>
                                    <div class="contetn">
                                         <div class="info-text">
                                              <p class="mb-3" style="color: grey;">Data Responden :</p>
                                              <h3><a href="#"><?php echo $user->user_namalengkap; ?></a></h3>
                                              <p>ID : <?php echo $user->user_id; ?></p>
                                              <p>Sebagai : <?php echo $user->user_level; ?></p>
                                              <p>Prodi : <?php echo $user->user_prodi; ?></p>
                                              <p>Gender : <?php echo $user->user_gender; ?></p>
                                         </div>
                                    </div>
                               </div>
                          </div>
                          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 wow fadeInRight">
                               <div class="contetn" style="margin-left: 20px;margin-right: 20px;margin-top: 10px;">
                                    <?php
                                        $no=0+1;
                                        if ($data_paket){
                                        foreach ($data_paket as $d){ 
                                   ?>

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
                                    <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_soal/") . uri(3)); ?>
                                    <form action="<?php echo uri(2) == "tambah_soal" ? url(1, "edit_soal") : url(1, "tambah_soal"); ?>"
                                         method="POST">
                                         <div>
                                              <?php
                                        $no = 0 + 1;
                                        if ($data_soal) {
                                        foreach ($data_soal as $d) {
                                        ?>
                                              <input style="width: 375px;" name="id_identitas"
                                                   value="<?php echo $user->user_id; ?>" hidden>
                                              <input style="width: 375px;" name="nama_lengkap"
                                                   value="<?php echo $user->user_namalengkap; ?>" hidden>
                                              <input style="width: 375px;" name="prodi"
                                                   value="<?php echo $user->user_prodi; ?>" hidden>
                                              <input style="width: 375px;" name="sebagai"
                                                   value="<?php echo $user->user_level; ?>" hidden>
                                              <input style="width: 375px;" name="gender"
                                                   value="<?php echo $user->user_gender; ?>" hidden>
                                              <input style="width: 375px;" name="id_paket_jawaban"
                                                   value="<?php echo $d->id_paket; ?>" hidden>
                                              <input style="width: 375px;" name="id_soal_kuesioner"
                                                   value="<?php echo $d->id_soal; ?>" hidden>
                                              <input style="width: 375px;" name="type_soal"
                                                   value="<?php echo $d->type_soal; ?>" hidden>
                                              <br />
                                              <div class="form-items mb-2">
                                                   <td class="title">
                                                        <p style="color: black;"><?php echo $no++; ?>.
                                                             <?php echo $d->soal; ?></p>
                                                   </td>
                                              </div>
                                              <table>
                                                   <tbody>
                                                        <tr>
                                                             <td class="align-middle"
                                                                  style="width: 70px; text-align: center;">
                                                                  <div
                                                                       class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                       <center>
                                                                            <input class="radio5 the_input_element"
                                                                                 name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                 id="concern"
                                                                                 value="<?php echo $d->sangat_tidak_setuju; ?>"
                                                                                 style="display: block !important; color: rgb(50, 55, 60);"
                                                                                 autocomplete="off" type="radio"
                                                                                 required />
                                                                       </center>
                                                                  </div>
                                                                  <div
                                                                       class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                       <h5 style="margin-top: 5px;color: black;">1
                                                                       </h5>
                                                                  </div>
                                                             </td>

                                                             <td class="align-middle"
                                                                  style="width: 70px; text-align: center;">
                                                                  <div
                                                                       class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                       <center>
                                                                            <input class="radio the_input_element"
                                                                                 name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                 id="radio4"
                                                                                 value="<?php echo $d->tidak_setuju; ?>"
                                                                                 style="display: block !important; color: rgb(50, 55, 60);"
                                                                                 autocomplete="off" type="radio"
                                                                                 required />
                                                                       </center>
                                                                  </div>
                                                                  <div
                                                                       class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                       <h5 style="margin-top: 5px;color: black;">2</h5>
                                                                  </div>
                                                             </td>

                                                             <td class="align-middle"
                                                                  style="width: 70px; text-align: center;">
                                                                  <div
                                                                       class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                       <center>
                                                                            <input class="radio the_input_element"
                                                                                 name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                 id="radio2" for="radio2"
                                                                                 value="<?php echo $d->setuju; ?>"
                                                                                 style="display: block !important; color: rgb(50, 55, 60);"
                                                                                 autocomplete="off" type="radio"
                                                                                 required />
                                                                       </center>
                                                                  </div>
                                                                  <div
                                                                       class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                       <h5 style="margin-top: 5px;color: black;">3</h5>
                                                                  </div>
                                                             </td>

                                                             <td class="align-middle"
                                                                  style="width: 70px; text-align: center;">
                                                                  <div
                                                                       class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                       <center>
                                                                            <input class="radio the_input_element"
                                                                                 name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                 value="<?php echo $d->sangat_setuju; ?>"
                                                                                 style="display: block !important; color: rgb(50, 55, 60);"
                                                                                 autocomplete="off" type="radio"
                                                                                 required />
                                                                       </center>
                                                                  </div>
                                                                  <div
                                                                       class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                       <h5 style="margin-top: 5px;color: black;">4</h5>
                                                                  </div>
                                                             </td>
                                                        </tr>
                                                   </tbody>
                                              </table>
                                              <?php }
                                             } else { ?>
                                              <div class="logo">
                                                   <h5><a><span>Tidak Ada Pertanyaan Kuesioner</span></a></h5>
                                              </div>
                                              <?php } ?>

                                         </div>
                                         <br />

                                         <div class="header-button">
                                              <button type="submit" style="height: 43px;width: 100px;"
                                                   class="btn btn-success text-white"
                                                   style="background-color: #4747A1;">
                                                   Next

                                         </div>
                                         <?php echo form_close(); ?>
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

      <!-- Data Tabel -->
      <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
      <script>
      $(document).ready(function() {
           $('#myTable').DataTable();
      });
      </script> -->

 </body>

 </html>