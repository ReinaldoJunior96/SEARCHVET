<?php 
@ob_start();
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
header('location:login.php');
}
$logado = $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin - VETMAPS </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/font-awesome.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="images/favicon.png" /> -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php">
          <!-- <img src="../images/logomarca.png" alt="logo" /> --> <!-- logomarca -->
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.php">
          <img src="../images/iconeVM.png" alt="logo" /><!-- logomini -->
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <!-- <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link">Schedule
              <span class="badge badge-primary ml-1">New</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Reports</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
          </li>
        </ul> -->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <!-- <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">olá, Reinaldo Júnior</span>
              <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
            </a> -->
           <!--  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
                <a class="dropdown-item mt-2">
                  Manage Accounts
                </a>
                <a class="dropdown-item">
                  Change Password
                </a>
                <a class="dropdown-item">
                  Check Inbox
                </a>
              <a class="dropdown-item" href="#">
                Sair
              </a>
            </div> -->
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/perfil.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Reinaldo Júnior</p>
                  <div>
                    <span class="status-indicator online"></span>
                    <small class="designation text-muted">Online</small>
                    
                  </div>
                </div>
              </div>
              <a href="../Adm/Encerrar.php">
                <button class="btn btn-danger btn-block">Sair
                  <i class="fa fa-power-off "></i>
                </button>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fa fa-home icon-sm"></i>
              <span class="menu-title"> &emsp;Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Clinicas.php">
              <i class="fa fa-institution icon-sm"></i>
              <span class="menu-title">&emsp;Clínicas</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Clínicas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="Cadastradas.php">Cadastradas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Liberar Acesso</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Cancelar Acesso</a>
                </li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-institution icon-sm"></i>
              <span class="menu-title">&emsp;Clínicas</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li>
              </ul>
            </div>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <!-- <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Like what you see? Check out our premium version for more.</p>
                <a class="btn ml-auto download-button d-none d-md-block" href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank">Download Free Version</a>
                <a class="btn purchase-button mt-4 mt-md-0" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Upgrade To Pro</a>
                <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
              </span>
            </div> -->
          </div>
          <div class="row">
            <div class="col-xl-6 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class=" fa fa-money icon-lg text-primary"></i>
                    </div>
                    <div class="float-right">
                      <div class="fluid-container my-1">
                        <?php  
                        require_once('../ClassesDAO/AdmDAO.php');
                        $contarValor = new AdmDAO();
                        $contarValor->Receber();
                        ?>
                        
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Valor recebido ao mês
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="fa fa-group text-primary icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <div class="fluid-container my-1">
                        
                        <?php  
                        require_once('../ClassesDAO/AdmDAO.php');
                        $contarValor = new AdmDAO();
                        //$contarValor->ContarClinicas();
                        echo "<h3 class='font-weight-medium text-right mb-0'>".$contarValor->ContarClinicas()."</h3>";
                        ?>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i>Total de clínicas cadastradas
                  </p>
                </div>
              </div>
            </div>
            <!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Sales</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">5693</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
                  </p>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Employees</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">246</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
                  </p>
                </div>
              </div>
            </div> -->
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-primary mb-5">Metas 2019</h2>
                  
                  <div class="wrapper">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Conseguir 500 Clínicas</p>
                      <?php 
                      require_once('../ClassesDAO/AdmDAO.php');
                      $Metas = new AdmDAO();
                      echo "<p class='mb-2 text-primary'>".$Metas->Metas()."</p>";
                      ?>                      
                    </div>
                    <div class="progress">
                      <?php 
                      echo "<div class='progress-bar bg-primary progress-bar-striped progress-bar-animated' role='progressbar' style='width: ".$Metas->Metas()."' aria-valuenow=".$Metas->Metas()."
                      aria-valuemin='0' aria-valuemax='100'></div>";
                      ?>
                      
                    </div>
                  </div>
                  <!-- <div class="wrapper mt-4">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Visits</p>
                      <p class="mb-2 text-success">26%</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 26%" aria-valuenow="26"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-primary mb-5">Cadatros Recentes</h2>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Instituição
                          </th>
                          <th>
                            CNPJ/CPF
                          </th>
                          <th>
                            E-mail
                          </th>
                          <th>
                            Status Pagamento
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $Recente = new AdmDAO();
                          $Recente->CadastroRecente();
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
             <!-- <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title text-primary mb-5">Metas 2019</h2>
                  <div class="fluid-container">
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face1.jpg" alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">James :</p>
                          <p class="text-primary mr-1 mb-0">[#23047]</p>
                          <p class="mb-0 ellipsis">Donec rutrum congue leo eget malesuada.</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim
                          vivamus.
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Last responded :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">3 hours ago</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                              <a class="dropdown-item" href="#">
                                <i class="fa fa-history fa-fw"></i>Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                  <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                  <a class="dropdown-item" href="#">
                                    <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                              <div class="col-md-1">
                                <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face2.jpg" alt="profile image">
                              </div>
                              <div class="ticket-details col-md-9">
                                <div class="d-flex">
                                  <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Stella :</p>
                                  <p class="text-primary mr-1 mb-0">[#23135]</p>
                                  <p class="mb-0 ellipsis">Curabitur aliquet quam id dui posuere blandit.</p>
                                </div>
                                <p class="text-gray ellipsis mb-2">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Curabitur non nulla sit amet
                                  nisl.
                                </p>
                                <div class="row text-gray d-md-flex d-none">
                                  <div class="col-4 d-flex">
                                    <small class="mb-0 mr-2 text-muted">Last responded :</small>
                                    <small class="Last-responded mr-2 mb-0 text-muted">3 hours ago</small>
                                  </div>
                                  <div class="col-4 d-flex">
                                    <small class="mb-0 mr-2 text-muted">Due in :</small>
                                    <small class="Last-responded mr-2 mb-0 text-muted">2 Days</small>
                                  </div>
                                </div>
                              </div>
                              <div class="ticket-actions col-md-2">
                                <div class="btn-group dropdown">
                                  <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    teste
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                      <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                      <a class="dropdown-item" href="#">
                                        <i class="fa fa-history fa-fw"></i>Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">
                                          <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                          <a class="dropdown-item" href="#">
                                            <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row ticket-card mt-3">
                                      <div class="col-md-1">
                                        <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face3.jpg" alt="profile image">
                                      </div>
                                      <div class="ticket-details col-md-9">
                                        <div class="d-flex">
                                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">John Doe :</p>
                                          <p class="text-primary mr-1 mb-0">[#23246]</p>
                                          <p class="mb-0 ellipsis">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                                        </div>
                                        <p class="text-gray ellipsis mb-2">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Lorem ipsum dolor sit amet.</p>
                                        <div class="row text-gray d-md-flex d-none">
                                          <div class="col-4 d-flex">
                                            <small class="mb-0 mr-2 text-muted">Last responded :</small>
                                            <small class="Last-responded mr-2 mb-0 text-muted">3 hours ago</small>
                                          </div>
                                          <div class="col-4 d-flex">
                                            <small class="mb-0 mr-2 text-muted">Due in :</small>
                                            <small class="Last-responded mr-2 mb-0 text-muted">2 Days</small>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="ticket-actions col-md-2">
                                        <div class="btn-group dropdown">
                                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Manage
                                          </button>
                                          <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                              <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                              <a class="dropdown-item" href="#">
                                                <i class="fa fa-history fa-fw"></i>Another action</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">
                                                  <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                                  <a class="dropdown-item" href="#">
                                                    <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div> -->

                                  </div>                                   
                                  <!-- content-wrapper ends -->
                                  <!-- partial:partials/_footer.html -->
                                  <footer class="footer">
                                    <div class="container-fluid clearfix">
                                      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                                        <!-- <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. --> All rights reserved.</span>
                                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                                          <i class="mdi mdi-heart text-danger"></i>
                                          <i>VETMAPS - Rede de Clínicas Veterinárias</i>
                                          <i class="mdi mdi-heart text-danger"></i>
                                        </span>
                                      </div>
                                    </footer>
                                    <!-- partial -->
                                  </div>
                                  <!-- main-panel ends -->
                                </div>
                                <!-- page-body-wrapper ends -->
                              </div>
                              <!-- container-scroller -->

                              <!-- plugins:js -->
                              <script src="vendors/js/vendor.bundle.base.js"></script>
                              <script src="vendors/js/vendor.bundle.addons.js"></script>
                              <!-- endinject -->
                              <!-- Plugin js for this page-->
                              <!-- End plugin js for this page-->
                              <!-- inject:js -->
                              <script src="js/off-canvas.js"></script>
                              <script src="js/misc.js"></script>
                              <!-- endinject -->
                              <!-- Custom js for this page-->
                              <script src="js/dashboard.js"></script>
                              <!-- End custom js for this page-->
                            </body>

                            </html>