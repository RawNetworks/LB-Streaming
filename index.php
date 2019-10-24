



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon.ico">
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  LB-Streaming | Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


</head>


<?php
include("auth.php");
?>


<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="img/favicon.ico">
          </div>
        </a>
        <a href="index.php" class="simple-text logo-normal">
        LB-Streaming
          <!-- <div class="logo-image-big">
            <img src="assets/img/logo-big.png">
          </div> -->
        </a>
      </div>


      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="index.php">
            <i class="fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="instance.php">
            <i class="fas fa-server"></i>
              <p>Instanz | erstellen</p>
            </a>
          </li>
          <li>
            <a href="instancecon.php">
            <i class="fas fa-server"></i>
              <p>Instanz | Verwaltung</p>
            </a>
          </li>
          <li>
            <a href="djcreate.php">
            <i class="fas fa-robot"></i>
              <p>AutoDJ | erstellen</p>
            </a>
          </li>
          <li>
            <a href="djcon.php">
            <i class="fas fa-robot"></i>
              <p>AutoDJ | Verwaltung</p>
            </a>
          </li>

          <p>___________________________________</p>

          <li>
            <a href="https://www.paypal.me/RawNetworks">
            <i class="fas fa-money-check-alt"></i>
              <p>Donate me</p>
            </a>
          </li>

          <li>
            <a href="https://youtube.com/c/RawNetworksYouTube">
            <i class="fab fa-youtube"></i>
              <p>My YouTube Channel</p>
            </a>
          </li>


          <li class="active-pro">
            <a href="logout.php">
            <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">LB-Streaming | Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->

<script src="https://kit.fontawesome.com/6c7a0e8d6b.js" crossorigin="anonymous"></script>

      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    <i class="fas fa-users"></i>
                    </div>
                  </div>

                  <?php
                include 'inc/sql.php';
                $users_r = mysqli_query($conn, "SELECT * FROM `users`");
                $users = mysqli_num_rows($users_r);

                ?>

                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Users</p>
                      <p class="card-title"><?php echo $users;?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                <i class="fas fa-users"></i> Gesamte Anzahl an Benutzer
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    <i class="fas fa-server"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <?php
                      include 'inc/sql.php';

                      $instances_r = mysqli_query($conn, "SELECT * FROM `shoutcast_instances`");
                      $instances = mysqli_num_rows($instances_r);
                      ?>
                      <p class="card-category">SHOUTcast | Instanzen</p>
                      <p class="card-title"><?php echo $instances;?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                <i class="fas fa-server"></i> Deine gesamten Instanzen
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    <i class="fas fa-play"></i>
                    </div>
                  </div>
                  <?php
                      include 'inc/sql.php';

                      $autodj_r = mysqli_query($conn, "SELECT * FROM `autodj_instances`");
                      $autodj = mysqli_num_rows($autodj_r);
                      ?>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">AutoDJ | Instanzen</p>
                      <p class="card-title"><?php echo $autodj;?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                <i class="fas fa-play"></i> Deine gesamten AutoDJ Instanzen
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    <i class="fas fa-heart"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">RAW Networks</p>
                      <p class="card-title">YouTube
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                <i class="fas fa-check"></i> Join the Community!
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> SHOUTcast  Instanzen</h4>
                <p class="card-category"> Deine SHOUTcast Instanzen im Überblick</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        SHOUTcast | Instance ID
                      </th>
                      <th>
                      SHOUTcast | Instance Name
                      </th>
                      <th>
                        SHOUTcast | Port
                      </th>
                    </thead>
                    <tbody>
                      <?php

                      include 'inc/sql.php';
                      $result = mysqli_query($conn, "SELECT * FROM `shoutcast_instances`");
                      while ($row = mysqli_fetch_assoc($result)) {

                      echo '
                      <tr>
                        <td>
                        ' . $row['id'] . '
                        </td>
                        <td>
                        ' . $row['instance'] . '
                        </td>
                        <td>
                        ' . $row['port'] . '
                        </td>
                      </tr>';

                    }

                      ?>
                    </tbody>
                  </table>
                </div>
              </div>




              <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> AutoDJ | Instanzen</h4>
                <p class="card-category"> Deine AutoDJ Instanzen im Überblick</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        ID
                      </th>
                      <th>
                        Stream Port
                      </th>
                      <th>
                        Stream Passwort
                      </th>
                      <th>
                        Stream Titel
                      </th>
                      <th>
                        Stream URL
                      </th>
                      <th>
                        Musikrichtung
                      </th>
                      <th>
                        Playlist Verzeichnis
                      </th>
                    </thead>
                    <tbody>
                    <?php

include 'inc/sql.php';
$result = mysqli_query($conn, "SELECT * FROM `autodj_instances`");
while ($row = mysqli_fetch_assoc($result)) {

echo '
<tr>
<td>
' . $row['id'] . '
</td>
<td>
' . $row['Stream_Port'] . '
</td>
<td>
' . $row['Stream_Passwort'] . '
</td>
<td>
' . $row['Stream_Titel'] . '
</td>
<td>
' . $row['Stream_URL'] . '
</td>
<td>
' . $row['Musikrichtung'] . '
</td>
<td>
' . $row['playlist'] . '
</td>
</tr>';

}

?>
                    </tbody>
                  </table>
                </div>
              </div>


              
            </div>
          </div>
        </div>
      </div>


      </div>


      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://rawnetworks.eu" target="_blank">RAW Networks - Webseite</a>
                </li>
                <li>
                  <a href="https://youtube.com/c/RawNetworksYouTube" target="_blank">RAW Networks - YouTube</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, Coded by <i class="fa fa-heart heart"></i> RAW Networks
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
