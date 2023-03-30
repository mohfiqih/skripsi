<div>
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
                                   </tr>
                                   <!-- <tr>
                                        <th>3</th>
                                        <td>Karyawan</td>
                                        <td><?php echo $jml_karyawan; ?>
                                        </td>
                                   </tr>
                                   <tr>
                                        <th>4</th>
                                        <td>Staf</td>
                                        <td><?php echo $jml_staf; ?></td>
                                   </tr> -->
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
     </div>
     <div class="col-xl-6 col-md-6" style="margin-top: 15px;height: 384px;">
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

     <div class="col-xl-6 col-md-6" style="margin-top: 15px;height: 384px;">
          <div class="card">
               <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">
                         <center>Grafik Manajerial Data</center>
                    </h4>
                    <div class="table-responsive" style="overflow: auto;">
                         <figure class="highcharts-figure">
                              <div id="manajerial"></div>
                         </figure>
                    </div>

               </div>
          </div>
     </div>

     <div class="col-xl-6 col-md-6">
          <div class="card">
               <div class="card-body">
                    <h4 class="header-title mt-0 mb-3">
                         <center>Grafik Total Responden</center>
                    </h4>
                    <div class="table-responsive" style="overflow: auto;">
                         <figure class="highcharts-figure">
                              <div id="responden"></div>
                         </figure>
                    </div>

               </div>
          </div>
     </div>

</div>