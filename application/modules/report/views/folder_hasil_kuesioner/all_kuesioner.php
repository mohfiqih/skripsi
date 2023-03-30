<head>
     <title>Hasil Kuesioner | Repository</title>
</head>
<div>
     <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
          aria-label="breadcrumb">
          <ol class="breadcrumb bg-primary">
               <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Data Jawaban
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
                                             <th class="align-middle" scope="col">Jawaban</th>
                                             <th class="align-middle" scope="col">Klasifikasi
                                             </th>
                                             <th class="align-middle" scope="col" style="width: 5px;">
                                                  Action
                                             </th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php
                                             $no=0+1;
									if ($data_klasifikasi){
									foreach ($data_klasifikasi as $d){ 
									?>
                                        <tr class="fw-normal">
                                             <th class="align-middle">
                                                  <?php echo $no++; ?>
                                             </th>
                                             <td class="align-middle">
                                                  <?php echo $d->jawaban; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <?php echo $d->klasifikasi; ?>
                                             </td>
                                             <td class="align-middle">
                                                  <a style="margin-left: 10px;text-decoration: none;"
                                                       href="<?php echo url(1) .'/jawaban_id/'. enkrip($d->id_paket); ?>"
                                                       data-mdb-toggle="tooltip" class="fas fa-eye text-success me-3"
                                                       title="Soal">
                                                  </a>
                                             </td>

                                        </tr>
                                        <?php }} else { ?>
                                        <td class="text-center" colspan="4">Tidak ada data</td>
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
<!-- <?php echo $this->session->flashdata('notifikasi'); ?> -->