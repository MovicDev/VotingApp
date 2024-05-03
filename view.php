
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
	<h1 class="text-center my-3 text-light">Total Poll Result</h1>
<?php
	  include "connect_to_mysqli.php";
                   ?>
                   <div class="container">
                        <div class="row mx-auto mt-5 p-3" style="max-width: 500px; background:#20a8f138;">
                            <div class="col">
<?php
		include "connect_to_mysqli.php";
              $A=0;
              $B=0;
              $C=0;
              $D=0;

         
                $sqli ="SELECT * FROM vote WHERE selectedCandidate='A'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate'])
                      $A++;
                  }

                  $a= $A*1;
echo "<span class='text-light my-3'>Total votes for Candidate A</span><span class='text-primary ms-3 fw-bold float-end'>$A vote's'</span></span> <hr style='color:white'>";
	  
                 
                }

echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
   $sqli ="SELECT * FROM vote WHERE selectedCandidate='B'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate'])
                      $B++;
                  }

                  $b= $B*1;

                  echo "<span class='text-light my-3'>Total votes for Candidate B</span><span class='text-primary ms-3 fw-bold float-end'>$B vote's'</span></span> <hr style='color:white'>";
               
                }
echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
 $sqli ="SELECT * FROM vote WHERE selectedCandidate='C'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate'])
                      $C++;
                  }

                  $c= $C*1;
             echo "<span class='text-light my-3'>Total votes for Candidate C</span><span class='text-primary ms-3 fw-bold float-end'>$C vote's'</span></span> <hr style='color:white'>";
               
                }
echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";

 $sqli ="SELECT * FROM vote WHERE selectedCandidate='D'";
                $result= mysqli_query($connection, $sqli);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['selectedCandidate'])
                      $D++;
                  }

                  $d= $D*1;
                  echo "<span class='text-light my-3'>Total votes for Candidate D</span><span class='text-primary ms-3 fw-bold float-end'>$D vote's'</span></span> <hr style='color:white'>";
				}
		?>

        <button class="btn btn-danger m-1 float-end"><a href="data/index.php" class="text-light text-decoration-none">Back</a></button>
        </div>
       </div>
 </div>
 
</body>
</html>