<?php
	include "updatepass.php";
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php echo $success;?>
                 <?php echo $er;?>
                 <?php echo $err6;?>
                 <?php echo $err;?>
                 <?php echo $msg;?>
                    </div>
	 <?php
	 include 'connect_to_mysqli.php';
	 $sel_query="select * from admin ";
	 $result = mysqli_query($connection,$sel_query);
	 while($row = mysqli_fetch_array($result)){
		 
		 $password = $row['adminPassword'];
		 
		 
		 
		 }
	 ?>
  <button class="btn btn-danger m-3"><a href="data/index.php" class="text-decoration-none text-light">Back</a></button>
	
          <h2 class="text-center text-light my-3">LOGIN UPDATE</h2>
           <div class="container">
           <div class="row">
           <div class="col-7 col-lg-5 p-3 mx-auto mt-5 log" style="border:2px solid #2094d3e1;background:#20a8f138;">
            <form action="" method="POST">
              <label for="Enter your UserName!" class="text-light my-1">Old Password</label>
            <input type="text" name="old" value="" id="input" class="form-control my-2 shadow-none bg-transparent rounded-3 py-2 text-light" required>
            <label for="Enter your UserName!" class="text-light my-1">New Password</label>
            <input type="password" name="new" id="input" class="form-control my-2 shadow-none bg-transparent rounded-3 py-2 text-light" required>
            <label for="Enter your UserName!" class="text-light my-1">Confirm New Password</label>
            <input type="password" name="renew" id="input" class="form-control my-2 shadow-none bg-transparent rounded-3 py-2 text-light" required>
  
            <button name="submit" type="submit" class="btn btn-primary w-100 mt-3">Login Update</button>
           </form>
           </div>
           </div>
           </div>
 <script src="bootstrap.js"></script>
</body>
</html>