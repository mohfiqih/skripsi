<!-- Notif Salah Username Password -->
<?php if ($this->session->flashdata('notif_login')){ ?>
<div class="alert alert-success alert-dismissible fade show" data-dismiss="alert" aria-label="Close" role="alert">
     <span class="btn-label"></span><?php echo $this->session->flashdata('notif_login'); ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
     </button>
</div>
<?php } ?>

<!-- ---------------------------------------- LEVEL SUPER ADMIN ------------------------------------------->
<!-- ---------------------------------------- LEVEL SUPER ADMIN ------------------------------------------->
<!-- ---------------------------------------- LEVEL SUPER ADMIN ------------------------------------------->

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
                              <p class="mb-4">Paket Kuesioner</p>
                              <p class="fs-30 mb-2"><?php echo $jml_paket; ?></p>
                              <p>Paket</p>
                         </div>
                    </div>
               </div>
               <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                         <div class="card-body">
                              <p class="mb-4">Data Manajerial</p>
                              <p class="fs-30 mb-2"><?php echo $jml_apl; ?></p>
                              <p>Data</p>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row">
               <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                         <div class="card-body">
                              <p class="mb-4">Data User</p>
                              <p class="fs-30 mb-2"><?php echo $jml_user; ?></p>
                              <p>Users</p>
                         </div>
                    </div>
               </div>
               <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                         <div class="card-body">
                              <p class="mb-4">Pertanyaan</p>
                              <p class="fs-30 mb-2"><?php echo $jml_soal; ?></p>
                              <p>Pertanyaan</p>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="container-fluid">
     <div class="row">
          <div class="col-md-3 mb-2">
               <div class="card card-light-blue">
                    <a href="<?php echo base_url('report/komentar'); ?>" class="dropdown-item">
                         <div class="card-body">
                              <center>
                                   <h4 class="header-title mt-0 mb-3"></h4>
                              </center>

                              <div class="widget-box-2">
                                   <div class="widget-detail-2 text-end">
                                        <center>
                                             <h2 class="fw-normal text-white" data-plugin="counterup">
                                                  <?php echo $jml_soal; ?> </h2>
                                             <p class="text-white mb-3">Label Baik</p>
                                        </center>
                                   </div>
                              </div>
                         </div>
                    </a>
               </div>
          </div>
          <div class="col-md-3 mb-4">
               <div class="card card-light-danger">
                    <a href="<?php echo base_url('report/komentar'); ?>" class="dropdown-item">
                         <div class="card-body">
                              <center>
                                   <h4 class="header-title mt-0 mb-3"></h4>
                              </center>

                              <div class="widget-box-2">
                                   <div class="widget-detail-2 text-end">
                                        <center>
                                             <h2 class="fw-normal text-white" data-plugin="counterup">
                                                  <?php echo $jml_soal; ?> </h2>
                                             <p class="text-white mb-3">Label Kurang</p>
                                        </center>
                                   </div>
                              </div>
                         </div>
                    </a>
               </div>
          </div>
     </div>
