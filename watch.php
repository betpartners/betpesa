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
<body>
	<button class="btn btn-primary">Select match</button>
	<div class="container">
		<div class="row">
			<div class="col">
				<iframe width="600" height="400" src="https://www.youtube.com/embed/XfZMWwb5200" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col">
				<h3>Standings</h3>
				<style> 
body{ 
  text-align: center;
  background-image: url(img/core-img/OG22VV0.jpg);
font-family: Bahnschrift; 
background-size: cover;
font-weight: 20; 
} 
h1{ 
color: rgb(253, 253, 253); 
font-weight: 80; 
font-size: 20px; 
margin: 40px 0px 20px; 
} 
#clockdiv{ 
  width: 20%;
	font-family: 'Elephant'; 
	color: #fff; 
	display: inline-block; 
	
	text-align: center; 
	font-size: 10px; 
} 
#clockdiv > div{ 
	padding: 10px; 
	border-radius: 3px; 
	background: #e1e4e440; 
	display: inline-block; 
} 
#clockdiv div > span{ 
	padding: 15px; 
	border-radius: 3px; 
	background: #00816A; 
	display: inline-block; 
} 
#smalltext{ 
	padding-top: 5px; 
	font-size: 11px; 
} 
#box{
  width: 100%;
	border-radius: 3px; 
	background: rgba(99, 119, 98, 0.54);
	  
}
</style> 
<script>
  setInterval("typeWriter();",2000); 
  setInterval("typeWriter2();",2000); 
  setInterval("typeWriter3();",8000); 
var i = 0;
var j = 0;
var k = 0;
var txt = ' 2  ';
var txtt = '4 ' ;
var txtt1 = '5';

rand(10, 10000);
var speed = 50;

function typeWriter() {
if (i < txt.length) {
 document.getElementById("demopsg").innerHTML += txt.charAt(i);
 i++;
 setTimeout(typeWriter, speed);
}
}
function typeWriter2() {
if (j < txtt.length) {
 document.getElementById("demo1psg").innerHTML += txtt.charAt(j);
 j++;
 setTimeout(typeWriter2, speed);
}
}
function typeWriter3() {
if (k < txtt1.length) {
 document.getElementById("demo1psg").innerHTML += txtt1.charAt(k);
 k++;
 setTimeout(typeWriter3, speed);
}
}
</script>
</head> 
<body> 
 <div id="box">
    <br>
    <div id="clockdiv"> 

      <div> 
        <span class="minutes" >
        <div class="timer">
            <time id="countdown">5 : 00</time>
          </span> 
        </div>
      </div> 
      
      </div> 
      <br><br>
       </div>
       

<div id="box">
<h1>GAME WEEK ONE</h1>

 <br> 
<div id="clockdiv"> 
<div> 
	<span class="minutes" id="demopsg">2</span> 
	<div id="smalltext">Man-United</div> 
</div> 
</div>
<img src="img/bg-img/mvc.png" alt="" width="30%" height="35">
<div id="clockdiv"> 
  <div> 
    <span class="minutes" id="demo1psg">4</span> 
    <div id="smalltext">Chelsea</div> 
  </div> 
  </div>
<br><br>
 <div id="clockdiv"> 
      <div> 
        <span class="minutes" id="demo">0</span> 
        <div id="smalltext">Arsenal</div> 
      </div> 
      </div>
      <img src="img/bg-img/avl.png" alt="" width="30%" height="35"> 
 
      <div id="clockdiv"> 
        <div> 
          <span class="minutes" id="demo1">0</span> 
          <div id="smalltext">Liverpool</div> 
        </div> 
        </div>
        <br><br>
          <div id="clockdiv"> 
            <div> 
              <span class="minutes" id="demo">0</span> 
              <div id="smalltext">Barcelona Fc</div> 
            </div> 
            </div>
            <img src="img/bg-img/bvj.png" alt="" width="30%" height="35">  
      
            <div id="clockdiv"> 
              <div> 
                <span class="minutes" id="demo1">0</span> 
                <div id="smalltext">Juventus</div> 
              </div> 
              </div>
              <br><br>
              <div id="clockdiv"> 
                  <div> 
                    <span class="minutes" id="demo">0</span> 
                    <div id="smalltext">Roma</div> 
                  </div> 
                  </div>
                  <img src="img/bg-img/rvl.png" alt="" width="30%" height="35"> 
                  <div id="clockdiv"> 
                    <div> 
                      <span class="minutes" id="demo1">0</span> 
                      <div id="smalltext">Lazio</div> 
                    </div> 
                    </div>
                    <br><br>
                    <div id="clockdiv"> 
                        <div> 
                          <span class="minutes" id="demo">0</span> 
                          <div id="smalltext">PSG</div> 
                        </div> 
                        </div>
                        <img src="img/bg-img/pvmc.png" alt="" width="30%" height="35">  
                   
                        <div id="clockdiv"> 
                          <div> 
                            <span class="minutes" id="demo1">0</span> 
                            <div id="smalltext">  Man-City</div> 
                          </div> 
                          </div>
                          <br><br>

</div>


<div id="clockdiv"> 
 
  
  <p id="demo"></p> 
  
  <style>

    .timer {
width: 100px;
font-size: 2.5em;
text-align: center;
}
</style>

<script>  var seconds = 300;
    function secondPassed() {
        var minutes = Math.round((seconds - 30)/60),
            remainingSeconds = seconds % 60;

        if (remainingSeconds < 10) {
            remainingSeconds = "0" + remainingSeconds;
        }

        document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
        if (seconds == 0) {
            clearInterval(countdownTimer);
           //form1 is your form name
          document.form1.submit();
        } else {
            seconds--;
        }
    }
    var countdownTimer = setInterval('secondPassed()', 1000);</script>
			</div>
		</div>
	</div>
</body>