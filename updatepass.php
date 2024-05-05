<?php  
include "connect_to_mysqli.php";
$error = '';
$error_ = '';
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
							echo '<span class="text-center bg-danger p-2 text-light mt-5">Incorrect Password</span>
						   ' ;
							
		            	}
						else if (strlen($npass) < 5)
						{
						echo '<span class="text-center bg-danger p-2 text-light mt-5">Password must contain at least 5 or more words </span>';
						}
						elseif($npass != $confirmp)
						{
						
        				   echo '<span class="text-center bg-danger p-2 text-light mt-5">New Password and confirmPassword does not match</span>';
							
						}
		        	 else
            			{
			                $insert = mysqli_query($connection,"UPDATE admin SET adminPassword= '$npass' where  adminPassword ='$changepass'") or die ('Could not connect: ' .mysqli_error($connection)); 
	
                       
                         echo '<span class="text-center bg-primary p-2 text-light mt-5">Password Changed Successfully!</span>';
							 	
			            }
		          }
		  
			
			 
	  }
	  
	  
	