</div>
<div class="row">
     <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="card" style="margin-right: 12px;margin-left: 12px;">

               <div class="card-body">
                    <h5>Analisis Skala Likert</h5>
                    <p style="width: 300px;">Berikut hasil analisis dari skala likert setiap paket kuesioner</p>
                    <br />
                    <div class="table-responsive">
                         <table id="cari_skala" class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <!-- <th>No</th> -->
                                        <th>Nama Paket</th>
                                        <th>Persentase</th>
                                        <th>Kategori</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                        $no = 0 + 1;
                                        $this->load->model('M_dasbor');
                                        if ($data_paket) {
                                             foreach ($data_paket as $d) {
                                   ?>
                                   <tr>
                                        <!-- <th><?php echo $no++; ?></th> -->
                                        <td><?php echo $d->nama_paket; ?> v.<?php echo $d->versi_apl_paket; ?></td>
                                        <td>
                                             <?php

                                                $total_id	  = "id_paket_jawaban='" . $d->id_paket . "' ";
                                                $tertinggi    = $this->M_dasbor->total_soal($total_id)*4;
                                                $terendah     = $this->M_dasbor->total_soal($total_id)*1;
 
                                                $total = (($this->M_dasbor->total_ss_p($total_id))*4)+
                                                (($this->M_dasbor->total_s_p($total_id))*3)+
                                                (($this->M_dasbor->total_ts_p($total_id))*2)+
                                                (($this->M_dasbor->total_sts_p($total_id))*1);
                                                       
                                                $nilai = substr(($total / $tertinggi) * (100), 0, 5);
                                                                      
                                          if ($nilai <= 100 && $nilai >= 80) { ?>
                                             <!-- Sangat Setuju -->
                                             <span class="badge bg-success text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <!-- Setuju -->
                                             <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                             <span class="badge bg-success text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <!-- Tidak Setuju -->
                                             <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                             <span class="badge bg-danger text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <!-- Sangat Tidak Setuju -->
                                             <?php } else if ($nilai <= 40) { ?>
                                             <span class="badge bg-danger text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <?php } ?>
                                        </td>
                                        <td>
                                             <?php
                                             $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";
                                             $tertinggi    = $this->M_dasbor->total_soal($total_id)*4;
                                             $terendah     = $this->M_dasbor->total_soal($total_id)*1;

                                             $total = (($this->M_dasbor->total_ss_p($total_id))*4)+
                                             (($this->M_dasbor->total_s_p($total_id))*3)+
                                             (($this->M_dasbor->total_ts_p($total_id))*2)+
                                             (($this->M_dasbor->total_sts_p($total_id))*1);
                                                                    
                                             $nilai = ($total / $tertinggi) * 100;
                                                                      
                                             if ($nilai <= 100 && $nilai >= 80) { ?>
                                             <span class="badge bg-success text-white">
                                                  Sangat Setuju
                                             </span>
                                             <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                             <span class="badge bg-success text-white">
                                                  Setuju
                                             </span>
                                             <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                             <span class="badge bg-warning text-white">
                                                  Cukup
                                             </span>
                                             <?php } else if ($nilai <= 39.9 && $nilai >= 20) { ?>
                                             <span class="badge bg-danger text-white">
                                                  Tidak Setuju
                                             </span>
                                             <?php } else if ($nilai <= 19.9) { ?>
                                             <span class="badge bg-danger text-white">
                                                  Sangat Tidak Setuju
                                             </span>

                                             <?php } ?>
                                        </td>
                                   </tr>

                                   <?php }} else { ?>
                                   <td class="text-center" colspan="9">No Data</td>
                                   <?php } ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
          <div class="col-xl-12 col-md-12" style="margin-top: 15px;">
               <div class="card">
                    <div class="card-body">
                         <div class="table-responsive">
                              <figure class="highcharts-figure">
                                   <div id="total_responden"></div>
                              </figure>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="card" style="margin-right: 12px;margin-left: 12px;">
               <div class="card-body">
                    <h5>Analisis Klasifikasi</h5>
                    <p style="width: 300px;">Berikut hasil analisis dari klasifikasi komentar setiap paket kuesioner</p>
                    <br />
                    <div class="table-responsive">
                         <table id="cari_klasifikasi" class="table table-hover mb-0">
                              <thead>
                                   <tr>
                                        <!-- <th>No</th> -->
                                        <th>Nama Paket</th>
                                        <th>Baik</th>
                                        <th>Kurang</th>
                                        <th>Hasil</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
                                        $no = 0 + 1;
                                        $this->load->model('M_dasbor');
                                        if ($data_klasifikasi) {
                                             foreach ($data_klasifikasi as $d) {
                                   ?>
                                   <tr>
                                        <!-- <th><?php echo $no++; ?></th> -->
                                        <td><?php echo $d->nama_paket; ?> v.<?php echo $d->versi_apl_paket; ?></td>
                                        <td>
                                             <p class="text-success">
                                                  <?php 
                                                  $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                                  $Baik = $this->M_dasbor->label_baik($total_id, "klasifikasi");
                                                  $Kurang = $this->M_dasbor->label_kurang($total_id, "klasifikasi");
                                                  
                                                  echo $Baik;
                                                  ?>
                                             </p>
                                        </td>
                                        <td>
                                             <p class="text-danger">
                                                  <?php 
                                                  $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                                  $Baik = $this->M_dasbor->label_baik($total_id, "klasifikasi");
                                                  $Kurang = $this->M_dasbor->label_kurang($total_id, "klasifikasi");
                                                  
                                                  echo $Kurang;
                                                  ?>
                                             </p>
                                        </td>
                                        <td>
                                             <?php 
                                             $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";

                                             $Baik = $this->M_dasbor->label_baik($total_id, "klasifikasi");
                                             $Kurang = $this->M_dasbor->label_kurang($total_id, "klasifikasi");

                                             if ($Baik > $Kurang) { ?>
                                             <span class="badge bg-success text-white">
                                                  Baik
                                             </span>
                                             <?php } else if ($Baik < $Kurang) { ?>
                                             <span class="badge bg-danger text-white">
                                                  Kurang
                                             </span>
                                             <?php } ?>
                                        </td>
                                   </tr>

                                   <?php }} else { ?>
                                   <td class="text-center" colspan="9">No Data</td>
                                   <?php } ?>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
          <div class="card" style="margin-right: 12px;margin-left: 12px;margin-top: 15px;">
               <div class="card-body">
                    <div class="table-responsive">
                         <figure class="highcharts-figure">
                              <div id="manajerial"></div>
                         </figure>
                    </div>
               </div>
          </div>
     </div>
     <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="col-xl-12 col-md-12" style="margin-top: 15px;">
               <div class="card">
                    <div class="card-body">
                         <div class="table-responsive">
                              <figure class="highcharts-figure">
                                   <div id="grafik_aplikasi"></div>
                              </figure>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <!-- <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="card">
               <div class="card-body" style="height: 260px;overflow: auto;">
                    <h4 class="header-title mt-0 mb-3">
                         <center>Total Responden</center>
                    </h4>
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
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
     <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="card">
               <div class="card-body" style="height: 260px;overflow: auto;">
                    <h4 class="header-title mt-0 mb-3">
                         <center>Total Prodi</center>
                    </h4>
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
                                        <td>DIV Teknik Informatika</td>
                                        <td><?php echo $jml_TI; ?></td>
                                   </tr>
                                   <tr>
                                        <th>2</th>
                                        <td>DIII Teknik Komputer</td>
                                        <td><?php echo $jml_KOM; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>3</th>
                                        <td>DIII Akuntansi</td>
                                        <td><?php echo $jml_AK; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>4</th>
                                        <td>DIII Farmasi</td>
                                        <td><?php echo $jml_FARM; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>5</th>
                                        <td>DIV Akuntansi Sektor Publik</td>
                                        <td><?php echo $jml_ASP; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>6</th>
                                        <td>DIII Perhotelan</td>
                                        <td><?php echo $jml_PH; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>7</th>
                                        <td>DIII Kebidanan</td>
                                        <td><?php echo $jml_BID; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>8</th>
                                        <td>DIII Keperawatan</td>
                                        <td><?php echo $jml_PRW; ?>
                                        </td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div> -->
</div>
<div class="row">
     <div class="col-xl-6 col-md-6" style="margin-right: 12px;margin-left: 12px;">
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
     <!-- <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
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
     </div> -->
</div><br />

<!-- ---------------------------------------- LEVEL PENGEVALUASI (P2M) ------------------------------------------->
<!-- ---------------------------------------- LEVEL PENGEVALUASI (P2M) ------------------------------------------->
<!-- ---------------------------------------- LEVEL PENGEVALUASI (P2M) ------------------------------------------->

<?php elseif ($this->user_level == "Pengevaluasi"):?>
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

<!-- ---------------------------------------- LEVEL DOSEN & MAHASISWA ------------------------------------------->
<!-- ---------------------------------------- LEVEL DOSEN & MAHASISWA ------------------------------------------->
<?php else: ?>
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
                    <div class="alert alert-dark" role="alert">
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
                                   href="https://localhost/web_skripsi/kuesioner/skala/VUpCaWQvTEdhWGNWRGh6YUxWdUlIZw">https://localhost/web_skripsi/kuesioner/skala/VUpCaWQvTEdhWGNWRGh6YUxWdUlIZw</a>
                         </p>
                    </div>
               </div>
          </div>
     </div>

</div>
<?php endif; ?>