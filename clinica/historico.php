<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<?php
require 'conexao.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <?php 
    include 'menuLateralHistorico.html';
  ?> 

    <?php
    // Recebe o termo de pesquisa se existir
    $mes = (isset($_GET['mes'])) ? $_GET['mes'] : '';
    $ano = (isset($_GET['ano'])) ? $_GET['ano'] : '';

    // Verifica se o termo de pesquisa está vazio ou incorreto, se estiver executa uma consulta do mes atual
    if (empty($mes)):
      $mes_escolhido = date('m');
      if($mes_escolhido == 1): $mes_atual = 'Janeiro'; endif;
      if($mes_escolhido == 2): $mes_atual = 'Fevereiro'; endif;
      if($mes_escolhido == 3): $mes_atual = 'Março'; endif;
      if($mes_escolhido == 4): $mes_atual = 'Abril'; endif;
      if($mes_escolhido == 5): $mes_atual = 'Maio'; endif;
      if($mes_escolhido == 6): $mes_atual = 'Junho'; endif;
      if($mes_escolhido == 7): $mes_atual = 'Julho'; endif;
      if($mes_escolhido == 8): $mes_atual = 'Agosto'; endif;
      if($mes_escolhido == 9): $mes_atual = 'Setembro'; endif;
      if($mes_escolhido == 10): $mes_atual = 'Outubro'; endif;
      if($mes_escolhido == 11): $mes_atual = 'Novembro'; endif;
      if($mes_escolhido == 12): $mes_atual = 'Dezembro'; endif;

    else:// Executa uma consulta baseada no termo de pesquisa passado como parâmetro
      $mes_escolhido = $mes;
      if($mes_escolhido == 1): $mes_atual = 'Janeiro'; endif;
      if($mes_escolhido == 2): $mes_atual = 'Fevereiro'; endif;
      if($mes_escolhido == 3): $mes_atual = 'Março'; endif;
      if($mes_escolhido == 4): $mes_atual = 'Abril'; endif;
      if($mes_escolhido == 5): $mes_atual = 'Maio'; endif;
      if($mes_escolhido == 6): $mes_atual = 'Junho'; endif;
      if($mes_escolhido == 7): $mes_atual = 'Julho'; endif;
      if($mes_escolhido == 8): $mes_atual = 'Agosto'; endif;
      if($mes_escolhido == 9): $mes_atual = 'Setembro'; endif;
      if($mes_escolhido == 10): $mes_atual = 'Outubro'; endif;
      if($mes_escolhido == 11): $mes_atual = 'Novembro'; endif;
      if($mes_escolhido == 12): $mes_atual = 'Dezembro'; endif;
      if($mes!=1 || $mes!=2 || $mes!=3 || $mes!=4 || $mes!=5 || $mes!=6 || $mes!=7 || $mes!=8 || $mes!=9 || $mes!=10 || $mes!=11 || $mes!=12): $mes_atual = 'Janeiro'; endif;
    endif;

    // Verifica se o termo de pesquisa está vazio ou incorreto, se estiver executa uma consulta do ano atual
    if (empty($ano)):
      $ano_escolhido = date('Y');
     
    else:// Executa uma consulta baseada no termo de pesquisa passado como parâmetro
      if($ano<1990 || $ano>2050):
       $ano_escolhido = date('Y');
      else:
        $ano_escolhido = $ano;
      endif;
    endif;
    ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            <h1 class="m-0 text-dark">Gasto Total Mês de <?php  echo $mes_atual;?>: 

              <?php
                $conexao = conexao::getInstance();
                $sql = 'SELECT sum(valor) as soma FROM gastos WHERE  MONTH(data)=:mes AND  YEAR(data)=:ano';
                $stm = $conexao->prepare($sql);
                $stm->bindValue(':mes', $mes_escolhido);
                $stm->bindValue(':ano', $ano_escolhido);
                $stm->execute();
                $clientes = $stm->fetchAll(PDO::FETCH_OBJ);
                ?>
                <?php foreach($clientes as $cliente):?>                
                  <td><?=$cliente->soma?></td>
                <?php endforeach;?>
              </h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
    <!-- Main content -->
    <!-- Main content -->

    <form action="historico.php" method="get" id='mes' enctype='multipart/form-data'>
      <section class="content container-fluid">
        <select name="mes" id="mes" class="form-control">
          <option value="" selected>Selecione Mês / Mês Atual</option>
          <option value="1" >Janeiro</option>
          <option value="2" >Fevereiro</option>
          <option value="3" >Março</option>
          <option value="4" >Abril</option>
          <option value="5" >Maio</option>
          <option value="6" >Junho</option>
          <option value="7" >Julho</option>
          <option value="8" >Agosto</option>
          <option value="9" >Setembro</option>
          <option value="10" >Outubro</option>
          <option value="11" >Novembro</option>
          <option value="12" >Dezembro</option>
        </select>
        <div>
          <input type="number" name="ano" class="form-control" value="2019" placeholder="Informe o Ano">
        </div>
      </section>
      <button type="submit" class="form-control" id='botao'>Pesquisar</button>
    </form>
    

      <div class="row">
        <div class="col-md-8">
        <div class="box">
            <div class="box-header">
              <h3 class="m-0 text-dark">Dinheiro recebido no Mês de <?php  echo $mes_atual;?>:
              <?php
                $conexao = conexao::getInstance();
                $sql = 'SELECT sum(valor) as soma FROM events WHERE MONTH(end)=:mes AND YEAR(end)=:ano';
                $stm = $conexao->prepare($sql);
                $stm->bindValue(':mes', $mes_escolhido);
                $stm->bindValue(':ano', $ano_escolhido);
                $stm->execute();
                $clientes = $stm->fetchAll(PDO::FETCH_OBJ);
                ?>
                <?php foreach($clientes as $cliente):?>                
                  <td><?=$cliente->soma?></td>
                <?php endforeach;?>
              </h3>
            </div>

            <?php
              $conexao = conexao::getInstance();
              $sql = 'SELECT start, valor, id_cpf FROM events WHERE MONTH(end)=:mes AND YEAR(end)=:ano';
              $stm = $conexao->prepare($sql);
              $stm->bindValue(':mes', $mes_escolhido);
              $stm->bindValue(':ano', $ano_escolhido);
              $stm->execute();
              $clientes = $stm->fetchAll(PDO::FETCH_OBJ);
            ?>
            <!-- /.box-header -->
           <div class="box-body no-padding">
              <table class="table table-striped">
                <tr class='active'>
                  <th>Data</th>
                  <th>Valor</th>
                  <th>Cpf do Cliente</th>                  
                </tr>
                  <?php foreach($clientes as $cliente):?>
                  <tr>
                    <td><?=$cliente->start?></td>
                    <td><?=$cliente->valor?></td>
                    <td><?=$cliente->id_cpf?></td>
                  </tr> 
                <?php endforeach;?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
        <div class="col-md-4">

          <div class="row">


          </div>

          

        </div>
      </div>
                   
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
