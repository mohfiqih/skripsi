<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
     <meta charset="utf-8">
     <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
     <title>Kuesioner Evaluasi Sistem - Admin</title>
     <link rel="stylesheet"
          href="<?php echo base_url('assets/template_sky/template/vendors/feather/feather.css'); ?>" />
     <link rel="stylesheet"
          href="<?php echo base_url('assets/template_sky/template/vendors/ti-icons/css/themify-icons.css'); ?>" />
     <link rel="stylesheet"
          href="<?php echo base_url('assets/template_sky/template/vendors/css/vendor.bundle.base.css'); ?>" />
     <link rel="stylesheet"
          href="<?php echo base_url('assets/template_sky/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css'); ?>" />
     <link rel="stylesheet"
          href="<?php echo base_url('assets/template_sky/template/vendors/ti-icons/css/themify-icons.css'); ?>" />
     <!-- Font Awesome -->
     <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/fontawesome.min.css'); ?>" />
     <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css'); ?>">

     <link rel="stylesheet" type="text/css"
          href="<?php echo base_url('assets/template_sky/template/js/select.dataTables.min.css'); ?>" />
     <link rel="stylesheet"
          href="<?php echo base_url('assets/template_sky/template/css/vertical-layout-light/style.css'); ?>" />

     <link rel="stylesheet" href="<?php echo base_url('assets/popup/style.css'); ?>" />
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png" />
</head>

