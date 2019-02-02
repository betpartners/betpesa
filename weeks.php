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
  <?php require_once 'addmatch.php'; ?>
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
  <h4 style="margin-left: 50px;">List of Weeks</h4>
  <form class="form-inline mx-auto my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="search week..." aria-label="Search">
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
  <a href="teams.php" style="color: #005A5B;" >Teams</a>
  <a href="weeks.php" class="active"   >Weeks</a>
</div>
<div class="main">
    <div class="row row-horizon">

      <?php 

      for ($i=0; $i < 100; $i++) { 
        echo <<<END
         <div class="col-3">
          <div class="card border-light shadow-sm mb-3" style="max-width: 18rem;">
          <div class="card-header">Peter</div>
          <div class="card-body text-dark">
            <h5 class="card-title">Dark card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          </div>
        </div>

END;
      }
       ?>
</div>
</div>


 </body>