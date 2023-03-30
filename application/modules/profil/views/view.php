<div class="container-fluid">
     <div>
          <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
               aria-label="breadcrumb">
               <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">View Profil
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

                              <!-- <div class="mb-2"><br />
                                   <label class="form-label">Profile Photo</label>
                                   <input type="file" class="form-control" name="file_foto" value=""><br />
                                   <p>Photo files must be jpg, png and jpeg and file size
                                        must be
                                        under 2MB<br />
                                   </p>
                              </div> -->
                         </div>
                    </div>
               </div>

               <div class="col-md-8">
                    <div class="card">
                         <div class="card-body">
                              <div class="mb-2">
                                   <label class="form-label">User ID</label>
                                   <input type="text" class="form-control" name="user_nama"
                                        value="<?php echo $edit->user_id; ?>" readonly>
                              </div>
                              <div class="mb-2">
                                   <label class="form-label">Username</label>
                                   <input type="text" class="form-control" name="user_nama"
                                        value="<?php echo $edit->user_nama; ?>" readonly>
                              </div>
                              <div class="mb-2">
                                   <label class="form-label">Nama Lengkap</label>
                                   <input type="text" class="form-control" name="nama_lengkap"
                                        value="<?php echo $edit->user_namalengkap; ?>" readonly>
                              </div>
                              <div class="mb-2">
                                   <label class="form-label">Sebagai</label>
                                   <input type="text" class="form-control" name="nama_lengkap"
                                        value="<?php echo $edit->user_level; ?>" readonly>
                              </div>
                         </div> <!-- end col -->
                    </div>
               </div>
          </div>
     </form>
</div>