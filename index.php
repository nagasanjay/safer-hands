<html>
<head>
<title>Safer Hands</title>
<style>
#header {
		background-color: #333;
		top :0;
		width: 100%;
		margin : 0px 0px 30px 0px;
		-webkit-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.75);
		-moz-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.75);
		box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.75);
		border-radius: 100px;
		}
input[type=text],textarea {
    width: 80%;
    margin: 3% 30% 3% 10%;
    box-sizing: border-box;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #3CBC8D;
    color: white;
	overflow:hidden;
	resize:none;
}
input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 2% 0% 2% 0%;
    margin: 8px 0;
    border: none;
    border-radius: 10px;
    cursor: pointer;
	font-family:Verdana;
	font-size:15px;
	color:white;
}
#label{
	font-family:Verdana;
	font-size:20px;
	color:white;
	}
#form{
    border-radius: 10px;
    background-color: rgba(1,1,1,0.3);
	margin: 1% 1% 1% 0%;
	float:left;
    padding: 2% 2% 2% 2%;
	width:45%;
}
input[type=submit]:hover {
    background-color: #45a049;
}
#img {
		border-radius: 4px;
		border 1px solid black;
		padding-left : 40px;
	}
#main > .inner {
		margin: 0px 80px 0px;
		top:5rem;
		max-width:90%;
		background-color:white;
		-webkit-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.75);
		-moz-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.75);
		box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.75);
		border-radius: 4px;
		line-height = 20rem;
	}

.mySlides {display: none}
img {vertical-align: middle;}

.slideshow-container {
  position: relative;
  padding: 0% 0% 10% 0%;
  overflow:fixed;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top:50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

.next {
  float:right;
  right: 0%;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(1,1,1,0.8);
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}  
body {
	background : url("logo1.jpg") fixed no-repeat;
	background-size: contain;
	}
h1 {
	font-family:Courier New;
	font-variant:small-caps;
	font-style:italics;
	font-weight:lighter;
	font-size:20px;
	float:right;
	padding-right:2%;
	padding-top:1.2%;
	color:white;
	}

#heading
	{
		border:1px solid;
		border-color:rgba(0,0,0,0);
		padding:5% 0% 3% 2%;
		background-color:rgba(1,1,1,.3);
		margin-top:0px;
		margin-left:40px;
		float:right;
		width:40%;
		border-radius:10px;
		
	}
	
		#heading span
		{
			display: block;
			letter-spacing: 1px;
			text-transform: uppercase;
			font-size: .9em;
			color: rgba(255,255,255,.8);
			float:right;
		}
#form-main{
			background-color:rgba(255,255,255,0.4);
			overflow:auto;
			outline-style:dashed ;
			clear:both;
			display:table;
			outline-offset:20px;
			margin:5% 10% 5% 13%;
			padding:5% 10% 5% 10%;
			border-radius:10px;
		}
#footer{
	text-align:center;
	color:rgba(255,255,255,0.6);
	border:black;
	border-radius:10px;
	margin: 2% 0% 0% 0%;
	padding:.5% .5% .5% .5%;
	font-family:Copperplate gothic;
	font-size:2em;
}

</style>
</head>
<body background="logo1.jpg">
<header id="header"><div><a href="#footer"><img id="img" src="logo.png" /></a><h1>Making The World A Better Place To Live</h1></div></header>
<section id="main"><div class="inner"><div class="container"><div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="malala.jpg" style="width:100%" class="image">
 </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="keller.jpg" style="width:100%" class="image">
  </div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="akkai padmashali.jpg" style="width:100%" class="image">
  </div>
 <div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="trisha shetty.jpg" style="width:100%" class="image">
  </div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 

</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<br></div></div></section>

<?php
if(isset($_POST['submit'])){
	$subject = "SAFER HANDS REPORT";
	$message = $_POST['problem'];
	if(mail('ragavendranww@gmail.com',$subject,$message,'From:admin@saferhands.tk')){
	    echo "successfull";
	}
	else
	    echo "failed";
	
	if(mail('saferhands@pm.me',$subject,$message,'From:admin@saferhands.tk')){
	    echo "successfull";
	}
	else
	    echo "failed";
?>	

<br></div></div></section>
<section id="form-main" style="margin-left:35%;margin-right:30%;">
<div style="background-color:rgba(255,255,255,0.4);">
<h1 style="font-family:Calibri;font-size:20;text-align:center;color:rgba(1,1,1,.3);display:block;font-weight:600">Reported Successfully</h1>
</div>
</section>


<?php
}
else{
?>

<audio controls autoplay hidden>
<source src="window.adEvenListener" type="audio/mpeg">
<script>
window.addEventListener('load', function () {
        var audioCtx = new (window.AudioContext || window.webkitAudioContext)();
        var source = audioCtx.createBufferSource();
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'saferhands.mp3');
        xhr.responseType = 'arraybuffer';
        xhr.addEventListener('load', function (r) {
            audioCtx.decodeAudioData(
                    xhr.response, 
                    function (buffer) {
                        source.buffer = buffer;
                        source.connect(audioCtx.destination);
                        source.loop = false;
                    });
            source.start(0);
        });
        xhr.send();
    });
</script>
</audio>
<section id="form-main">
<div id="heading"><h1 style="text-align:left;float:left;font-size:40;display:block;letter-spacing:1px;">
    PROBLEMS?</h1><br>
<span>Tell us all the problems<br> <br>that you face in this society ;<br><br>
 that you face in day to day life ;<br><br> that you cannot share freely to anyone.<br><br>
 Feel free. You are Anonymous.</span></div>
 
<form id="form" action="" method="post">
<h1 style="font-size:20px">All the report entered here are completely anonymous.
We dont save your reports. Directly we mail them to concerned officials.</h1><br>
<label for="problem" id="label" required>Problem :</label><br><br>
<textarea name="problem" rows="4" cols="30"></textarea><br><br>
<input type="submit" onlick="myFunction()" name="submit" value="report"><br>
</form>

</section>

	
<?php
}
?>
<section id="main">
<div class="inner" style="background-color:rgba(255,255,255,0.3);">
    <table style="width:100%">
        <tr>
            <th><br></th>
            <th><br></th>
            <th><br></th>
        </tr>
        <tr>
            <td>     </td>
            <td><iframe style="align:center;" width="560" height="315"
src="https://www.youtube.com/embed/s0_G-Kk6-Yg"
 frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></td>
            <td style="color:rgba(1,1,1,0.5);text-align:center;outline-offset:5px;font-family:Comic Sans MS;font-weight:500;font-size:60;display:block;line-spacing:1px;">
			Unless You Change, How Can You Expect It?
		</td>
        </tr>
    </table>
 <br>
</div></section>
<footer style="background-color:rgba(1,1,1,0.6);" id="footer">
<p style=""> This page is created to help those girls who are in need of help but cant ask it out loud.</p>
</footer>
</body>
</html>
