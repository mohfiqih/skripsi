<head>
     <title>Hasil Kuesioner | Repository</title>
</head>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Data Kuesioner
               </li>
          </ol>
     </nav>
</div>
<div class="card">
     <!-- Start Content-->
     <div class="container-fluid">


          <div class="card">
               <div class="card-body">
                    <div class="row">
                         <div class="card-body" data-mdb-perfect-scrollbar="true" style="overflow-x: auto;">
                              <table id="myTable" class="table table-hover mb-0">
                                   <thead>
                                        <tr>
                                             <th class="align-middle" scope="col" style="width: 5px;">No
                                             </th>
                                             <th class="align-middle" scope="col">Nama Paket
                                                  Soal</th>
                                             <th class="align-middle" scope="col">Aplikasi
                                             </th>
                                             <th class="align-middle" scope="col" style="width: 5px;">
                                                  Action
                                             </th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php
                                             $no=0+1;
									if ($data_paket){
									foreach ($data_paket as $d){ 
									?>
                                        <tr class="fw-normal">
                                             <th class="align-middle">
                                                  <?php echo $no++; ?>
                                             </th>
                                             <th class="align-middle">
                                                  <?php echo $d->nama_paket; ?>
                                                  v<?php echo $d->versi_apl_paket; ?>
                                             </th>
                                             <td class="align-middle">
                                                  <?php echo $d->aplikasi; ?>
                                             </td>

                                             <td class="align-middle">
                                                  <a style="margin-left: 10px;text-decoration: none;"
                                                       href="<?php echo url(1) .'/data_responden/'. enkrip($d->id_paket); ?>"
                                                       data-mdb-toggle="tooltip" class="fas fa-eye text-success me-3"
                                                       title="Soal">
                                                  </a>
                                             </td>

                                        </tr>
                                        <?php }} else { ?>
                                        <td class="text-center" colspan="8">Tidak ada data</td>
                                        <?php } ?>
                                   </tbody>
                              </table>
                         </div>
                         <!-- End Tabel -->
                    </div>
               </div>
          </div>
          </form>
     </div>
</div>
</div>
</div>
</div>
<?php echo $this->session->flashdata('notifikasi'); ?>