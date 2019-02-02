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

 ?>
<link rel="stylesheet" type="text/css" href="css/index.css">
 <body style="background-color: #cccccc;">
  <?php require_once 'addbet.php'; ?>
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
     <strong style="color: blue;">Betpesa</strong><span>Admin</span>
  </a>
  <h4 style="margin-left: 50px;">Cashflow</h4>
  <form class="form-inline mx-auto my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="search by customer..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  <a class="btn btn-primary" style="
    position: absolute;
    right: 10px;
    margin: auto;

    "href="/betpesa/">Bets</a>
</nav>

<div class="sidenav shadow-sm navbar-light bg-light">
  <a href="admin.php" class="active">Cashflow</a>
  <a href="videos.php" style="color: #005A5B;"  >Match Videos</a>
  <a href="roulette.php" style="color: #005A5B;" >Roullete</a>
  <a href="manage.php" style="color: #005A5B;"  >Management</a>
</div>
<div class="main">
    
</div>


 </body>