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
    
    <div class="container" style="padding-top:150px;">
    	
    <div class="row">
      <div class="col-sm-12">
        <table class="table table-bordered table-hover">
          <tr class="">
            <th><strong>Full Name</strong></th>
            <th><strong>E Mail</strong></th>
            <th><strong>Voter ID</strong></th>
            <th> Last Update</th>
          </tr>

          <?php
                      require('config.php');

                      //Establish Connection
                        $conn= mysqli_connect($hostname, $username, $password, $database);

                        //Check
                        if(!$conn)
                        {
                          die("Connection Failed : ".mysqli_connect_error());
                        }

                        for ($i=1; $i < 16; $i++) { 
                          
                          $sql= "SELECT * FROM db_evoting.tbl_users where id='".$i."'";
                          $query= mysqli_query($conn, $sql);

                          if(mysqli_num_rows($query)>0)
                            {
                              while($row= mysqli_fetch_assoc($query))
                              {
                                $full_name= $row['full_name'];
                                $email= $row['email'];
                                $voter_id= $row['voter_id'];
                                echo "
                                  <tr class='text-light'>
                                      <td>$full_name</td>
                                      <td>$email</td>
                                      <td>$voter_id</td>
                                      <td>NULL</td>
                                  </tr>   
                                ";
                              }
                            }
                        }
                          mysqli_close($conn);
          ?>

        </table>
      </div>
    </div>

    </div>
</body>
</html>