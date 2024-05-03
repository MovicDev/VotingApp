<?php
include "regscript.php";
include "connect_to_mysqli.php";
?>

<?php
$sqli ="SELECT * FROM candidate";
$result= mysqli_query($connection, $sqli);

if(mysqli_num_rows($result)>0)
{
  while($row= mysqli_fetch_assoc($result))
  {
    $A=$_row['A'];
    $B=$_row['B'];
    $C=$_row['C'];
    $D=$_row['D'];
  }
}


?>
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
          <h1 class="text-center text-light my-4">Voters Poll</h1>
<div class="container p-5">
      <div class="row">
        <div class="p-3" style="border:2px solid #2094d3e1;background:#20a8f138;">
          <div><?php echo $chk; ?>
		    <?php echo $accpt_err; ?></div>
           
        <h2 class="text-start text-light">Choose Your Candidate.</h2>
        <p class="text-start text-light">Prove Your Authencity of being correct voter.</p>
          
          <form action="" method="POST">
          <div class="form-group">
            <label class="text-light my-2">Voter's Name :</label><br>
            <input type="text" name="voterName" id="input" class="form-control my-2 shadow-none bg-transparent rounded-3 py-2 text-light" placeholder="Enter Your Full Name">
            <label class="text-light my-2">Voter's Registered Email ID :</label><br>
            <input type="text" name="voterEmail" id="input" class="form-control my-2 shadow-none bg-transparent rounded-3 py-2 text-light" placeholder="Enter Your Email ID"><br>
            <h3 class="normalFont text-light">Selet Any One of Them,</h3>
            <div class="radio">
              <label for="">
               <!-- <input type="radio" name="selectedCandidate" value="A"> <strong>Bhartiya Janta Party (A)</strong>-->
              </label>
        <div class="container">
  <div class="radio-input">
		<div class="text-light my-2">
			<input type="radio" name="selectedCandidate" class="" style="width:30px; height:30px"  value="A">
			<span class="ms-3" style="position:relative; bottom:10px;">Bhartiya Janta Party (A)</span>
		</div>
		<div class="text-light my-2">
			<input type="radio" name="selectedCandidate" class="" style="width:30px; height:30px"  value="B">
			<span class="ms-3" style="position:relative; bottom:10px;">Congress (B)</span>
		</div>
		<div class="text-light my-2">
			<input type="radio" name="selectedCandidate" class="" style="width:30px; height:30px"  value="C">
			<span class="ms-3" style="position:relative; bottom:10px;">YSR Congress (C)</span>
		</div>
    <div class="text-light my-2">
			<input type="radio" name="selectedCandidate"  class="" style="width:30px; height:30px" value="D">
			<span class="ms-3" style="position:relative; bottom:10px;">SR Congress (D)</span>
		</div>
</div>
       </div class="text-light">
			<input type="checkbox" name="agree" class="ch" value="yes">
			<span class="ms-4 text-light">You have to agree our Terms and Conditions.</strong></span>
      </div>
      <div class="text-light">
      <input name="chu" type="checkbox" class="ch" value="yes">
			<span class="ms-4 text-light">Am up to 18+.......</strong></span>
      </div>
      <hr class='text-light'>
              <button name="submit" class="btn btn-primary" type="submit">Submit</button>
              <button name="" class="btn btn-danger float-end" type="submit"><a href="index.html" class="text-decoration-none" style="color:#fff;">Decline</a></button>
  
         </div>
          </div>
          </form>
  <!-- ======= Footer ======= -->

<script src="bootstrap.js"></script>
</body>
</html>
