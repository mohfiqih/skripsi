<div style="margin-right: 12px;margin-left: 12px;">
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Chart
               </li>
          </ol>
     </nav>
</div>
<div class="row">
     <div class="col-xl-6 col-md-6" style="margin-top: 15px;">
          <div class="card" style="margin-right: 12px;margin-left: 12px;">
               <div class="card-body">
                    <!-- <h4 class=" header-title mt-0 mb-3">
                         <center>Hasil Kuesioner
                         </center>
                    </h4><br /> -->
                    <div class="table-responsive">
                         <table id="cari" class="table table-hover mb-0">
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
                                        $this->load->model('M_chart');
                                        if ($data_paket) {
                                             foreach ($data_paket as $d) {
                                   ?>
                                   <tr>
                                        <!-- <th><?php echo $no++; ?></th> -->
                                        <td><?php echo $d->nama_paket; ?></td>
                                        <td>
                                             <?php

                                                $total_id	  = "id_paket_jawaban='" . $d->id_paket . "' ";
                                                $tertinggi    = $this->M_chart->total_soal($total_id)*5;
                                                $terendah     = $this->M_chart->total_soal($total_id)*1;
 
                                                $total = (($this->M_chart->total_ss_p($total_id))*4)+
                                                (($this->M_chart->total_s_p($total_id))*3)+
                                                (($this->M_chart->total_ts_p($total_id))*2)+
                                                (($this->M_chart->total_sts_p($total_id))*1);
                                                       
                                                $nilai = substr(($total / $tertinggi) * (100), 0, 5);
                                                                      
                                          if ($nilai <= 100 && $nilai >= 80) { ?>
                                             <span class="badge bg-success text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                             <span class="badge bg-success text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                             <span class="badge bg-warning text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <?php } else if ($nilai <= 39.9 && $nilai >= 20) { ?>
                                             <span class="badge bg-danger text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <?php } else if ($nilai <= 19.9) { ?>
                                             <span class="badge bg-danger text-white">
                                                  <?php echo $nilai ?>%
                                             </span>
                                             <?php } ?>
                                        </td>
                                        <td>
                                             <?php
                                             $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";
                                             $tertinggi    = $this->M_chart->total_soal($total_id)*4;
                                             $terendah     = $this->M_chart->total_soal($total_id)*1;

                                             $total = (($this->M_chart->total_ss_p($total_id))*4)+
                                             (($this->M_chart->total_s_p($total_id))*3)+
                                             (($this->M_chart->total_ts_p($total_id))*2)+
                                             (($this->M_chart->total_sts_p($total_id))*1);
                                                                    
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
                    <div class="table-responsive">
                         <figure class="highcharts-figure">
                              <div id="manajerial"></div>
                         </figure>
                    </div>
               </div>
          </div>
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