<body>
     <?php if ($this->user_level == "Super Admin"):?>
     <div class="container-scroller">
          <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row "
               style="box-shadow: 0px 5px 21px -5px #grey!important;">
               <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="#"><img
                              src="<?php echo base_url('assets/auth/images/bg-repo.jpg') ?>"
                              style="width: 120px;height: 50px; margin-left: 50px;" /></a>
                    <!-- <a class="navbar-brand brand-logo-mini" href="#"><img
                              src="assets/template_sky/template/images/logo-mini.svg" /></a> -->

               </div>
               <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                         data-toggle="minimize">
                         <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                         <li class="nav-item dropdown">
                              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                   data-toggle="dropdown">
                                   <i class="icon-bell mx-0"></i>
                                   <span class="count"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                   aria-labelledby="notificationDropdown">
                                   <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-success">
                                                  <i class="ti-info-alt mx-0"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                             <p class="font-weight-light small-text mb-0 text-muted">
                                                  Just now
                                             </p>
                                        </div>
                                   </a>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-warning">
                                                  <i class="ti-settings mx-0"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <h6 class="preview-subject font-weight-normal">Settings</h6>
                                             <p class="font-weight-light small-text mb-0 text-muted">
                                                  Private message
                                             </p>
                                        </div>
                                   </a>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-info">
                                                  <i class="ti-user mx-0"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                             <p class="font-weight-light small-text mb-0 text-muted">
                                                  2 days ago
                                             </p>
                                        </div>
                                   </a>
                              </div>
                         </li>
                         <li class="nav-item nav-profile dropdown">
                              <div class="u-text">
                                   <h5 id="profileDropdown" style="margin-top: 10px;height: 30px;"
                                        class="btn btn-xs btn-primary btn-sm">
                                        <?php echo $user->user_namalengkap;?>
                                   </h5>

                              </div>
                              <a style="margin-left: 10px;" class="nav-link dropdown-toggle" href="#"
                                   data-toggle="dropdown" id="profileDropdown">
                                   <img style="width: 30px;height: 30px;"
                                        src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                        alt="profile" />
                              </a>

                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                   aria-labelledby="profileDropdown" style="width: 250px;">
                                   <a class="dropdown-item">
                                        <img style="width: 40px;height: 40px;margin-right: 10px;"
                                             src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                             alt="profile" class="avatar-img rounded" />
                                        <?php echo $user->user_namalengkap;?>
                                   </a>
                                   <a href="<?php echo base_url('profil/view'); ?>" class="dropdown-item">
                                        <i class="fas fa-image text-primary"></i>
                                        Lihat Profil
                                   </a>
                                   <a href="<?php echo base_url('profil'); ?>" class="dropdown-item">
                                        <i class="ti-settings text-primary"></i>
                                        Edit Profil
                                   </a>
                                   <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
                                        <i class="ti-power-off text-primary"></i>
                                        Logout
                                   </a>
                              </div>
                         </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                         data-toggle="offcanvas">
                         <span class="icon-menu"></span>
                    </button>
               </div>
          </nav>
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
               <!-- partial:partials/_settings-panel.html -->
               <div class="theme-setting-wrapper">
                    <div id="settings-trigger"><i class="ti-settings"></i></div>
                    <div id="theme-settings" class="settings-panel">
                         <i class="settings-close ti-close"></i>
                         <p class="settings-heading">SIDEBAR SKINS</p>
                         <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                              <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                         </div>
                         <div class="sidebar-bg-options" id="sidebar-dark-theme">
                              <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                         </div>
                         <div class="sidebar-bg-options" id="sidebar-success-theme">
                              <div class="img-ss rounded-circle bg-success border mr-3"></div>Green
                         </div>
                         <div class="sidebar-bg-options" id="sidebar-danger-theme">
                              <div class="img-ss rounded-circle bg-danger border mr-3"></div>Red
                         </div>
                         <div class="sidebar-bg-options" id="sidebar-default-theme">
                              <div class="img-ss rounded-circle bg-default border mr-3"></div>White
                         </div>
                         <div class="sidebar-bg-options" id="sidebar-info-theme">
                              <div class="img-ss rounded-circle bg-info border mr-3"></div>Blue
                         </div>
                         <p class="settings-heading mt-2">HEADER SKINS</p>
                         <div class="color-tiles mx-0 px-4">
                              <div class="tiles success"></div>
                              <div class="tiles warning"></div>
                              <div class="tiles danger"></div>
                              <div class="tiles info"></div>
                              <div class="tiles dark"></div>
                              <div class="tiles default"></div>
                              <div class="tiles secondary"></div>
                              <!-- <div class="tiles default"></div> -->
                         </div>
                    </div>
               </div>
               <div id="right-sidebar" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                         <li class="nav-item">
                              <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                                   aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                                   aria-controls="chats-section">CHATS</a>
                         </li>
                    </ul>
                    <div class="tab-content" id="setting-content">
                         <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                              aria-labelledby="todo-section">
                              <div class="add-items d-flex px-3 mb-0">
                                   <form class="form w-100">
                                        <div class="form-group d-flex">
                                             <input type="text" class="form-control todo-list-input"
                                                  placeholder="Add To-do">
                                             <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                                  id="add-task">Add</button>
                                        </div>
                                   </form>
                              </div>
                              <div class="list-wrapper px-3">
                                   <ul class="d-flex flex-column-reverse todo-list">
                                        <li>
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="checkbox" type="checkbox">
                                                       Team review meeting at 3.00 PM
                                                  </label>
                                             </div>
                                             <i class="remove ti-close"></i>
                                        </li>
                                        <li>
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="checkbox" type="checkbox">
                                                       Prepare for presentation
                                                  </label>
                                             </div>
                                             <i class="remove ti-close"></i>
                                        </li>
                                        <li>
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="checkbox" type="checkbox">
                                                       Resolve all the low priority tickets due today
                                                  </label>
                                             </div>
                                             <i class="remove ti-close"></i>
                                        </li>
                                        <li class="completed">
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="checkbox" type="checkbox" checked>
                                                       Schedule meeting for next week
                                                  </label>
                                             </div>
                                             <i class="remove ti-close"></i>
                                        </li>
                                        <li class="completed">
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="checkbox" type="checkbox" checked>
                                                       Project review
                                                  </label>
                                             </div>
                                             <i class="remove ti-close"></i>
                                        </li>
                                   </ul>
                              </div>
                              <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                              <div class="events pt-4 px-3">
                                   <div class="wrapper d-flex mb-2">
                                        <i class="ti-control-record text-primary mr-2"></i>
                                        <span>Feb 11 2018</span>
                                   </div>
                                   <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                                   <p class="text-gray mb-0">The total number of sessions</p>
                              </div>
                              <div class="events pt-4 px-3">
                                   <div class="wrapper d-flex mb-2">
                                        <i class="ti-control-record text-primary mr-2"></i>
                                        <span>Feb 7 2018</span>
                                   </div>
                                   <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                                   <p class="text-gray mb-0 ">Call Sarah Graves</p>
                              </div>
                         </div>
                         <!-- To do section tab ends -->
                         <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                              <div class="d-flex align-items-center justify-content-between border-bottom">
                                   <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends
                                   </p>
                                   <small
                                        class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                                        All</small>
                              </div>
                              <ul class="chat-list">
                                   <li class="list active">
                                        <div class="profile"><img alt="image"><span class="online"></span></div>
                                        <div class="info">
                                             <p>Thomas Douglas</p>
                                             <p>Available</p>
                                        </div>
                                        <small class="text-muted my-auto">19 min</small>
                                   </li>
                                   <li class="list">
                                        <div class="profile"><img alt="image"><span class="offline"></span></div>
                                        <div class="info">
                                             <div class="wrapper d-flex">
                                                  <p>Catherine</p>
                                             </div>
                                             <p>Away</p>
                                        </div>
                                        <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                        <small class="text-muted my-auto">23 min</small>
                                   </li>
                                   <li class="list">
                                        <div class="profile"><img alt="image"><span class="online"></span></div>
                                        <div class="info">
                                             <p>Daniel Russell</p>
                                             <p>Available</p>
                                        </div>
                                        <small class="text-muted my-auto">14 min</small>
                                   </li>
                                   <li class="list">
                                        <div class="profile"><img alt="image"><span class="offline"></span></div>
                                        <div class="info">
                                             <p>James Richardson</p>
                                             <p>Away</p>
                                        </div>
                                        <small class="text-muted my-auto">2 min</small>
                                   </li>
                                   <li class="list">
                                        <div class="profile"><img alt="image"><span class="online"></span></div>
                                        <div class="info">
                                             <p>Madeline Kennedy</p>
                                             <p>Available</p>
                                        </div>
                                        <small class="text-muted my-auto">5 min</small>
                                   </li>
                                   <li class="list">
                                        <div class="profile"><img alt="image"><span class="online"></span></div>
                                        <div class="info">
                                             <p>Sarah Graves</p>
                                             <p>Available</p>
                                        </div>
                                        <small class="text-muted my-auto">47 min</small>
                                   </li>
                              </ul>
                         </div>
                         <!-- chat tab ends -->
                    </div>
               </div>
               <!-- partial -->
               <!-- partial:partials/_sidebar.html -->

               <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">

                         <li class="nav-item active">
                              <a class="nav-link active" href="<?php echo base_url('dasbor'); ?>">
                                   <i class="fas fa-home menu-icon"></i>
                                   <span class="menu-title">Dashboard</span>
                              </a>
                         </li>
                         <li class="nav-item" style="margin-left: 17px;margin-top: 20px;">
                              <span class="menu-title" style="color: grey;">Menu Data</span>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('manajerial'); ?>">
                                   <i class="fas fa-list menu-icon"></i>
                                   <span class="menu-title">Manajerial Sistem</span>
                              </a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('bankberkas'); ?>">
                                   <i class="fa-solid fa-file menu-icon"></i>
                                   <span class="menu-title">Berkas Sistem</span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                                   aria-controls="ui-basic">
                                   <i class="fas fa-book menu-icon"></i>
                                   <span class="menu-title">Bank Pertanyaan</span>
                                   <i class="menu-arrow"></i>
                              </a>
                              <div class="collapse" id="ui-basic">
                                   <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('paket') ?>">Paket Kuesioner</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('link_kuesioner') ?>">Link Kuesioner</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false"
                                   aria-controls="charts">
                                   <i class="fas fa-calendar menu-icon"></i>
                                   <span class="menu-title">Report Kuesioner</span>
                                   <i class="menu-arrow"></i>
                              </a>
                              <div class="collapse" id="charts">
                                   <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('report') ?>">Data Responden</a></li>
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('report/komentar') ?>">Hasil
                                                  Komentar</a></li>
                                   </ul>
                              </div>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('diagram'); ?>">
                                   <i class="fas fa-chart-line menu-icon"></i>
                                   <span class="menu-title">Chart</span>
                              </a>
                         </li>
                         <li class="nav-item" style="margin-left: 17px;margin-top: 20px;">
                              <span class="menu-title" style="color: grey;">Master Data</span>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('users'); ?>">
                                   <i class="fa-solid fa-user menu-icon"></i>
                                   <span class="menu-title">Data User</span>
                              </a>
                         </li>
                    </ul>
               </nav>

               <!-- partial -->
               <div class="main-panel">
                    <div class="content-wrapper">

                         <!-- ============================================================== -->
                         <!-- Start Page Content here -->
                         <!-- ============================================================== -->

                         <?php $this->load->view($view); ?>

                         <!-- ============================================================== -->
                         <!-- End Page content -->
                         <!-- ============================================================== -->

                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                         <div class="d-sm-flex justify-content-center justify-content-sm-between">
                              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                                   2022. Moh. Fiqih |
                                   <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">| Tugas
                                        Akhir Teknik Informatika</span>
                         </div>
                    </footer>
                    <!-- partial -->
               </div>
               <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
     </div>

     <?php elseif ($this->user_level == "Dosen" or $this->user_level == "Mahasiswa"):?>
     <div class="container-scroller">
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row "
               style="box-shadow: 0px 5px 21px -5px #grey!important;">
               <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="#"><img
                              src="<?php echo base_url('assets/auth/images/bg-repo.jpg') ?>"
                              style="width: 120px;height: 50px; margin-left: 50px;" /></a>
                    <!-- <a class="navbar-brand brand-logo-mini" href="#"><img
                              src="assets/template_sky/template/images/logo-mini.svg" /></a> -->

               </div>
               <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                         data-toggle="minimize">
                         <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                         <li class="nav-item dropdown">
                              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                   data-toggle="dropdown">
                                   <i class="icon-bell mx-0"></i>
                                   <span class="count"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                   aria-labelledby="notificationDropdown">
                                   <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-success">
                                                  <i class="ti-info-alt mx-0"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                             <p class="font-weight-light small-text mb-0 text-muted">
                                                  Just now
                                             </p>
                                        </div>
                                   </a>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-warning">
                                                  <i class="ti-settings mx-0"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <h6 class="preview-subject font-weight-normal">Settings</h6>
                                             <p class="font-weight-light small-text mb-0 text-muted">
                                                  Private message
                                             </p>
                                        </div>
                                   </a>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-info">
                                                  <i class="ti-user mx-0"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <h6 class="preview-subject font-weight-normal">New user registration
                                             </h6>
                                             <p class="font-weight-light small-text mb-0 text-muted">
                                                  2 days ago
                                             </p>
                                        </div>
                                   </a>
                              </div>
                         </li>
                         <li class="nav-item nav-profile dropdown">
                              <div class="u-text">
                                   <h5 id="profileDropdown" style="margin-top: 10px;height: 30px;"
                                        class="btn btn-xs btn-primary btn-sm">
                                        <?php echo $user->user_namalengkap;?>
                                   </h5>
                              </div>
                              <a style="margin-left: 10px;" class="nav-link dropdown-toggle" href="#"
                                   data-toggle="dropdown" id="profileDropdown">
                                   <img style="width: 30px;height: 30px;"
                                        src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                        alt="profile" />
                              </a>

                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                   aria-labelledby="profileDropdown" style="width: 250px;">
                                   <a class="dropdown-item">
                                        <img style="width: 40px;height: 40px;margin-right: 10px;"
                                             src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                             alt="profile" class="avatar-img rounded" />
                                        <?php echo $user->user_namalengkap;?>
                                   </a>
                                   <a href="<?php echo base_url('profil/view'); ?>" class="dropdown-item">
                                        <i class="fas fa-image text-primary"></i>
                                        Lihat Profil
                                   </a>
                                   <a href="<?php echo base_url('profil'); ?>" class="dropdown-item">
                                        <i class="ti-settings text-primary"></i>
                                        Edit Profil
                                   </a>
                                   <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
                                        <i class="ti-power-off text-primary"></i>
                                        Logout
                                   </a>
                              </div>
                         </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                         data-toggle="offcanvas">
                         <span class="icon-menu"></span>
                    </button>
               </div>
               <!-- <div class="popup">
                    <div class="popup-content">
                         <h3 style="float: right;margin-top: 15px;margin-right: 20px;">x</h3>
                         <h4>Informasi Sistem!</h4><br />

                         <p style="text-align: justify;">Dalam rangka untuk pengembangan sistem kedepannya, mohon untuk
                              pengguna
                              sistem bisa memberikan ulasan pada
                              kuesioner berikut ini, isi dengan jujur selama anda menggunakan sistem tersebut. Jika ada
                              kendala sampaikan dalam kolom komentar. Terimakasih.
                         </p>
                         <br />
                         <div style="overflow-x: auto;">
                              <p>Link Kuesioner :<br />
                                   <a style="text-align: justify;"
                                        href="https://localhost/web_skripsi/kuesioner/index/VUpCaWQvTEdhWGNWRGh6YUxWdUlIZw">Klik
                                        Link Kuesioner</a>
                              </p>
                         </div>
                         <br />

                    </div>
               </div> -->
          </nav>
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
               <!-- partial:partials/_settings-panel.html -->

               <!-- partial -->
               <!-- partial:partials/_sidebar.html -->

               <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">

                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('dasbor'); ?>">
                                   <i class="fas fa-home menu-icon"></i>
                                   <span class="menu-title">Dashboard</span>
                              </a>

                         </li>
                         <!-- <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('profil'); ?>">
                                   <i class="fas fa-book menu-icon"></i>
                                   <span class="menu-title">Perkuliahan</span>
                              </a>
                         </li> -->
                    </ul>
               </nav>

               <!-- partial -->
               <div class="main-panel">

                    <div class="content-wrapper">

                         <!-- ============================================================== -->
                         <!-- Start Page Content here -->
                         <!-- ============================================================== -->

                         <?php $this->load->view($view); ?>

                         <!-- ============================================================== -->
                         <!-- End Page content -->
                         <!-- ============================================================== -->

                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                         <div class="d-sm-flex justify-content-center justify-content-sm-between">
                              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright
                                   ©
                                   2022. Moh. Fiqih |
                                   <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">| Tugas
                                        Akhir Teknik Informatika</span>
                         </div>
                    </footer>
                    <!-- partial -->
               </div>
               <!-- main-panel ends -->
          </div>

          <!-- page-body-wrapper ends -->
     </div>
     <?php else: ?>
     <div class="container-scroller">
          <!-- partial:partials/_navbar.html -->
          <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row "
               style="box-shadow: 0px 5px 21px -5px #grey!important;">
               <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="#"><img
                              src="<?php echo base_url('assets/auth/images/bg-repo.jpg') ?>"
                              style="width: 120px;height: 50px; margin-left: 50px;" /></a>
                    <!-- <a class="navbar-brand brand-logo-mini" href="#"><img
                              src="assets/template_sky/template/images/logo-mini.svg" /></a> -->

               </div>
               <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                         data-toggle="minimize">
                         <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                         <li class="nav-item dropdown">
                              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                   data-toggle="dropdown">
                                   <i class="icon-bell mx-0"></i>
                                   <span class="count"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                   aria-labelledby="notificationDropdown">
                                   <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-success">
                                                  <i class="ti-info-alt mx-0"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                             <p class="font-weight-light small-text mb-0 text-muted">
                                                  Just now
                                             </p>
                                        </div>
                                   </a>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-warning">
                                                  <i class="ti-settings mx-0"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <h6 class="preview-subject font-weight-normal">Settings</h6>
                                             <p class="font-weight-light small-text mb-0 text-muted">
                                                  Private message
                                             </p>
                                        </div>
                                   </a>
                                   <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                             <div class="preview-icon bg-info">
                                                  <i class="ti-user mx-0"></i>
                                             </div>
                                        </div>
                                        <div class="preview-item-content">
                                             <h6 class="preview-subject font-weight-normal">New user registration
                                             </h6>
                                             <p class="font-weight-light small-text mb-0 text-muted">
                                                  2 days ago
                                             </p>
                                        </div>
                                   </a>
                              </div>
                         </li>
                         <li class="nav-item nav-profile dropdown">
                              <div class="u-text">

                                   <h5 id="profileDropdown" style="margin-top: 10px;height: 30px;"
                                        class="btn btn-xs btn-primary btn-sm">
                                        <?php echo $user->user_namalengkap;?>
                                   </h5>

                              </div>
                              <a style="margin-left: 10px;" class="nav-link dropdown-toggle" href="#"
                                   data-toggle="dropdown" id="profileDropdown">
                                   <img style="width: 30px;height: 30px;"
                                        src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                        alt="profile" />
                              </a>

                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                   aria-labelledby="profileDropdown" style="width: 250px;">
                                   <!-- <a class="dropdown-item">
                                        <div class="row">
                                             <div class="col-md-4">
                                                  <img style="margin-left: 20px;margin-top: 10px;width: 60px;height: 60px;"
                                                       src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                                       alt="profile" class="avatar-img rounded" />
                                             </div>
                                             <div class="col-md-8">
                                                  <div class="u-text" style="margin-top: 10px;">
                                                       <p><?php echo $user->user_namalengkap;?></p>
                                                       <p class="text-muted"><?php echo $user->user_namalengkap;?>
                                                       </p><a href="<?php echo base_url('profil/view'); ?>"
                                                            class="btn btn-xs btn-primary btn-sm">View
                                                            Profile</a>
                                                  </div>
                                             </div>
                                        </div>
                                   </a> -->
                                   <!-- <a class="dropdown-item">
                                        <p><?php echo $user->user_namalengkap;?></p>
                                        <a style="margin-left: 20px;" href="<?php echo base_url('profil/view'); ?>"
                                             class="btn btn-xs btn-primary btn-sm">View
                                             Profile</a>
                                   </a><br /> -->
                                   <a class="dropdown-item">
                                        <img style="width: 40px;height: 40px;margin-right: 10px;"
                                             src="<?php echo base_url().'assets/images/'.$user->user_foto;?>"
                                             alt="profile" class="avatar-img rounded" />
                                        <?php echo $user->user_namalengkap;?>
                                   </a>
                                   <a href="<?php echo base_url('profil/view'); ?>" class="dropdown-item">
                                        <i class="fas fa-image text-primary"></i>
                                        Lihat Profil
                                   </a>
                                   <a href="<?php echo base_url('profil'); ?>" class="dropdown-item">
                                        <i class="ti-settings text-primary"></i>
                                        Edit Profil
                                   </a>
                                   <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
                                        <i class="ti-power-off text-primary"></i>
                                        Logout
                                   </a>
                              </div>
                         </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                         data-toggle="offcanvas">
                         <span class="icon-menu"></span>
                    </button>
               </div>
          </nav>
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
               <!-- partial:partials/_settings-panel.html -->
               <div class="theme-setting-wrapper">
                    <div id="settings-trigger"><i class="ti-settings"></i></div>
                    <div id="theme-settings" class="settings-panel">
                         <i class="settings-close ti-close"></i>
                         <p class="settings-heading">SIDEBAR SKINS</p>
                         <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                              <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                         </div>
                         <div class="sidebar-bg-options" id="sidebar-dark-theme">
                              <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                         </div>
                         <div class="sidebar-bg-options" id="sidebar-success-theme">
                              <div class="img-ss rounded-circle bg-success border mr-3"></div>Green
                         </div>
                         <div class="sidebar-bg-options" id="sidebar-danger-theme">
                              <div class="img-ss rounded-circle bg-danger border mr-3"></div>Red
                         </div>
                         <div class="sidebar-bg-options" id="sidebar-default-theme">
                              <div class="img-ss rounded-circle bg-default border mr-3"></div>White
                         </div>
                         <div class="sidebar-bg-options" id="sidebar-info-theme">
                              <div class="img-ss rounded-circle bg-info border mr-3"></div>Blue
                         </div>
                         <p class="settings-heading mt-2">HEADER SKINS</p>
                         <div class="color-tiles mx-0 px-4">
                              <div class="tiles success"></div>
                              <div class="tiles warning"></div>
                              <div class="tiles danger"></div>
                              <div class="tiles info"></div>
                              <div class="tiles dark"></div>
                              <div class="tiles default"></div>
                              <div class="tiles secondary"></div>
                              <!-- <div class="tiles default"></div> -->
                         </div>
                    </div>
               </div>
               <div id="right-sidebar" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                         <li class="nav-item">
                              <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                                   aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                                   aria-controls="chats-section">CHATS</a>
                         </li>
                    </ul>
                    <div class="tab-content" id="setting-content">
                         <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                              aria-labelledby="todo-section">
                              <div class="add-items d-flex px-3 mb-0">
                                   <form class="form w-100">
                                        <div class="form-group d-flex">
                                             <input type="text" class="form-control todo-list-input"
                                                  placeholder="Add To-do">
                                             <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                                  id="add-task">Add</button>
                                        </div>
                                   </form>
                              </div>
                              <div class="list-wrapper px-3">
                                   <ul class="d-flex flex-column-reverse todo-list">
                                        <li>
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="checkbox" type="checkbox">
                                                       Team review meeting at 3.00 PM
                                                  </label>
                                             </div>
                                             <i class="remove ti-close"></i>
                                        </li>
                                        <li>
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="checkbox" type="checkbox">
                                                       Prepare for presentation
                                                  </label>
                                             </div>
                                             <i class="remove ti-close"></i>
                                        </li>
                                        <li>
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="checkbox" type="checkbox">
                                                       Resolve all the low priority tickets due today
                                                  </label>
                                             </div>
                                             <i class="remove ti-close"></i>
                                        </li>
                                        <li class="completed">
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="checkbox" type="checkbox" checked>
                                                       Schedule meeting for next week
                                                  </label>
                                             </div>
                                             <i class="remove ti-close"></i>
                                        </li>
                                        <li class="completed">
                                             <div class="form-check">
                                                  <label class="form-check-label">
                                                       <input class="checkbox" type="checkbox" checked>
                                                       Project review
                                                  </label>
                                             </div>
                                             <i class="remove ti-close"></i>
                                        </li>
                                   </ul>
                              </div>
                              <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                              <div class="events pt-4 px-3">
                                   <div class="wrapper d-flex mb-2">
                                        <i class="ti-control-record text-primary mr-2"></i>
                                        <span>Feb 11 2018</span>
                                   </div>
                                   <p class="mb-0 font-weight-thin text-gray">Creating component page build a js
                                   </p>
                                   <p class="text-gray mb-0">The total number of sessions</p>
                              </div>
                              <div class="events pt-4 px-3">
                                   <div class="wrapper d-flex mb-2">
                                        <i class="ti-control-record text-primary mr-2"></i>
                                        <span>Feb 7 2018</span>
                                   </div>
                                   <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                                   <p class="text-gray mb-0 ">Call Sarah Graves</p>
                              </div>
                         </div>
                         <!-- To do section tab ends -->
                         <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                              <div class="d-flex align-items-center justify-content-between border-bottom">
                                   <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">
                                        Friends
                                   </p>
                                   <small
                                        class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                                        All</small>
                              </div>
                              <ul class="chat-list">
                                   <li class="list active">
                                        <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span
                                                  class="online"></span></div>
                                        <div class="info">
                                             <p>Thomas Douglas</p>
                                             <p>Available</p>
                                        </div>
                                        <small class="text-muted my-auto">19 min</small>
                                   </li>
                                   <li class="list">
                                        <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span
                                                  class="offline"></span></div>
                                        <div class="info">
                                             <div class="wrapper d-flex">
                                                  <p>Catherine</p>
                                             </div>
                                             <p>Away</p>
                                        </div>
                                        <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                        <small class="text-muted my-auto">23 min</small>
                                   </li>
                                   <li class="list">
                                        <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span
                                                  class="online"></span></div>
                                        <div class="info">
                                             <p>Daniel Russell</p>
                                             <p>Available</p>
                                        </div>
                                        <small class="text-muted my-auto">14 min</small>
                                   </li>
                                   <li class="list">
                                        <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span
                                                  class="offline"></span></div>
                                        <div class="info">
                                             <p>James Richardson</p>
                                             <p>Away</p>
                                        </div>
                                        <small class="text-muted my-auto">2 min</small>
                                   </li>
                                   <li class="list">
                                        <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span
                                                  class="online"></span></div>
                                        <div class="info">
                                             <p>Madeline Kennedy</p>
                                             <p>Available</p>
                                        </div>
                                        <small class="text-muted my-auto">5 min</small>
                                   </li>
                                   <li class="list">
                                        <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span
                                                  class="online"></span></div>
                                        <div class="info">
                                             <p>Sarah Graves</p>
                                             <p>Available</p>
                                        </div>
                                        <small class="text-muted my-auto">47 min</small>
                                   </li>
                              </ul>
                         </div>
                         <!-- chat tab ends -->
                    </div>
               </div>
               <!-- partial -->
               <!-- partial:partials/_sidebar.html -->

               <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">

                         <li class="nav-item active">
                              <a class="nav-link active" href="<?php echo base_url('dasbor'); ?>">
                                   <i class="fas fa-home menu-icon"></i>
                                   <span class="menu-title">Dashboard</span>
                              </a>
                         </li>
                         <li class="nav-item" style="margin-left: 17px;margin-top: 20px;">
                              <span class="menu-title" style="color: grey;">Menu Data</span>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                                   aria-controls="ui-basic">
                                   <i class="fas fa-book menu-icon"></i>
                                   <span class="menu-title">Bank Pertanyaan</span>
                                   <i class="menu-arrow"></i>
                              </a>
                              <div class="collapse" id="ui-basic">
                                   <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('bankpertanyaan') ?>">Paket
                                                  Kuesioner</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('link_kuesioner') ?>">Link
                                                  Kuesioner</a>
                                        </li>
                                        <!-- <li class="nav-item"> <a class="nav-link"
                                                  href="pages/ui-features/typography.html">Typography</a></li> -->
                                   </ul>
                              </div>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false"
                                   aria-controls="charts">
                                   <i class="fas fa-calendar menu-icon"></i>
                                   <span class="menu-title">Report Kuesioner</span>
                                   <i class="menu-arrow"></i>
                              </a>
                              <div class="collapse" id="charts">
                                   <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('report') ?>">Data Responden</a></li>
                                        <li class="nav-item"> <a class="nav-link"
                                                  href="<?php echo base_url('report/all') ?>">Result
                                                  Komentar</a></li>
                                        <!-- <li class="nav-item"> <a class="nav-link" href="#">Chart Kuesioner</a></li> -->
                                   </ul>
                              </div>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('diagram'); ?>">
                                   <i class="fas fa-chart-line menu-icon"></i>
                                   <span class="menu-title">Chart</span>
                              </a>
                         </li>
                    </ul>
               </nav>

               <!-- partial -->
               <div class="main-panel">
                    <div class="content-wrapper">

                         <!-- ============================================================== -->
                         <!-- Start Page Content here -->
                         <!-- ============================================================== -->

                         <?php $this->load->view($view); ?>

                         <!-- ============================================================== -->
                         <!-- End Page content -->
                         <!-- ============================================================== -->

                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                         <div class="d-sm-flex justify-content-center justify-content-sm-between">
                              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright
                                   ©
                                   2022. Moh. Fiqih |
                                   <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">| Tugas
                                        Akhir Teknik Informatika</span>
                         </div>
                    </footer>
                    <!-- partial -->
               </div>
               <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
     </div>
     <?php endif; ?>
     <!-- container-scroller -->

     <!-- plugins:js -->
     <script src="<?php echo base_url('assets/template_sky/template/vendors/js/vendor.bundle.base.js'); ?>">
     </script>
     <!-- endinject -->
     <!-- Plugin js for this page -->
     <script src="<?php echo base_url('assets/template_sky/template/vendors/chart.js/Chart.min.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_sky/template/vendors/datatables.net/jquery.dataTables.js'); ?>">
     </script>
     <script
          src="<?php echo base_url('assets/template_sky/template/vendors/datatables.net-bs4/dataTables.bootstrap4.js'); ?>">
     </script>
     <script src="<?php echo base_url('assets/template_sky/template/js/dataTables.select.min.js'); ?>"></script>

     <!-- End plugin js for this page -->
     <!-- inject:js -->
     <script src="<?php echo base_url('assets/template_sky/template/js/off-canvas.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_sky/template/js/hoverable-collapse.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_sky/template/js/template.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_sky/template/js/settings.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_sky/template/js/todolist.js'); ?>"></script>
     <!-- endinject -->
     <!-- Custom js for this page-->
     <script src="<?php echo base_url('assets/template_sky/template/js/dashboard.js'); ?>"></script>
     <script src="<?php echo base_url('assets/template_sky/template/js/Chart.roundedBarCharts.js'); ?>"></script>
     <!-- End custom js for this page-->
     <!-- Datatables -->
     <script src="assets/template_new/assets/js/plugin/datatables/datatables.min.js"></script>

     <script src="https://cdn.tiny.cloud/1/po9r5rtyigi9k6233qld3yekxkqfn2haky39k30gv8chhdma/tinymce/5/tinymce.min.js"
          referrerpolicy="origin"></script>
     <script>
     tinymce.init({
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
          toolbar_mode: 'floating',
          forced_root_block: false,
          forced_p_block: false,
     });
     </script>

     <!-- <script type="text/javascript">
     $('.clockpicker').clockpicker();
     </script> -->

     <script>
     $(document).ready(function() {
          $('#myTable').DataTable();
     });
     </script>

     <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"> -->
     <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

     <!-- <script>
     $(function() {
          $("#datepicker").datepicker();
     });
     </script> -->


     <script>
     var dt = new Date();
     document.getElementById("tanggal").innerHTML = dt.toLocaleDateString();
     </script>

     <script type="text/javascript">
     window.onload = function() {
          jam();
     }

     function jam() {
          var e = document.getElementById('jam'),
               d = new Date(),
               h, m, s;
          h = d.getHours();
          m = set(d.getMinutes());
          s = set(d.getSeconds());

          e.innerHTML = h + ':' + m + ':' + s;

          setTimeout('jam()', 1000);
     }

     function set(e) {
          e = e < 10 ? '0' + e : e;
          return e;
     }
     </script>

     <script>
     $(document).ready(function() {
          $('#cari').DataTable({
               dom: '<"top"<"pull-left"f><"pull-left"l>>rt<"bottom"<"pull-left"i><"pull-left"p>>',
               paging: false,
               ordering: false,
               info: false,
          });
     });
     </script>
     <!-- Sweet Alert -->
     <script type="text/javascript">
     function tambah() {
          swal({
               title: "Berhasil!",
               text: "Data berhasil ditambahkan!",
               icon: "success",
               button: true,
               timer: 5000
          });
     }
     </script>

     <script type="text/javascript">
     function hapus() {
          swal({
               title: "Berhasil!",
               text: "Data berhasil dihapus!",
               icon: "success",
               button: true,
               timer: 5000
          });
     }
     </script>

     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <!-- End Sweet Alert -->

     <!-- Data Tabel -->
     <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
     <script src="https://code.highcharts.com/highcharts.js"></script>

     <!-- jquery -->
     <script src="https://code.jquery.com/jquery-3.6.4.js"
          integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap4.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>


     <script type="text/javascript">
     Highcharts.chart('pie', {
          chart: {
               plotBackgroundColor: null,
               plotBorderWidth: null,
               plotShadow: false,
               type: 'pie'
          },
          title: {
               text: ''
          },
          tooltip: {
               pointFormat: '{series.name}: <b>{point.y:1f} Responden</b>'
          },
          accessibility: {
               point: {
                    valueSuffix: '%'
               }
          },
          plotOptions: {
               pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                         enabled: true,
                         format: '<b>{point.name}</b>: {point.y:1f} '
                    }
               }
          },
          series: [{
               name: 'Total',
               colorByPoint: true,
               data: [
                    <?php
                         if(is_array($data_pie)){
                         foreach ($data_pie as $d) {
                              $seb = $d->sebagai;
                              $jml = $d->Jumlah;
                              echo "{name: '$seb',y: $jml},";
                         }
                    }  
                    ?>
               ]
          }]
     });
     </script>
     <!-- End Pie Responden -->

     <script type="text/javascript">
     Highcharts.chart('manajerial', {
          chart: {
               plotBackgroundColor: null,
               plotBorderWidth: null,
               plotShadow: false,
               type: 'pie'
          },
          title: {
               text: ''
          },
          tooltip: {
               pointFormat: '{series.name}: <b>{point.y:1f} Data Manajerial</b>'
          },
          accessibility: {
               point: {
                    valueSuffix: '%'
               }
          },
          plotOptions: {
               pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                         enabled: true,
                         format: '<b>{point.name}</b>: {point.y:1f} '
                    }
               }
          },
          series: [{
               name: 'Total',
               colorByPoint: true,
               data: [
                    <?php
                         if(is_array($data_manajerial)){
                         foreach ($data_manajerial as $d) {
                              $seb = $d->nama_apl;
                              $jml = $d->Jumlah;
                              echo "{name: '$seb',y: $jml},";
                         }
                    }  
                    ?>
               ]
          }]
     });
     </script>
     <!-- End Pie Responden -->


     <!-- Bawah Skipp  -->

     <!-- Kesimpulan -->
     <!-- <script type="text/javascript">
     // Create the chart
     Highcharts.chart('kesimpulan', {
          chart: {
               type: 'column'
          },
          title: {
               align: 'center',
               text: ''
          },
          subtitle: {
               align: 'left',
               text: ''
          },
          accessibility: {
               announceNewData: {
                    enabled: true
               }
          },
          xAxis: {
               type: 'category'
          },
          yAxis: {
               title: {
                    text: 'Persentase'
               }

          },
          legend: {
               enabled: false
          },
          plotOptions: {
               series: {
                    borderWidth: 0,
                    dataLabels: {
                         enabled: true,
                         format: '{point.y:1f} %'
                    }
               }
          },

          tooltip: {
               headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
               pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f} Persen</b><br/>'
          },

          series: [{
               name: "Persentase",
               colorByPoint: true,
               data: [
                    <?php
                         if(is_array($data_paket)){
                         foreach ($data_paket as $d) {
                              $id = $d->nama_paket;
                              
                              $total_id		= "id_paket_jawaban='" . $d->id_paket . "' ";
                              $tertinggi    = $this->M_dasbor->total_soal($total_id)*5;
                              $terendah     = $this->M_dasbor->total_soal($total_id)*1;

                              $jml = (($this->M_dasbor->total_ss_p($total_id) + $this->M_dasbor->total_ss_n($total_id))*5)+(($this->M_dasbor->total_s_p($total_id) + $this->M_dasbor->total_s_n($total_id))*4)+(($this->M_dasbor->total_c_p($total_id) + $this->M_dasbor->total_c_n($total_id))*3)+(($this->M_dasbor->total_ts_p($total_id) + $this->M_dasbor->total_ts_n($total_id))*2)+(($this->M_dasbor->total_sts_p($total_id) + $this->M_dasbor->total_sts_n($total_id))*1);

                              // $tertinggi = $this->M_dasbor->total_soal($total_soal)*5;
                              
                              $nilai = substr(($jml / $tertinggi) * (100), 0, 5);
                              
                              echo "{name: '$id',y: $nilai},";
                         }
                    }  
                    ?>
               ]
          }],
          drilldown: {
               breadcrumbs: {
                    position: {
                         align: 'right'
                    }
               },
               series: [{
                    name: "Chrome",
                    id: "Chrome",
                    data: [
                         [
                              "v65.0",
                              0.1
                         ]
                    ]
               }, ]
          }
     });
     </script> -->
     <!-- End Kesimpulan -->

     <!-- Total Responden -->
     <script type="text/javascript">
     // Create the chart
     Highcharts.chart('responden', {
          chart: {
               type: 'column'
          },
          title: {
               align: 'center',
               text: ''
          },
          subtitle: {
               align: 'left',
               text: ''
          },
          accessibility: {
               announceNewData: {
                    enabled: true
               }
          },
          xAxis: {
               type: 'category'
          },
          yAxis: {
               title: {
                    text: 'Total Responden'
               }

          },
          legend: {
               enabled: false
          },
          plotOptions: {
               series: {
                    borderWidth: 0,
                    dataLabels: {
                         enabled: true,
                         format: '{point.y:1f}'
                    }
               }
          },

          tooltip: {
               headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
               pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f} Responden</b><br/>'
          },

          series: [{
               name: "Persentase",
               colorByPoint: true,
               data: [
                    <?php
                         if(is_array($data_responden)){
                         foreach ($data_responden as $d) {
                              $id = $d->nama_paket;
                              
                              $total_id		= "id_paket='" . $d->id_paket . "' ";
                              $total_responden = $this->M_dasbor->total_responden($total_id);

                              echo "{name: '$id',y: $total_responden},";
                         }
                    }  
                    ?>
               ]
          }],
          drilldown: {
               breadcrumbs: {
                    position: {
                         align: 'right'
                    }
               },
               series: [{
                    name: "Chrome",
                    id: "Chrome",
                    data: [
                         [
                              "v65.0",
                              0.1
                         ]
                    ]
               }, ]
          }
     });
     </script>

     <script>
     const popup = document.querySelector('.popup');
     const x = document.querySelector('.popup-content h3')

     window.addEventListener('load', () => {
          popup.classList.add('showPopup');
          popup.childNodes[1].classList.add('showPopup');
     })
     x.addEventListener('click', () => {
          popup.classList.remove('showPopup');
          popup.childNodes[1].classList.remove('showPopup');
     })
     </script>
     <!-- End Total Responden -->

     <script>
     $(document).ready(function() {
          var table = $('#example').DataTable({
               lengthChange: false,
               buttons: ['copy', 'excel', 'pdf', 'colvis']
          });

          table.buttons().container()
               .appendTo('#example_wrapper .col-md-6:eq(0)');
     });
     </script>

     <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

     <script type="text/javascript">
     $(function() {
          $('button').click(function() {
               var jawaban = $('#inputJawaban').val();
               var paket = $('#inputPaket').val();
               var identitas = $('#inputIdentitas').val();
               var nama = $('#inputNama').val();
               var prodi = $('#inputProdi').val();
               var sebagai = $('#inputSebagai').val();
               var gender = $('#inputGender').val();
               // var pass = $('#inputPassword').val();
               $.ajax({
                    url: 'http://127.0.0.1:5000/testApi',
                    data: $('form').serialize(),
                    type: 'POST',
                    success: function(response) {
                         console.log(response);
                    },
                    error: function(error) {
                         console.log(error);
                    }
               });
          });
     });
     </script>

     <!-- <script type="text/javascript">
     $(document).ready(function(e) {
          $('button').on('click', function() {
               var form_data = new FormData();
               var jawaban = form_data["jawaban"];

               form_data.append(
                    'jawaban': $('#inputJawaban').prop('json')[0]
               );

               // $('#loading').html(
               //      '<div style="color: blue;">Sedang memproses...</div>');

               $.ajax({
                    type: 'POST',
                    url: 'http://127.0.0.1:5000/testApi', // point to server-side URL
                    data: $('form_data').serialize(),
                    // dataType: 'json', // what to expect back from server
                    // cache: false,
                    // contentType: false,
                    // processData: false,


                    success: function(response) {
                         console.log(response);
                    },
                    error: function(error) {
                         console.log(error);
                    }

                    // success: function(response) { // display success response
                    //      $('#loading').hide();
                    //      $('#jawaban').html(response["Data Jawaban"]);
                    //      $('#klasifikasi').html(response["Hasil Klasifikasi"]);
                    //      $('#berhasil').html(
                    //           '<div style="color: green;">Data jawaban berhasil masuk!</div>'
                    //      );
                    // },
                    // error: function(response) {
                    //      $('#loading').hide();
                    //      $('#msg').html(
                    //           '<div style="color: red;">Gambar gagal diproses, cek kembali!</div>'
                    //      ); // display error response
                    // }
               });
          });
     });
     </script> -->
</body>

</html>