<?php if ($this->user_level == "Super Admin"):?>
<div class="row">
     <div class="col-md-12 grid-margin">
          <div class="row">
               <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Selamat Datang <?php echo $user->user_namalengkap; ?></h3>
                    <h6 class="font-weight-normal mb-0">Di Repository Evaluasi sebagai
                         <span class="text-primary"><?php echo $user->user_level; ?></span>
                    </h6>

               </div>
               <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                         <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
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
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="row">
     <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg"
               style="background-image: url(https://thumbs.dreamstime.com/b/blue-abstract-background-geometry-shine-layer-element-blue-abstract-background-geometry-shine-layer-element-vector-102937226.jpg)">
               <div class="card-people mt-auto">
                    <img src="<?php echo base_url('assets/auth/images/dashboard.png') ?>" alt="people">
                    <div class="weather-info">
                    </div>
               </div>
          </div>
     </div>
     <div class="col-md-6 grid-margin transparent">
          <div class="row">
               <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                         <div class="card-body">
                              <p class="mb-4">Total Paket Kuesioner</p>
                              <p class="fs-30 mb-2"><?php echo $jml_paket; ?></p>
                              <p>Kuesioner</p>
                         </div>
                    </div>
               </div>
               <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                         <div class="card-body">
                              <p class="mb-4">Total Sistem</p>
                              <p class="fs-30 mb-2"><?php echo $jml_apl; ?></p>
                              <p>Apps</p>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row">
               <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                         <div class="card-body">
                              <p class="mb-4">Total User</p>
                              <p class="fs-30 mb-2"><?php echo $jml_user; ?></p>
                              <p>Users</p>
                         </div>
                    </div>
               </div>
               <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                         <div class="card-body">
                              <p class="mb-4">Total Pertanyaan</p>
                              <p class="fs-30 mb-2"><?php echo $jml_soal; ?></p>
                              <p>Pertanyaan</p>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="row">
     <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="card">
               <div class="card-body" style="height: 260px;overflow: auto;">
                    <h4 class="header-title mt-0 mb-3">Total Responden
                         Berdasarkan
                         Kategori</h4>
                    <div class="table-responsive">
                         <table class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Kategori Responden</th>
                                        <th>Jumlah Responden</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <th>1</th>
                                        <td>Dosen</td>
                                        <td><?php echo $jml_dosen; ?></td>
                                   </tr>
                                   <tr>
                                        <th>2</th>
                                        <td>Mahasiswa</td>
                                        <td><?php echo $jml_mahasiswa; ?>
                                        </td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>

     </div>
     <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="card">
               <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">
                         <center>Diagram Kategori Responden</center>
                    </h4>
                    <div class="table-responsive" style="overflow: auto;">
                         <figure class="highcharts-figure">
                              <div id="pie"></div>
                         </figure>
                    </div>
               </div>
          </div>
     </div>
</div><br />
<?php elseif ($this->user_level == "Dosen" or $this->user_level == "Mahasiswa"):?>
<div class="container-fluid">
     <div class="row">
          <div class="col-md-12 grid-margin">
               <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                         <h3 class="font-weight-bold">Selamat Datang <?php echo $user->user_namalengkap; ?></h3>
                         <h6 class="font-weight-normal mb-0">Di sistem evaluasi sebagai
                              <span class="text-primary"><?php echo $user->user_level; ?></span>
                         </h6>

                    </div>
                    <div class="col-12 col-xl-4">
                         <div class="justify-content-end d-flex">
                              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
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
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col-md-8 grid-margin stretch-card">

               <div class="card tale-bg">
                    <!-- <div class="card-people mt-auto">
                         <img src="<?php echo base_url('assets/auth/images/dashboard.png') ?>" alt="people">
                         <div class="weather-info">
                         </div>
                    </div> -->
                    <div class="alert alert-warning" role="alert">
                         <h4 class="alert-heading">Informasi Sistem!</h4>
                         <hr>
                         <p>Dalam rangka untuk pengembangan sistem kedepannya, mohon untuk
                              pengguna
                              sistem bisa memberikan ulasan pada
                              kuesioner berikut ini, isi dengan jujur selama anda menggunakan sistem tersebut. Jika ada
                              kendala sampaikan dalam kolom komentar. Terimakasih.</p>
                         <hr>
                         <p class="mb-0">Link Kuesioner :<br />
                              <a style="text-align: justify;text-decoration: none;"
                                   href="https://localhost/web_skripsi/kuesioner/index/VUpCaWQvTEdhWGNWRGh6YUxWdUlIZw">https://localhost/web_skripsi/kuesioner/index/VUpCaWQvTEdhWGNWRGh6YUxWdUlIZw</a>
                         </p>
                    </div>
               </div>
          </div>
     </div>

</div>
<?php else: ?>
<div class="row">
     <div class="col-md-12 grid-margin">
          <div class="row">
               <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Selamat Datang <?php echo $user->user_namalengkap; ?></h3>
                    <h6 class="font-weight-normal mb-0">Di Repository Evaluasi sebagai
                         <span class="text-primary"><?php echo $user->user_level; ?></span>
                    </h6>

               </div>
               <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                         <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
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
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="row">
     <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg"
               style="background-image: url(https://thumbs.dreamstime.com/b/blue-abstract-background-geometry-shine-layer-element-blue-abstract-background-geometry-shine-layer-element-vector-102937226.jpg)">
               <div class="card-people mt-auto">
                    <img src="<?php echo base_url('assets/auth/images/dashboard.png') ?>" alt="people">
                    <div class="weather-info">
                    </div>
               </div>
          </div>
     </div>
     <div class="col-md-6 grid-margin transparent">
          <div class="row">
               <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                         <div class="card-body">
                              <p class="mb-4">Total Paket Kuesioner</p>
                              <p class="fs-30 mb-2"><?php echo $jml_paket; ?></p>
                              <p>Kuesioner</p>
                         </div>
                    </div>
               </div>

          </div>
          <div class="row">
               <div class="col-md-6 mb-8 stretch-card transparent">
                    <div class="card card-dark-blue">
                         <div class="card-body">
                              <p class="mb-4">Total Pertanyaan</p>
                              <p class="fs-30 mb-2"><?php echo $jml_soal; ?></p>
                              <p>Pertanyaan</p>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="row">
     <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="card">
               <div class="card-body" style="height: 260px;overflow: auto;">
                    <h4 class="header-title mt-0 mb-3">Total Responden
                         Berdasarkan
                         Kategori</h4>
                    <div class="table-responsive">
                         <table class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Kategori Responden</th>
                                        <th>Jumlah Responden</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <th>1</th>
                                        <td>Dosen</td>
                                        <td><?php echo $jml_dosen; ?></td>
                                   </tr>
                                   <tr>
                                        <th>2</th>
                                        <td>Mahasiswa</td>
                                        <td><?php echo $jml_mahasiswa; ?>
                                        </td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>

     </div>
     <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="card">
               <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">
                         <center>Diagram Kategori Responden</center>
                    </h4>
                    <div class="table-responsive" style="overflow: auto;">
                         <figure class="highcharts-figure">
                              <div id="pie"></div>
                         </figure>
                    </div>
               </div>
          </div>
     </div>

</div><br />
<?php endif; ?>