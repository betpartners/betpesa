<?php 

$dbhost = 'localhost'; //Your database server address
$dbname = 'betpesa_dev'; // Your Database Name
$dbuser = 'root'; // ...db username
$dbpass = ''; // ...db password
$teams="";


$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($connection->connect_error) die($connection->connect_error);
function write_log($log){
	$myfile = fopen("logs.txt", "a") or die("Unable to open file!");
			  fwrite($myfile,$log."\n") or die("Could not write to file");
			  fclose($myfile);
			}

function createTable($name, $query)
{
queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
echo "Table '$name' created or already exists.<br>";
}

function queryMysql($query)
{
write_log(date("h:i:sa").": ".$query);
global $connection;
$result = $connection->query($query);
if (!$result) die($connection->error);
return $result;
}
function sanitizeString($var)
{
global $connection;
$var = strip_tags($var);
$var = htmlentities($var);
$var = stripslashes($var);
return $connection->real_escape_string($var);
}


function read_teams($criteria){
	global $teams;
	$myquery="SELECT * FROM team ".$criteria;
    $selected=queryMysql($myquery);
      if (!$selected->num_rows) {
          echo'<p>No Courses Registered </br> Choose course below to register</p>';
      } else {
       while ($row=$selected->fetch_array(MYSQLI_ASSOC)) {
        $name=$row['name'];
        $teams=$teams.<<<END
          <div class="col-3">
          <div class="card border-light shadow-sm mb-3" style="max-width: 18rem;">
          <div class="card-header"><img src="img/man_u.png" style="height:50px;float:left;"/><h3>$name</h3></div>
          <div class="card-body text-primary">
            <p class="card-text">The best club in the world</p>
          </div>
          </div>
        </div>
END;
      	}
      }
 }
function search_teams(){
  header("Location:teams.php");
}


 ?>
