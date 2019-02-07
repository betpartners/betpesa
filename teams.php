<?php
$myfile = fopen("status.txt", "r+") or die("Unable to open file!");
$status=fread($myfile,filesize("status.txt"));
if ($status=="0") {
  header("Location:setup.php"); 
}
fclose($myfile);
?>
<?php 
require_once 'header.php';
read_teams("WHERE 1;");
 ?>
<link rel="stylesheet" type="text/css" href="css/index.css">
 <body style="background-color: #cccccc;">
  <?php require_once 'addteam.php'; ?>
  <button class="fixed shadow-lg" 

  style="
  border-radius: 50%;
  width: 70px;
  height: 70px;
  background-color: #003840;
  border: 0;
  color: #fff;
  cursor: pointer;
  position: fixed;
  z-index: 100;
  top: 80%;
  right: 30px;
  outline: none;"
  data-toggle="modal" data-target="#exampleModalCenter"><i style="font-size: 30px;" class="fa fa-plus"></i></button>
<nav class="navbar fixed-top shadow-sm  navbar-light bg-light" style="height: 65px;" >
  <a class="navbar-brand" href="">
    <img src="img/icon.png"  width="30" height="30">
    <strong style="color:#02A672;">Betpesa</strong>
  </a>
  <h4 style="margin-left: 50px;">List of Teams</h4>
  <form class="form-inline mx-auto my-2 my-lg-0" method="post" action="betpesa.php">
      <input class="form-control mr-sm-2" name="query" type="search" placeholder="search team..." aria-label="Search">
      <input type="hidden" name="action" value="search_teams">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  <a class="btn btn-success" style="
    position: absolute;
    right: 10px;
    margin: auto;

    "href="admin.php">Admin</a>
</nav>

<div class="sidenav shadow-sm navbar-light bg-light">
  <a href="/betpesa" style="color: #005A5B;">Bets</a>
  <a href="matches.php" style="color: #005A5B;"   >Matches</a>
  <a href="teams.php" class="active" >Teams</a>
  <a href="weeks.php" style="color: #005A5B;"  >Weeks</a>
</div>
<div class="main">
    <div class="row row-horizontal">

      <?php 
      if (!$teams=="") {
        echo $teams;
              } else {
        echo "No teams";
      }
       ?>
</div>
</div>


 </body>