<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="<?php echo base_url('assets/auth/login-form/fonts/icomoon/style.css') ?>">

     <link rel="stylesheet" href="<?php echo base_url('assets/auth/login-form/css/owl.carousel.min.css') ?>">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="<?php echo base_url('assets/auth/login-form/css/bootstrap.min.css') ?>">

     <!-- Style -->
     <link rel="stylesheet" href="<?php echo base_url('assets/auth/login-form/css/style.css') ?>">

     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">

     <title>Login Repository & Evaluasi</title>

     <script>
     $(window).load(function() {
          $("#preloader").delay(3000).fadeOut("slow");
     });
     </script>
     <script type="text/javascript">
     function myFunction() {
          var x = document.getElementById("inputPassword");
          if (x.type === "password") {
               x.type = "text";
          } else {
               x.type = "password";
          }
     }
     </script>
</head>

<body>
     <div class="content" style="margin-left: 20px;margin-right: 15px;">
          <div class="container">
               <div class="row">
                    <div class="col-md-6">
                         <img src="<?php echo base_url('assets/auth/images/login.png') ?>" alt="Image" class="img-fluid"
                              style="width: 450px;margin-top: 50px;">
                    </div>
                    <div class="col-md-6 contents" style="margin-top: 50px;">
                         <div class="row justify-content-center">
                              <div class="col-md-8">
                                   <div class="mb-4">
                                        <h3>Login to <strong>Sistem</strong></h3>
                                        <p class="mb-4">Repository & Evaluasi Sistem</p>
                                   </div>

                                   <form action="auth/proses" method="POST">
                                        <?php if ($this->session->flashdata('notifikasi')){ ?>
                                        <div class="alert alert-danger alert-dismissible fade show" data-dismiss="alert"
                                             aria-label="Close" role="alert">
                                             <span
                                                  class="btn-label"></span><?php echo $this->session->flashdata('notifikasi'); ?>
                                             <button type="button" class="close" data-dismiss="alert"
                                                  aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                             </button>
                                        </div>
                                        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                             <strong>Holy guacamole!</strong> You should check in on some of those
                                             fields below.
                                             <button type="button" class="close" data-dismiss="alert"
                                                  aria-label="Close">
                                                  <span
                                                       aria-hidden="true">&times;</span><?php echo $this->session->flashdata('notifikasi'); ?>
                                             </button>
                                        </div> -->
                                        <?php } ?>
                                        <input type="hidden"
                                             name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                             value="<?php echo $this->security->get_csrf_hash(); ?>">
                                        <div class="form-group first">
                                             <!-- <label for="username">Username</label> -->
                                             <input type="text" name="username" class="form-control" id="username"
                                                  placeholder="Username" required>

                                        </div><br />
                                        <div class="form-group last mb-4">
                                             <!-- <label for="password">Password</label> -->
                                             <input type="password" name="password" class="form-control"
                                                  placeholder="Password" id="inputPassword" for="inputPassword"
                                                  required>
                                        </div>

                                        <div class="d-flex mb-5 align-items-center">
                                             <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption"
                                                       for="showpw">Show Password</span>
                                                  <input type="checkbox" class="form-check-input" id="showpw"
                                                       onclick="myFunction()" />
                                                  <div class="control__indicator"></div>
                                             </label>
                                             <!-- <span class="ml-auto"><a href="#" class="forgot-pass">Contact Admin</a></span>  -->
                                        </div>

                                        <input type="submit" value="Login" class="btn btn-block btn-primary">

                                        <span class="d-block text-left my-4 text-muted">Skripsi Teknik
                                             Informatika - by Moh. Fiqih</span>

                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <script src="<?php echo base_url('assets/auth/login-form/js/jquery-3.3.1.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/auth/login-form/js/popper.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/auth/login-form/js/bootstrap.min.js') ?>"></script>
     <script src="<?php echo base_url('assets/auth/login-form/js/main.js') ?>"></script>
</body>

</html>