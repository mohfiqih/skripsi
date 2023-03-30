<div class="container-fluid">
     <div>
          <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
               aria-label="breadcrumb">
               <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Admin
                    </li>
               </ol>
          </nav>
     </div>
     <div class="row">
          <div class="col-md-4">
               <div class="card">
                    <div class="card-body">
                         <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>"
                              method="POST">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                   value="<?php echo $this->security->get_csrf_hash(); ?>">
                              <input type="hidden" name="user_id"
                                   value="<?php echo uri(2) == "edit" ? enkrip($edit->user_id) : ""; ?>">

                              <div class="form-floating mb-3">
                                   <label>Username</label>
                                   <input type="text" class="form-control" name="user_nama"
                                        value="<?php echo uri(2) == "edit" ? $edit->user_nama : ""; ?>"
                                        placeholder="Nama Pengguna" autocomplete="off" required>

                              </div>
                              <div class="form-floating mb-3">
                                   <label>Password</label>
                                   <input type="password" class="form-control" name="user_password"
                                        value="<?php echo uri(2) == "edit" ? $edit->user_password : ""; ?>"
                                        placeholder="Password Pengguna" autocomplete="off" required>

                              </div>
                              <div class="form-floating mb-3">
                                   <label>Nama Lengkap</label>
                                   <input type="text" class="form-control" name="user_namalengkap"
                                        value="<?php echo uri(2) == "edit" ? $edit->user_namalengkap : ""; ?>"
                                        placeholder="Nama Lengkap" autocomplete="off" required>
                              </div>
                              <div class="form-floating mb-3">
                                   <label for="example-select-floating">Level</label><br />
                                   <select class="form-control" name="user_level"
                                        aria-label="Floating label select example" required>
                                        <option value="">Pilih Sebagai</option>
                                        <option value="1"
                                             <?php if (uri(2) == 'edit') echo $edit->user_level == "Super Admin" ? "selected" : ""; ?>>
                                             Super Admin</option>
                                        <option value="2"
                                             <?php if (uri(2) == 'edit') echo $edit->user_level == "Pengevaluasi" ? "selected" : ""; ?>>
                                             Pengevaluasi
                                        </option>
                                        <option value="3"
                                             <?php if (uri(2) == 'edit') echo $edit->user_level == "Dosen" ? "selected" : ""; ?>>
                                             Dosen
                                        </option>
                                        <option value="4"
                                             <?php if (uri(2) == 'edit') echo $edit->user_level == "Mahasiswa" ? "selected" : ""; ?>>
                                             Mahasiswa
                                        </option>
                                   </select>
                              </div>
                              <div class="form-floating mb-3">
                                   <label for="example-select-floating">Program Studi</label><br />
                                   <select class="form-control" name="user_prodi"
                                        aria-label="Floating label select example" required>
                                        <option value="">Pilih Prodi</option>
                                        <option value="TI"
                                             <?php if (uri(2) == 'edit') echo $edit->user_prodi == "TI" ? "selected" : ""; ?>>
                                             Teknik Informatika</option>
                                        <option value="TKOM"
                                             <?php if (uri(2) == 'edit') echo $edit->user_prodi == "TKOM" ? "selected" : ""; ?>>
                                             Teknik Komputer
                                        </option>
                                        <option value="AK"
                                             <?php if (uri(2) == 'edit') echo $edit->user_prodi == "AK" ? "selected" : ""; ?>>
                                             Akuntansi
                                        </option>
                                        <option value="FARM"
                                             <?php if (uri(2) == 'edit') echo $edit->user_prodi == "FARM" ? "selected" : ""; ?>>
                                             Farmasi
                                        </option>
                                   </select>
                              </div>
                              <div class="form-floating mb-3">
                                   <label for="example-select-floating">Program Studi</label><br />
                                   <select class="form-control" name="user_gender"
                                        aria-label="Floating label select example" required>
                                        <option value="">Pilih Gender</option>
                                        <option value="L"
                                             <?php if (uri(2) == 'edit') echo $edit->user_gender == "L" ? "selected" : ""; ?>>
                                             Laki-Laki</option>
                                        <option value="P"
                                             <?php if (uri(2) == 'edit') echo $edit->user_gender == "P" ? "selected" : ""; ?>>
                                             Perempuan
                                        </option>
                                   </select>
                              </div>
                              <div class="text-center">
                                   <button type="submit"
                                        class="btn btn-success"><?php echo (uri(2) == 'edit') ? 'Update' : 'Add'; ?></button>

                                   <a href="<?php echo base_url("users"); ?>">
                                        <button type="button" class="btn btn-danger">Cancel</button>
                                   </a>
                              </div>
                         </form>
                    </div>
               </div>
          </div>

          <div class="col-md-8">
               <div class="card">
                    <div class="card-body">
                         <!-- <h4 class="header-title mb-3" style="margin-left: 15px;">Data User</h4> -->
                         <div style="overflow: auto;">
                              <table id="myTable" class="table table-striped table-hover table-vcenter"
                                   style="border-top:2px solid #eee;">
                                   <thead>
                                        <tr>
                                             <th>User ID</th>
                                             <th style="width:5px">Username</th>
                                             <th>Nama Lengkap</th>
                                             <th style="width:140px">Sebagai</th>
                                             <th>Prodi</th>
                                             <th>Gender</th>
                                             <th style="width:100px">Action</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <?php
                                        if ($data_user){
                                        foreach ($data_user as $d){
                                        ?>
                                        <tr style="vertical-align:middle">
                                             <td><?php echo $d->user_id; ?></td>
                                             <td><?php echo $d->user_nama; ?></td>
                                             <td><?php echo $d->user_namalengkap; ?></td>
                                             <td><?php echo level_user($d->user_level); ?></td>
                                             <td><?php echo $d->user_prodi; ?></td>
                                             <td><?php echo $d->user_gender; ?></td>
                                             <td>
                                                  <div class="btn-group">
                                                       <a href="<?php echo url(1) .'/edit/'. enkrip($d->user_id); ?>"
                                                            class="btn btn-xs btn-info" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit User">
                                                            <i class="fas fa-edit"></i>
                                                       </a>

                                                       <?php if ($this->user_nama != $d->user_nama){ ?>
                                                       <a href="<?php echo url(1) .'/hapus/'. enkrip($d->user_id); ?>"
                                                            class="btn btn-xs btn-danger"
                                                            onclick="return confirm('Yakin hapus user')"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Hapus User">
                                                            <i class="fas fa-trash"></i>
                                                       </a>
                                                       <?php } ?>
                                                  </div>
                                             </td>

                                        </tr>
                                        <?php }} else { ?>
                                        <tr>
                                             <td class="text-center" colspan="4">No Data</td>
                                        </tr>
                                        <?php } ?>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>