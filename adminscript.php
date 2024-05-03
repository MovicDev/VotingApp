<?php 
session_start();
include_once('connect_to_mysqli.php');

                      function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                       
                        return $data;
                      } 

                      if(empty($_POST['adminName']) || empty($_POST['adminPassword']))
                      {
                        $error= "UserName or Password is Required.";
                      }
                      else
                      {
                        $adminName= test_input($_POST['adminName']);
                        $adminPassword= test_input($_POST['adminPassword']);

	                   if(!$connection)
                        {
                          die("Connection Failed : ".mysqli_connect_error());
                        }

                        $sqli= "SELECT * FROM admin WHERE adminName='".$adminName."' AND adminPassword='".$adminPassword."'";
                        $query= mysqli_query($connection, $sqli);
                       

                        if(mysqli_num_rows($query)==0)
                        {
                          header("location:error.php");
                        }
                        else
                        {
                          header("location:data/index.php");
                        }

                        mysqli_close($connection);

                      }
                    
