<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	 <?php
            

              $A=0;
              $B=0;
              $C=0;
              $D=0;

          include "connect_to_mysqli.php";
	
	
                //BJP
                $sqli ="SELECT * FROM vote WHERE selectedCandidate='A'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate'])
                      $A++;
                  }

                  $a_value= $A*10;

                  echo "<strong>REP. 1</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$A\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$a_value."%'>
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
                    if($row['selectedCandidate'])
                      $B++;
                  }

                  $b_value= $B*10;

                  echo "<strong>REP. 2</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$B\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$b_value."%'>
                      <span class='sr-only'>B</span>
                    </div>
                  </div>
                  ";
                }

                // AAP
                         $sqli ="SELECT * FROM vote WHERE selectedCandidate='C'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate'])
                      $C++;
                  }

                  $c_value= $C*10;


                  echo "<strong>REP. 3</strong><br>";
                  echo "
                 <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$C\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$c_value."%'>
                      <span class='sr-only'>C</span>
                    </div>
                  </div>
                  ";
                }

                // TMC
                         $sqli ="SELECT * FROM vote WHERE selectedCandidate='D'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate'])
                      $D++;
                  }

                  $d_value= $D*10;


                  echo "<strong>REP. 4</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$D\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$d_value."%'>
                      <span class='sr-only'>D</span>
                    </div>
                  </div>
                  ";
                }

               echo "<hr>";

                $total=0;

                // Total
                $sqli ="SELECT * FROM vote ";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate'])
                      $total++;
                  }


                  $tatal= $total*10;

                  echo "<strong>Total Number of Votes</strong><br>";
                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>VOTES : $total </h3>
                  </div>
                  ";
                }

              
            ?>
</body>
</html>