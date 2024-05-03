<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Voting app - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style type="text/css">
#header{
background: rgba(40, 58, 90, 0.9);
width:100%;
height:70px;
}
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Voting App</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


    </div>
  </header><!-- End Header -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   

  <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:10px solid rgba(40, 58, 90, 0.9);">
          
          <div class="page-header">
            <h2 class="specialHead">POSITION</h2>
            <p class="normalFont">This is Administration Panel.</p>
          </div>
          
          <div class="col-sm-12">
            <?php
              include "connect_to_mysqli.php";

              $A=0;
              $B=0;
              $C=0;
              $D=0;
			  $E=0;
			  $F=0;

              $connection = mysqli_connect($hostname, $username, $password, $database);
              if(!$connection)
              {
                echo "Error While Connecting.";
              }
              else
              {

                //A
                $sqli ="SELECT * FROM vote WHERE selectedCandidate='A'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate='])
                      $A++;
                  }

                  $a_value= $A*10;

                  echo "<strong>A</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$a_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$a_value."%'>
                      <span class='sr-only'>A</span>
                    </div>
                  </div>
                  ";
                }

                // CONGRESS
               $sqli ="SELECT * FROM vote WHERE selectedCandidate='B'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate='])
                      $B++;
                  }

                  $b_value= $B*10;

                  echo "<strong>B</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$b_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$b_value."%'>
                      <span class='sr-only'>B</span>
                    </div>
                  </div>
                  ";
                }

                // C
               $sqli ="SELECT * FROM vote WHERE selectedCandidate='C'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate='])
                      $C++;
                  }

                  $c_value= $C*10;

                  echo "<strong>A</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$c_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$c_value."%'>
                      <span class='sr-only'>C</span>
                    </div>
                  </div>
                  ";
                }

                // D
                $sqli ="SELECT * FROM vote WHERE selectedCandidate='D'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate='])
                      $D++;
                  }

                  $d_value= $D*10;

                  echo "<strong>A</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$d_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$d_value."%'>
                      <span class='sr-only'>D</span>
                    </div>
                  </div>
                  ";
                }
				
				$sqli ="SELECT * FROM vote WHERE selectedCandidate='E'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate='])
                      $E++;
                  }

                  $e_value= $E*10;

                  echo "<strong>E</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$e_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$e_value."%'>
                      <span class='sr-only'>E</span>
                    </div>
                  </div>
                  ";
                }
				
				$sqli ="SELECT * FROM vote WHERE selectedCandidate='F'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate='])
                      $F++;
                  }

                  $f_value= $F*10;

                  echo "<strong>F</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$f_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$f_value."%'>
                      <span class='sr-only'>F</span>
                    </div>
                  </div>
                  ";
                }
               echo "<hr>";

                $total=0;

                // Total
                $sqli ="SELECT * FROM vote";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate'])
                      $total++;
                  }


                  $total= $total*10;

                  echo "<strong>Total Number of Votes</strong><br>";
                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>VOTES : $total </h3>
                  </div>
                  ";
                }

              }
            ?>
          </div>
</div>
</div>
</div>
        </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>online App</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">Movickolawole</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>