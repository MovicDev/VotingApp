<?php  
include "connect_to_mysqli.php";
	  if     (isset( $_POST['old'])){
		    $changepass = $_POST['old'];
			$npass = $_POST['new'];
			$confirmp = $_POST['renew'];
	         
	  //$usid = 'movicunique01@gmail.com';
	  
	 $sql = "SELECT * from admin where adminPassword = '".$changepass."'" ;
		  $sql2 = mysqli_query($connection,$sql);
	  
		       while ($row = mysqli_fetch_array($sql2))
		          {
			           $d_pass = $row['adminPassword'];
			         if($changepass != $d_pass)
			            {  
        				   echo'<center style="color:red;">Incorrect Password</center>
						   ' ;
							
		            	}
						else if (strlen($npass) < 5)
						{
						echo 'Password must have 5 or more characters';
						}
						elseif($npass != $confirmp)
						{
						
        				   echo '<center style="color:red;">Password does not match</center>';
							
						}
		        	 else
            			{
			                $insert = mysqli_query($connection,"UPDATE admin SET adminPassword= '$npass' where  adminPassword ='$changepass'") or die ('Could not connect: ' .mysqli_error($connection)); 
	
                       
                         echo '<span style="color:green;">Password Changed Successfully!</span>';
							 	
			            }
		          }
		  
			
			 
	  }
	  
	  
	  ?>