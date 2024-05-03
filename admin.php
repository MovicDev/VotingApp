
<?php
include "adminscript.php";

include "connect_to_mysqli.php";
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
  <button class="btn btn-danger m-3"><a href="index.html" class="text-decoration-none text-light">Back</a></button>
	
          <h2 class="text-center text-light my-3">ADMIN LOGIN</h2>
           <div class="container">
           <div class="row">
           <div class="col-7 col-lg-5 p-3 mx-auto mt-5 log" style="border:2px solid #2094d3e1;background:#20a8f138;">
            <form action="" method="POST">
              <label for="Enter your UserName!" class="text-light my-1">Admin UserName</label>
            <input type="text" name="adminName" id="input" class="form-control my-2 shadow-none bg-transparent rounded-3 py-2 text-light" required>
            <label for="Enter your UserName!" class="text-light my-1">Admin Password</label>
            <input type="password" name="adminPassword" id="input" class="form-control my-2 shadow-none bg-transparent rounded-3 py-2 text-light" required>
  
            <button name="submit" type="submit" class="btn btn-primary w-100 mt-3">Login</button>
           </form>
           </div>
           </div>
           </div>
 <script src="bootstrap.js"></script>
</body>
</html>