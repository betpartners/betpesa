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
 <style type="text/css">
    text{
        font-family:Helvetica, Arial, sans-serif;
        font-size:11px;
        pointer-events:none;
    }
    #chart{
        width:500px;
        height:500px;
        top:10px;
    }
    #question{

        width:500px;
        height:200px;
        top:0;
        left:520px;
    }
    #question h1{
          left: 200;
    width: 200px;
        font-size: 20px;
        font-weight: bold;
        color: #005A5B;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        position: absolute;
        padding: 0;
        margin: 0;
        top:50%;
        -webkit-transform:translate(0,-50%);
                transform:translate(0,-50%);
    }
</style>
<link rel="stylesheet" type="text/css" href="css/roulette.css">
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
  <h4 style="margin-left: 50px;">The roulette Wheel</h4>
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
  <a href="admin.php" style="color: #005A5B;" >Cashflow</a>
  <a href="videos.php" style="color: #005A5B;"  >Match Videos</a>
  <a href="roulette.php" class="active">Roullete</a>
  <a href="manage.php"  style="color: #005A5B;"  >Management</a>
</div>
<div class="main">
    <div id="chart"></div>
    <div id="question"><h1></h1></div>
    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        var padding = {top:20, right:40, bottom:0, left:0},
            w = 500 - padding.left - padding.right,
            h = 500 - padding.top  - padding.bottom,
            r = Math.min(w, h)/2,
            rotation = 0,
            oldrotation = 0,
            picked = 100000,
            oldpick = [],
            color = d3.scale.category20();//category20c()
            //randomNumbers = getRandomNumbers();

        //http://osric.com/bingo-card-generator/?title=HTML+and+CSS+BINGO!&words=padding%2Cfont-family%2Ccolor%2Cfont-weight%2Cfont-size%2Cbackground-color%2Cnesting%2Cbottom%2Csans-serif%2Cperiod%2Cpound+sign%2C%EF%B9%A4body%EF%B9%A5%2C%EF%B9%A4ul%EF%B9%A5%2C%EF%B9%A4h1%EF%B9%A5%2Cmargin%2C%3C++%3E%2C{+}%2C%EF%B9%A4p%EF%B9%A5%2C%EF%B9%A4!DOCTYPE+html%EF%B9%A5%2C%EF%B9%A4head%EF%B9%A5%2Ccolon%2C%EF%B9%A4style%EF%B9%A5%2C.html%2CHTML%2CCSS%2CJavaScript%2Cborder&freespace=true&freespaceValue=Web+Design+Master&freespaceRandom=false&width=5&height=5&number=35#results

        var data = [
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"DRAW , ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,DRAW,NAPOLI WIN"}, // padding
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"CHELSEA WIN, ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"DRAW,  ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,MAN CITY WIN,NAPOLI WIN"}, // padding
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"CHELSEA WIN, DRAW , BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, LIVERPOOL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"CHESEA WIN, LIVERPOOL WIN, DRAW ,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, ARSENAL WIN, JUVENTUS WIN,REAL MADRID WIN, LAZIO WIN, LYON WIN,PSG WIN,NAPOLI WIN"}, // padding
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, ARSENAL WIN, BARCERONA WIN,ROMA WIN, INTER MILLAN WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    {"label":"GAME WEEK 1",  "value":1,  "Results":"MAN-U WIN, ARSENAL WIN, BARCERONA WIN,REAL MADRID WIN, LAZIO WIN, BAYAN MUNICH WIN,PSG WIN,NAPOLI WIN"}, // padding
                    
                   
        ];


        var svg = d3.select('#chart')
            .append("svg")
            .data([data])
            .attr("width",  w + padding.left + padding.right)
            .attr("height", h + padding.top + padding.bottom);

        var container = svg.append("g")
            .attr("class", "chartholder")
            .attr("transform", "translate(" + (w/2 + padding.left) + "," + (h/2 + padding.top) + ")");

        var vis = container
            .append("g");
            
        var pie = d3.layout.pie().sort(null).value(function(d){return 1;});

        // declare an arc generator function
        var arc = d3.svg.arc().outerRadius(r);

        // select paths, use arc generator to draw
        var arcs = vis.selectAll("g.slice")
            .data(pie)
            .enter()
            .append("g")
            .attr("class", "slice");
            

        arcs.append("path")
            .attr("fill", function(d, i){ return color(i); })
            .attr("d", function (d) { return arc(d); });

        // add the text
        arcs.append("text").attr("transform", function(d){
                d.innerRadius = 0;
                d.outerRadius = r;
                d.angle = (d.startAngle + d.endAngle)/2;
                return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius -10) +")";
            })
            .attr("text-anchor", "end")
            .text( function(d, i) {
                return data[i].label;
            });

        container.on("click", spin);


        function spin(d){
            
            container.on("click", null);

            //all slices have been seen, all done
            console.log("OldPick: " + oldpick.length, "Data length: " + data.length);
            if(oldpick.length == data.length){
                console.log("done");
                container.on("click", null);
                return;
            }

            var  ps       = 360/data.length,
                 pieslice = Math.round(1440/data.length),
                 rng      = Math.floor((Math.random() * 1440) + 360);
                
            rotation = (Math.round(rng / ps) * ps);
            
            picked = Math.round(data.length - (rotation % 360)/ps);
            picked = picked >= data.length ? (picked % data.length) : picked;


            if(oldpick.indexOf(picked) !== -1){
                d3.select(this).call(spin);
                return;
            } else {
                oldpick.push(picked);
            }

            rotation += 90 - Math.round(ps/2);

            vis.transition()
                .duration(3000)
                .attrTween("transform", rotTween)
                .each("end", function(){

                    //mark question as seen
                    d3.select(".slice:nth-child(" + (picked + 1) + ") path")
                        .attr("fill", "#111");

                    //populate question
                    d3.select("#question h1")
                        .text(data[picked].Results);

                    oldrotation = rotation;
                
                    container.on("click", spin);
                });
        }

        //make arrow
        svg.append("g")
            .attr("transform", "translate(" + (w + padding.left + padding.right) + "," + ((h/2)+padding.top) + ")")
            .append("path")
            .attr("d", "M-" + (r*.15) + ",0L0," + (r*.05) + "L0,-" + (r*.05) + "Z")
            .style({"fill":"black"});

        //draw spin circle
        container.append("circle")
            .attr("cx", 0)
            .attr("cy", 0)
            .attr("r", 60)
            .style({"fill":"white","cursor":"pointer"});

        //spin text
        container.append("text")
            .attr("x", 0)
            .attr("y", 15)
            .attr("text-anchor", "middle")
            .text("SPIN")
            .style({"font-weight":"bold", "font-size":"30px"});
        
        
        function rotTween(to) {
          var i = d3.interpolate(oldrotation % 360, rotation);
          return function(t) {
            return "rotate(" + i(t) + ")";
          };
        }
        
        
        function getRandomNumbers(){
            var array = new Uint16Array(1000);
            var scale = d3.scale.linear().range([360, 1440]).domain([0, 100000]);

            if(window.hasOwnProperty("crypto") && typeof window.crypto.getRandomValues === "function"){
                window.crypto.getRandomValues(array);
                console.log("works");
            } else {
                //no support for crypto, get crappy random numbers
                for(var i=0; i < 1000; i++){
                    array[i] = Math.floor(Math.random() * 100000) + 1;
                }
            }
                return array;
        }

    </script>

</div>


 </body>