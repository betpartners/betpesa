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
<nav class="navbar fixed-top shadow-sm  navbar-light bg-light" style="height: 65px;" >
  <a class="navbar-brand" href="">
    <img src="img/icon.png"  width="30" height="30">
     <strong style="color: blue;">Betpesa</strong><span>Admin</span>
  </a>
  <h4 style="margin-left: 50px;">Cashflow</h4>
  <form class="form-inline mx-auto my-2 my-lg-0">
      
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
  <div class="row">
    <div class="col">
      <h1 class="h1" style="color: #008080;">Ksh. 20,000</h1>
    </div>
    <div class="col">
      <div class="card">
    <canvas id="myChart" width="100" height="100"></canvas>
  </div>
    </div>
  </div>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
</div>


 </body>