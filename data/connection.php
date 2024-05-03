<?php
Class dbObj{
	/* Database connection start */
	var $servername = "localhost";
	var $username = "root";
	var $password = "";
	var $dbname = "votingapp";
	var $conn;
	function getConnstring() {
		$con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		} else {
			$this->conn = $con;
		}
		return $this->conn;
	}
}

?>

<?php
 
$db_host = "localhost"; 

$db_username = "root"; 

$db_pass = ""; 

$db_name = "votingapp";

$connection = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name" );

?>