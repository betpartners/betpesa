<?php 

require_once 'utils.php';


if (isset($_POST['action'])){
	$action = sanitizeString($_POST['action']);
	switch ($action) {
		case 'insert_team':
			insert_team();
			break;
		case 'search_teams':
			search_teams();
			break;
		
		default:
			# code...
			break;
	}
}
function insert_team(){
	$name = sanitizeString($_POST['name']);
 	queryMysql("INSERT INTO team(name) VALUES('$name')");
 	header("Location:teams.php");
}



?>