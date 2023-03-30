<head>
     <title>Bank Soal | Repository</title>
</head>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">All Jawaban
               </li>
          </ol>
     </nav>
</div>
<div class="card">

     <div class="container-fluid">

          <form action="<?php echo uri(2) == "evaluasi_soal" ? url(1, "edit_soal") : url(1, "tambah_soal"); ?>"
               method="POST">
               <input type="hidden" name="id_paket" value="<?php echo uri(2) == "edit" ? enkrip($d->id_paket) : ""; ?>">
               <!-- <?php
                    $no = 0 + 1;
                    if ($data_paket) {
                    foreach ($data_paket as $d) {
               ?>
               <div class="card">
                    <div style="margin-left: 20px;margin-top: 20px;">

                         <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-download"></i> Export
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item"
                                   href="<?php echo base_url('report/hasil_kuesioner_pdf/' . uri(3)); ?>"
                                   target="_blank">PDF</a>
                              <a class="dropdown-item" href="#" target="_blank">Excel</a>
                              <a class="dropdown-item" href="#" target="_blank">Something else
                                   here</a>
                         </div>
                         <a href="<?php echo base_url('report/all'); ?>">
                              <button type="button" class="btn btn-warning text-white"><i class=" fas fa-backward"></i>
                                   Kembali</button>
                         </a>
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-md-6" style="overflow: auto;">
                                        <br />
                                        <div class="box-header with-border">
                                             <h4 class="box-title" style="margin-left: 20px;">Paket Soal</h4>
                                        </div>
                                        <div style="overflow: auto;">
                                             <table class="table table-hover mb-0">
                                                  <tbody>
                                                       <tr>
                                                            <th width="150">Nama Paket</th>
                                                            <th width="20">:</th>
                                                            <td><?php echo $d->nama_paket; ?>
                                                                 v<?php echo $d->versi_apl_paket; ?>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th>Aplikasi</th>
                                                            <th>:</th>
                                                            <td> <?php echo $d->aplikasi; ?></td>
                                                       </tr>
                                                       <tr>
                                                            <th>Responden</th>
                                                            <th>:</th>
                                                            <td>
                                                                 <?php echo $d->responden; ?>
                                                            </td>
                                                       </tr>

                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>

                                   <div class="col-md-6" style="overflow: auto;margin-top: 10px;">
                                        <div class="box-header with-border">
                                             <h4 class="box-title" style="margin-left: 20px;margin-top: 10px;">Data
                                                  Kuesioner</h4>
                                        </div>
                                        <div style="overflow: auto;">
                                             <table class="table table-hover mb-0">
                                                  <tbody>
                                                       <tr>
                                                            <th width="150">Tanggal</th>
                                                            <th width="20">:</th>
                                                            <td>
                                                                 <?php echo $d->tgl_kuesioner; ?>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th width="150">Total Responden</th>
                                                            <th width="20">:</th>
                                                            <td>
                                                                 <?php echo $total_responden; ?> Responden
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th width="150">Jumlah Jawaban</th>
                                                            <th width="20">:</th>
                                                            <td><?php echo $total_soal; ?>
                                                            </td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <?php }
                               } else { ?>
                    <td class="text-center" colspan="8">Tidak ada data</td>
                    <?php } ?> -->

               <div class="card">
                    <div class="card-body">
                         <div class="row">
                              <div class="card-body" data-mdb-perfect-scrollbar="true"
                                   style="position: relative; overflow-x: auto;">
                                   <!-- <h4 style="margin-left: 15px;">Data Jawaban</h4> -->
                                   <table id="myTable" class="table table-hover mb-0" style="overflow-x: auto;">
                                        <thead>
                                             <tr>
                                                  <th scope="col" style="width: 5px;">No
                                                  </th>
                                                  <th scope="col">
                                                       Jawaban
                                                  </th>

                                                  <th scope="col">
                                                       Klasifikasi
                                                  </th>
                                                  <th scope="col">
                                                       Tanggal
                                                  </th>
                                                  <th scope="col" style="width: 10px;">
                                                       Action
                                                  </th>

                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                  $no = 0 + 1;
                                                  if ($data_jawaban) {
                                                  foreach ($data_jawaban as $d) {
                                             ?>
                                             <tr class="fw-normal">
                                                  <th class="align-middle">
                                                       <?php echo $no++; ?>
                                                  </th>
                                                  <td class="align-middle">
                                                       <?php echo $d->jawaban; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->hasil; ?>
                                                  </td>
                                                  <td class="align-middle">
                                                       <?php echo $d->datecreated; ?>
                                                  <td class="align-middle">
                                                       <!-- <a style="margin-left: 10px;text-decoration: none;"
                                                            href="<?php echo url(1) . '/lihat_responden/' . enkrip($d->id_identitas) . '/' . uri(3); ?>"
                                                            data-mdb-toggle="tooltip"
                                                            class="fas fa-eye text-success me-3" title="Soal">
                                                       </a> -->
                                                       <a style="margin-left: 10px;text-decoration: none;width: 10px;"
                                                            href="<?php echo url(1) . '/hapus/' . enkrip($d->id_identitas); ?>"
                                                            data-mdb-toggle="tooltip" title="Remove"
                                                            onclick="return confirm('Yakin hapus data?')"><i
                                                                 class="fas fa-trash-alt text-danger"></i></a>
                                                  </td>
                                                  <?php }
                                                  } else { ?>
                                                  <td class="text-center" colspan="8">Tidak ada data</td>
                                                  <?php } ?>
                                             </tr>
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
     </div>
</div>
</form>