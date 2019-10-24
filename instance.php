



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon.ico">
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  LB-Streaming | Instanzmanager
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/sel.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
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
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>

      <script src="https://kit.fontawesome.com/6c7a0e8d6b.js" crossorigin="anonymous"></script>


      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="index.php">
            <i class="fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active ">
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
            <a class="navbar-brand" href="#pablo">LB-Streaming | Instanzmanager</a>
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
  


<br>
<br>
<br>
<br>

<center><div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">SHOUTcast | Instanz erstellen</h5>
              </div>
              <div class="card-body">
                <form action="instance.php">
                  <div class="row">
                    <div class="col-md-8 px-1">
                      <div class="form-group">
                        <label>Instanz Name:</label>
                        <input type="text" required="required" class="form-control" name="instance" placeholder="Instance name">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                    <div class="form-group">
                        <label>Instanz Port:</label>
                        <input type="text"  required="required" class="form-control" name="port" placeholder="Instance port">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pr-1">
                    <div class="form-group">
                        <label>Admin Passwort:</label>
                        <input type="text" required="required" class="form-control" name="adminpw" placeholder="Admin password">
                      </div>
                    </div>
                    </div>
                    <div class="col-md-12 pl-1">
                    <div class="form-group">
                        <label>Stream Passwort:</label>
                        <input type="text" required="required" class="form-control" name="streampw" placeholder="Stream password">
                      </div>
                    </div>
                    <div class="col-md-12 pl-1">
                    <div class="form-group">
                        <label>Stream Passwort:</label>
                        <input type="hidden" required="required" class="form-control" name="method" value="inscreate">
                      </div>
                    </div>
                  </div>


                  <div class="container">

		<div class="selected-item">
			<p>Soll der Stream Server gelistet werden? <span></span></p>
		</div>

  </div>

  <select name="list">
  <option value="yes">Ja</option>
  <option value="no">Nein</option>
  </select>
  
  <br>
  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>INFO:</label>
                        <textarea class="form-control textarea">Der Befehl wird an das Script gesendet.</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Instanz erstellen</button>
                    </div>
                  </div>
                </form></center>
 <?php

include 'inc/ssh.php';
// Server Connection Information
define("SSH_IP", "$sshaddress");
define("SSH_PORT", "$sshport");
define("SSH_USER", "$sshroot");
define("SSH_PASSWORD", "$sshpassword");

// Set the PHP Load time to 0 (So it doesn't timeout after a certain time)
set_time_limit(0);

// Make it so you cannot stop the script. Once it has been executed, you cannot stop it
ignore_user_abort(true);

// Website IP Lock (Incase the API gets leaked)
// if($_SERVER['REMOTE_ADDR'] != "changeme") die("You're not authorized to use this API.");

// Is all the parameters set?
// Store the information into a specific variable
$instance = escapeshellcmd($_GET['instance']);
$port = escapeshellcmd($_GET['port']);
$adminpw = escapeshellcmd($_GET['adminpw']);
$streampw = escapeshellcmd($_GET['streampw']);
$list = escapeshellcmd($_GET['list']);
$method = escapeshellcmd($_GET['method']);


// Is the SSH2 Dependency installed?
if(!function_exists("ssh2_connect")) die("Please install the SSH2 Dependency on the Linux Server First.");

if(!($con = ssh2_connect(SSH_IP, SSH_PORT))) die("Could not connect to SSH...");
else
{
	if(!ssh2_auth_password($con, SSH_USER, SSH_PASSWORD)) die("Invalid Credentials...\n");
    else
    {
    	if($method == "inscreate" || $method == "inscreate")
    	{

			$gen3 = rand(1,5000);
			include 'inc/sql.php';
	        if(!($stream = ssh2_exec($con, "screen -AmdS LB-Streaming-API /root/lb-streaming/shoutins_api ".$instance." ".$port."  ".$adminpw." ".$streampw." ".$list))) die("Command couldn't be executed, something went wrong...\n");
	        else
	        {
	            echo "" . stream_get_contents($stream);
				echo '<div class="alert alert-success alert-dismissible fade show">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
          <i class="nc-icon nc-simple-remove"></i>
        </button>
        <span>
          <b> Success - </b> Der Befehl wurde an das Script gesendet!</span>
      </div>';
				mysqli_query($conn, "INSERT INTO shoutcast_instances (`id`, `instance`, `port`, `adminpw`, `streampw`, `list`) VALUES ('" . $gen3 . "', '" . $instance . "', '" . $port . "', '" . $adminpw . "', '" . $streampw . "', '" . $list . "')");
        ssh2_disconnect($con);
                
				$con = null;
	        }
		}

		
		

		else {
			ssh2_disconnect($con);
      $con = null;
			die('<div class="alert alert-info alert-dismissible fade show">
      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
        <i class="nc-icon nc-simple-remove"></i>
      </button>
      <span>
        <b> Info - </b> Bitte fülle das Formular aus!</span>
    </div>');
		}

    }

}

?>

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
