<div class="container-fluid">
     <div>
          <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
               aria-label="breadcrumb">
               <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Profil
                    </li>
               </ol>
          </nav>
     </div>
     <form action="<?php echo base_url('profil/update'); ?>" method="POST" enctype="multipart/form-data">

          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
               value="<?php echo $this->security->get_csrf_hash(); ?>">

          <div class="row push">
               <div class="col-md-4">
                    <div class="card">
                         <div class="card-body">
                              <!-- <?php echo $this->session->flashdata('notifikasi'); ?> -->
                              <center>
                                   <img class="avatar-img rounded" style="width: 270px; height: 270px;" type="file"
                                        alt="poltek"
                                        src="<?php echo base_url().'assets/images/'.$edit->user_foto; ?>" /><br />
                              </center>

                              <div class="mb-2"><br />
                                   <label class="form-label">Profile Photo</label>
                                   <input type="file" class="form-control" name="file_foto" value=""><br />
                                   <p>Untuk mengubah foto profil, ukuran file harus dibawah 2MB. Terimakasih<br />
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="col-md-8">
                    <div class="card">
                         <div class="card-body">
                              <div class="mb-2">
                                   <label class="form-label">Username</label>
                                   <input type="text" class="form-control" name="user_nama"
                                        value="<?php echo $edit->user_nama; ?>">
                              </div>
                              <div class="mb-2">
                                   <label class="form-label">Full Name</label>
                                   <input type="text" class="form-control" name="nama_lengkap"
                                        value="<?php echo $edit->user_namalengkap; ?>">
                              </div>
                              <div class="mb-2">
                                   <label class="form-label">Current Password</label>
                                   <input type="password" class="form-control" name="password_sekarang">
                              </div>
                              <div class="mb-2">
                                   <label class="form-label">New Password</label>
                                   <input type="password" class="form-control" name="password_baru_1">
                              </div>
                              <div class="mb-2">
                                   <label class="form-label">Repeat New Password</label>
                                   <input type="password" class="form-control" name="password_baru_2">
                              </div>
                              <div class="text-center">
                                   <button type="submit" class="btn btn-success">Update</button>
                                   <a href="<?php echo base_url("dasbor"); ?>">
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                   </a>
                              </div>
                         </div> <!-- end col -->
                    </div>
               </div>
          </div>
     </form>
</div>