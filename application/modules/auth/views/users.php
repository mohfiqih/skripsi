<!-- <!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Login | Repository & Kuesioner Online</title>
     <link rel="shortcut icon" href="https://oase.poltektegal.ac.id/assets/backend/media/favicons/favicon.png" />
     <meta name="description" content="Repository - Aplikasi" />
     <meta name="author" content="sisfo360" />
     <meta name="robots" content="index, follow" />
     <meta property="og:title" content="Login | Repository - Aplikasi" />
     <meta property="og:site_name" content="Repository" />
     <meta property="og:description" content="Repository" />
     <meta property="og:type" content="website" />
     <meta property="og:url" content="https://repository.skom.id/repository/login" />
     <meta property="og:image" content="https://oase.poltektegal.ac.id/assets/poltek.png" />

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
     <!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
     href="<?php echo base_url("assets/login_repo/vendor/bootstrap/css/bootstrap.min.css"); ?>" />

<link rel=" stylesheet" type="text/css"
     href="<?php echo base_url("assets/login_repo/fonts/font-awesome-4.7.0/css/font-awesome.min.css"); ?>" />

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/login_repo/vendor/animate/animate.css"); ?>" />
<!--===============================================================================================-->
<link rel=" stylesheet" type="text/css"
     href="<?php echo base_url("assets/login_repo/vendor/css-hamburgers/hamburgers.min.css"); ?>" />
<!--===============================================================================================-->
<link rel=" stylesheet" type="text/css"
     href="<?php echo base_url("assets/login_repo/vendor/select2/select2.min.css"); ?>" />
<!--===============================================================================================-->
<link rel=" stylesheet" type="text/css" href="<?php echo base_url("assets/login_repo/css/util.css");?>" />
<link rel=" stylesheet" type="text/css" href="<?php echo base_url("assets/login_repo/css/main.css"); ?>" />
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- <link rel=" stylesheet" type="text/css" href="<?php echo base_url("assets/frontend/css/pageloader.css"); ?>" /> -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
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

<style type="text/css">
#preloader {
     position: fixed;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     z-index: 9999;
     background: url(<?php echo base_url("assets/images/Preloader.gif");
     ?>) 50% no-repeat #fff;
}

/* .loader .loading {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%);
          font: 14px arial;
     } */
</style>

</head>

<body>
     <!-- <div class="preloader" id="preloader">
     </div> -->
     <div class="container-login100">
          <div class="wrap-login100">
               <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?php echo base_url("assets/frontend/images/req-on.png"); ?>" alt=" IMG" />
               </div>

               <form action="auth/proses" method="POST" class="login100-form validate-form">
                    <h3>
                         <span style="color: #57b846; font-weight: bold">ReQ-On Application</span>
                         <!-- Repo<span style="color: #57b846; font-weight: bold"> PHB</span>
                         <span style="color: blue; font-weight: bold"></span><br /> -->
                    </h3>
                    <p>
                         (Repository & Questionnaire Online)
                    </p><br />

                    <?php if ($this->session->flashdata('notifikasi')){ ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                         <button type="button" class="btn-close" data-dismiss="alert" aria-label="close">
                              <span class="btn-label"><i class="fa fa-times"
                                        style="margin-right: 10px;"></i></span><?php echo $this->session->flashdata('notifikasi'); ?></button>

                    </div>
                    <?php } ?>
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                         value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="wrap-input100 validate-input">
                         <input class="input100" type="text" name="username" autocomplete="off" autocomplete="off"
                              placeholder="Username" required />
                         <span class="focus-input100"></span>
                         <span class="symbol-input100">
                              <i class="fa fa-user" aria-hidden="true"></i>
                         </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                         <input class="input100" for="inputPassword" type="password" name="password" autocomplete="off"
                              id="inputPassword" autocomplete="off" placeholder="Password" required />
                         <span class="focus-input100"></span>
                         <span class="symbol-input100">
                              <i class="fa fa-lock" aria-hidden="true"></i>
                         </span>

                    </div>

                    <div style="margin-left: 30px;">
                         <input type="checkbox" class="form-check-input" id="showpw" onclick="myFunction()">
                         <label class=" form-check-label font-weight-light" for="showpw">Show Password</label>
                    </div>

                    <div class="container-login100-form-btn">
                         <button id="submit" type="submit" class="login100-form-btn">Login</button>
                    </div>
                    <br />
                    <div class="text-center p-t-12">
                         <span class="txt1"> Forget </span>
                         <a class="txt2" href="" style="text-decoration: none;"> Username / Password ? Contact to Admin
                         </a>
                    </div>

                    <div class="text-center p-t-136">
                         <a class="txt2" href="" style="text-decoration: none;">Copyright 2022 &copy;
                              ReQ-On by mohfiqih_
                         </a>
                    </div>
               </form>
          </div>
     </div>

     <!--===============================================================================================-->
     <script src="<?php echo base_url("assets/login_repo/vendor/jquery/jquery-3.2.1.min.js");?>"></script>
     <!--===============================================================================================-->
     <script src="<?php echo base_url("assets/login_repo/vendor/bootstrap/js/popper.js"); ?>"></script>
     <script src="<?php echo base_url("assets/login_repo/vendor/bootstrap/js/bootstrap.min.js"); ?>"></script>
     <!--===============================================================================================-->
     <script src="<?php echo base_url("assets/login_repo/vendor/select2/select2.min.js"); ?>"></script>
     <!--===============================================================================================-->
     <script src="<?php echo base_url("assets/login_repo/vendor/tilt/tilt.jquery.min.js"); ?>"></script>
     <script>
     $(".js-tilt").tilt({
          scale: 1.1,
     });
     </script>
     <!--===============================================================================================-->
     <script src="<?php echo base_url("assets/login_repo/js/main.js"); ?>"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
          integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
     </script>

     <script type="text/javascript">
     // (function($) {
     //      $(window).on('loader', function() {
     //           $('.loader').fadeOut('2000', function() {
     //                $(this).remove();
     //           });
     //      });
     // })(jQuery);
     // $(document).ready(function() {
     //      $(window).load(function() {
     //           $(".loader").remove();
     //      });
     // });
     </script>
     <!-- <script src="<?php echo base_url("assets/jquery/jquery.min.js"); ?>"></script>
     <script> -->
</body>

</html> -->