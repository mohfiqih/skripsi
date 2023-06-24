 <!DOCTYPE html>
 <html lang="en">

 <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Form Kuesioner | e-Repo</title>

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
                          <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 wow fadeInRight">
                               <div class="intro-img" style="margin-right: 20px;">
                                    <br />
                                    <img style="margin-top: 20px;" class="img-fluid"
                                         src="<?php echo base_url(''); ?>assets/kuesioner/img/21430.jpg" alt="">
                               </div>
                               <!-- <div class="intro-img" style="margin-right: 20px;">
                                    <?php
                                   date_default_timezone_set("Asia/jakarta");
                                   ?>
                                    <h5 class="btn btn-sm btn-light bg-white"><i class="fa-solid fa-clock"></i>
                                         <span id="jam"><button class="btn btn-sm btn-light bg-white" type="button">
                                         </span>
                                    </h5>
                                    /
                                    <h5 class="btn btn-sm btn-light bg-white"><i class="fa-solid fa-calendar"></i>
                                         <span id="tanggal"><button class="btn btn-sm btn-light bg-white" type="button">
                                         </span>
                                    </h5>
                                    </button>
                               </div> -->
                          </div>
                          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                               <div class="contents" style="margin-left: 20px;margin-right: 20px;margin-top: 30px;">
                                    <?php
                                        $no=0+1;
                                        if ($data_paket){
                                        foreach ($data_paket as $d){ 
                                   ?>
                                    <div class="row">
                                         <div class="col-md-6" style="overflow: auto;">
                                              <table class="table table-hover mb-0">
                                                   <tbody style="color: black;">
                                                        <!-- <?php if ($this->user_level == "Super Admin"):?>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">ID</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_id; ?>"
                                                                 name="id_identitas">
                                                                 <?php echo $user->user_id; ?>
                                                            </td>
                                                       </tr>
                                                       <?php elseif ($this->user_level == "Dosen"):?>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">NIPY</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_nama; ?>"
                                                                 name="id_identitas">
                                                                 <?php echo $user->user_nama; ?>
                                                            </td>
                                                       </tr>
                                                       <?php elseif ($this->user_level == "Mahasiswa"):?>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">NIM</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_nama; ?>"
                                                                 name="id_identitas">
                                                                 <?php echo $user->user_nama; ?>
                                                            </td>
                                                       </tr>
                                                       <?php else: ?>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">ID Evaluator</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_id; ?>"
                                                                 name="id_identitas">
                                                                 <?php echo $user->user_id; ?>
                                                            </td>
                                                       </tr>
                                                       <?php endif; ?> -->

                                                        <tr style="overflow-x: auto;">
                                                             <th width="150">ID</th>
                                                             <th width="20">:</th>
                                                             <td value="<?php echo $user->user_id; ?>"
                                                                  name="id_identitas">
                                                                  <?php echo $user->user_id; ?>
                                                             </td>
                                                        </tr>
                                                        <tr style="overflow-x: auto;">
                                                             <th width="150">Nama Lengkap</th>
                                                             <th width="20">:</th>
                                                             <td value="<?php echo $user->user_namalengkap; ?>"
                                                                  name="nama_lengkap">
                                                                  <?php echo $user->user_namalengkap; ?>
                                                             </td>
                                                        </tr>
                                                   </tbody>
                                              </table>
                                         </div>
                                         <div class="col-md-6" style="overflow: auto;">
                                              <table class="table table-hover mb-0">
                                                   <tbody style="color: black;">
                                                        <tr style="overflow-x: auto;">
                                                             <th width="150">Prodi</th>
                                                             <th width="20">:</th>
                                                             <td value="<?php echo $user->user_prodi; ?>" name="prodi">
                                                                  <?php echo $user->user_prodi; ?>
                                                             </td>
                                                        </tr>
                                                        <tr style="overflow-x: auto;">
                                                             <th width="150">Responden</th>
                                                             <th width="20">:</th>
                                                             <td value="<?php echo $user->user_level; ?>"
                                                                  name="sebagai">
                                                                  <?php echo $user->user_level; ?>
                                                             </td>
                                                        </tr>
                                                        <!-- <tr style="overflow-x: auto;" type="hidden">
                                                            <th width="150">Gender</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $user->user_gender; ?>" name="gender">
                                                                 <?php echo $user->user_gender; ?>
                                                            </td>
                                                       </tr>
                                                       <tr style="overflow-x: auto;" type="hidden">
                                                            <th width="150">Nama Paket</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $d->nama_paket; ?>"
                                                                 name="id_paket_jawaban">
                                                                 <?php echo $d->nama_paket; ?>
                                                            </td>
                                                       </tr>
                                                       <tr style="overflow-x: auto;" type="hidden">
                                                            <th width="150">ID Soal</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $d->id_soal; ?>"
                                                                 name="id_soal_jawaban">
                                                                 <?php echo $d->id_soal; ?>
                                                            </td>
                                                       </tr>
                                                       <tr style="overflow-x: auto;" type="hidden">
                                                            <th width="150">Type Soal</th>
                                                            <th width="20">:</th>
                                                            <td value="<?php echo $d->type_soal; ?>" name="type_soal">
                                                                 <?php echo $d->type_soal; ?>
                                                            </td>
                                                       </tr> -->
                                                   </tbody>
                                              </table>
                                         </div>
                                    </div>
                                    <h2 class="head-title" style="margin-top: 10px;">Kuesioner
                                         <?php echo $d->nama_paket; ?>
                                         v.<?php echo $d->versi_apl_paket; ?></h2>


                                    <p class="mb-3">Pengujian Metode | Kuesioner <?php echo $d->nama_paket; ?> | Metode
                                         Skala Likert & Text Mining</p>
                                    <p style="text-align: justify;color: grey;">Assalamualaikum, Perkenalkan nama saya
                                         Moh. Fiqih Erinsyah dari Prodi DIV Teknik Informatika, untuk teman-teman mohon
                                         bantuannya untuk mengisi form kuesioner Usability Testing ini untuk pengujian
                                         sistem yang telah saya buat tentang Evaluasi Sistem Syncnau dan Oase yang ada
                                         di Politeknik Harapan Bersama. <strong>Mohon masukan ulasan sesuai yang anda
                                              rasakan selama menggunakan sistem.
                                         </strong> Terimakasih 👌🫡</p>

                                    <?php }} else { ?>
                                    <td class="text-center" colspan="6">Tidak ada data</td>
                                    <?php } ?>
                                    <div class="header-button">
                                         <div>
                                              <input data-toggle="modal" data-target="#isiKuesioner" type="submit"
                                                   id="submitBtn" style="border-radius: 10px;background-color: #4747A1;"
                                                   value="Isi Kuesioner" class="btn btn-block btn-success">
                                         </div>
                                    </div>
                                    <!-- Isi Kuesioner -->

                                    <div class="modal fade" id="isiKuesioner" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                         <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                   <div class="modal-header">
                                                        <p class="modal-title" style="color: black;margin-left: 15px;"
                                                             id="exampleModalLabel">
                                                             <strong>Form Kuesioner</strong>
                                                        </p>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                             aria-label="Close">
                                                             <span aria-hidden="true">&times;</span>
                                                        </button>
                                                   </div>
                                                   <div class="modal-body" style="margin-bottom: 20px;">
                                                        <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_soal/") . uri(3)); ?>
                                                        <!-- <form role="form"> -->
                                                        <div class="row">
                                                             <div class="col-md-12">

                                                                  <div class="col-md-12" style="margin: 10px;">
                                                                       <?php
                                                                      $no = 0 + 1;
                                                                      if ($data_soal) {
                                                                      foreach ($data_soal as $d) {
                                                                      ?>

                                                                       <input id="inputIdentitas" name="id_identitas"
                                                                            value="<?php echo $user->user_id; ?>"
                                                                            hidden>
                                                                       <input id="inputNama" name="nama_lengkap"
                                                                            value="<?php echo $user->user_namalengkap; ?>"
                                                                            hidden>
                                                                       <input id="inputProdi" name="prodi"
                                                                            value="<?php echo $user->user_prodi; ?>"
                                                                            hidden>
                                                                       <input id="inputSebagai" name="sebagai"
                                                                            value="<?php echo $user->user_level; ?>"
                                                                            hidden>
                                                                       <input id="inputGender" name="gender"
                                                                            value="<?php echo $user->user_gender; ?>"
                                                                            hidden>
                                                                       <input id="inputPaket" style="width: 375px;"
                                                                            name="id_paket_jawaban"
                                                                            value="<?php echo $d->id_paket; ?>" hidden>
                                                                       <input style="width: 375px;"
                                                                            name="id_soal_kuesioner"
                                                                            value="<?php echo $d->id_soal; ?>" hidden>
                                                                       <input style="width: 375px;" name="type_soal"
                                                                            value="<?php echo $d->type_soal; ?>" hidden>
                                                                       <div class="form-items mb-2">
                                                                            <td class="title">
                                                                                 <p style="color: black;">
                                                                                      <?php echo $no++; ?>.
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
                                                                                                     <input
                                                                                                          class="radio5 the_input_element"
                                                                                                          name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                                          id="concern"
                                                                                                          value="<?php echo $d->sangat_tidak_setuju; ?>"
                                                                                                          style="display: block !important; color: rgb(50, 55, 60);"
                                                                                                          autocomplete="off"
                                                                                                          type="radio"
                                                                                                          required />
                                                                                                </center>
                                                                                           </div>
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <h5
                                                                                                     style="margin-top: 5px;color: black;">
                                                                                                     1
                                                                                                </h5>
                                                                                           </div>
                                                                                      </td>

                                                                                      <td class="align-middle"
                                                                                           style="width: 70px; text-align: center;">
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <center>
                                                                                                     <input
                                                                                                          class="radio the_input_element"
                                                                                                          name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                                          id="radio4"
                                                                                                          value="<?php echo $d->tidak_setuju; ?>"
                                                                                                          style="display: block !important; color: rgb(50, 55, 60);"
                                                                                                          autocomplete="off"
                                                                                                          type="radio"
                                                                                                          required />
                                                                                                </center>
                                                                                           </div>
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <h5
                                                                                                     style="margin-top: 5px;color: black;">
                                                                                                     2</h5>
                                                                                           </div>
                                                                                      </td>

                                                                                      <td class="align-middle"
                                                                                           style="width: 70px; text-align: center;">
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <center>
                                                                                                     <input
                                                                                                          class="radio the_input_element"
                                                                                                          name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                                          id="radio2"
                                                                                                          for="radio2"
                                                                                                          value="<?php echo $d->setuju; ?>"
                                                                                                          style="display: block !important; color: rgb(50, 55, 60);"
                                                                                                          autocomplete="off"
                                                                                                          type="radio"
                                                                                                          required />
                                                                                                </center>
                                                                                           </div>
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <h5
                                                                                                     style="margin-top: 5px;color: black;">
                                                                                                     3</h5>
                                                                                           </div>
                                                                                      </td>

                                                                                      <td class="align-middle"
                                                                                           style="width: 70px; text-align: center;">
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <center>
                                                                                                     <input
                                                                                                          class="radio the_input_element"
                                                                                                          name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                                                          value="<?php echo $d->sangat_setuju; ?>"
                                                                                                          style="display: block !important; color: rgb(50, 55, 60);"
                                                                                                          autocomplete="off"
                                                                                                          type="radio"
                                                                                                          required />
                                                                                                </center>
                                                                                           </div>
                                                                                           <div
                                                                                                class="clearfix prettyradio labelright  blue has-pretty-child">
                                                                                                <h5
                                                                                                     style="margin-top: 5px;color: black;">
                                                                                                     4</h5>
                                                                                           </div>
                                                                                      </td>
                                                                                 </tr>
                                                                            </tbody>
                                                                       </table>

                                                                       <?php }
                                                                           } else { ?>
                                                                       <div class="logo">
                                                                            <h5><a><span>Tidak Ada Pertanyaan
                                                                                           Kuesioner</span></a>
                                                                            </h5>
                                                                       </div>
                                                                       <?php } ?>
                                                                       <br />
                                                                       <div style="margin-right: 10px;">
                                                                            <input type="submit" id="submitBtn"
                                                                                 style="border-radius: 10px;background-color: #4747A1;"
                                                                                 value="Kirim Jawaban"
                                                                                 class="btn btn-block btn-success">
                                                                       </div>
                                                                  </div>
                                                             </div>
                                                        </div>
                                                        <?php echo form_close(); ?>
                                                   </div>
                                              </div>
                                         </div>
                                         <!-- About Kuesioner -->
                                         <!-- <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
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
                                         </div> -->
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

      <script>
      var dt = new Date();
      document.getElementById("tanggal").innerHTML = dt.toLocaleDateString();
      </script>

      <script type="text/javascript">
      window.onload = function() {
           jam();
      }

      function jam() {
           var e = document.getElementById('jam'),
                d = new Date(),
                h, m, s;
           h = d.getHours();
           m = set(d.getMinutes());
           s = set(d.getSeconds());

           e.innerHTML = h + ':' + m + ':' + s;

           setTimeout('jam()', 1000);
      }

      function set(e) {
           e = e < 10 ? '0' + e : e;
           return e;
      }
      </script>

 </body>

 </html>