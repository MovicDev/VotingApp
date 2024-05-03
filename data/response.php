
<?php
	//include connection file 
	include_once("connection.php");
	
	$db = new dbObj();
	$connString =  $db->getConnstring();

	$params = $_REQUEST;
	
	$action = isset($params['action']) != '' ? $params['action'] : '';
	$empCls = new Vote($connString);

	switch($action) {
	 case 'add':
		$empCls->insertVote($params);
	 break;
	 case 'edit':
		$empCls->updateVote($params);
	 break;
	 case 'delete':
		$empCls->deleteVote($params);
	 break;
	 default:
	 $empCls->getVote($params);
	 return;
	}
	
	class Vote {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	public function getVote($params) {
		
		$this->data = $this->getRecords($params);
		
		echo json_encode($this->data);
	}
	function insertVote($params) {
		$data = array();;
		$sql = "INSERT INTO `vote` (voterName, voterEmail, selectedCandidate) VALUES('" . $params["voterName"] . "', '" . $params["voterEmail"] . "','" . $params["selectedCandidate"] . "');  ";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to insert vote data");
		
	}
	
	
	function getRecords($params) {
		$rp = isset($params['rowCount']) ? $params['rowCount'] : 10;
		
		if (isset($params['current'])) { $page  = $params['current']; } else { $page=1; };  
        $start_from = ($page-1) * $rp;
		
		$sql = $sqlRec = $sqlTot = $where = '';
		
		if( !empty($params['searchPhrase']) ) {   
			$where .=" WHERE ";
			$where .=" ( voterName LIKE '".$params['searchPhrase']."%' ";    
			$where .=" OR voterEmail LIKE '".$params['searchPhrase']."%' ";

			$where .=" OR selectedCandidate LIKE '".$params['searchPhrase']."%' )";
	   }
	   if( !empty($params['sort']) ) {  
			$where .=" ORDER By ".key($params['sort']) .' '.current($params['sort'])." ";
		}
	   // getting total number records without any search
		$sql = "SELECT * FROM `vote` ";
		$sqlTot .= $sql;
		$sqlRec .= $sql;
		
		//concatenate search sql if value exist
		if(isset($where) && $where != '') {

			$sqlTot .= $where;
			$sqlRec .= $where;
		}
		if ($rp!=-1)
		$sqlRec .= " LIMIT ". $start_from .",".$rp;
		
		
		$qtot = mysqli_query($this->conn, $sqlTot) or die("error to fetch tot vote data");
		$queryRecords = mysqli_query($this->conn, $sqlRec) or die("error to fetch vote data");
		
		while( $row = mysqli_fetch_assoc($queryRecords) ) { 
			$data[] = $row;
		}

		$json_data = array(
			"current"            => intval($params['current']), 
			"rowCount"            => 10, 			
			"total"    => intval($qtot->num_rows),
			"rows"            => $data   // total data array
			);
		
		return $json_data;
	}
	function updateVote($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "Update `vote` set voterName = '" . $params["edit_voterName"] . "', voterEmail='" . $params["edit_voterEmail"]."', selectedCandidate='" . $params["edit_selectedCandidate"] . "' WHERE s='".$_POST["edit_s"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to update vote data");
	}
	
	function deleteVote($params) {
		$data = array();
		//print_R($_POST);die;
		$sql = "delete from `vote` WHERE s='".$params["s"]."'";
		
		echo $result = mysqli_query($this->conn, $sql) or die("error to delete vote data");
	}
}
?>
	