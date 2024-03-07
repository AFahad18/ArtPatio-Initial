<!DOCTYPE html>
<html>
<head>

<style type="text/css">

	.brand{
    		background: whitesmoke !important;
    		
    	}
    	.brand-text{
    		color:black;
    		text-align: center;

    	}

	.text-center {
  width: 100%;
  height: 520px;
  position: absolute;
  left: 50%;
  top: 55%;
  margin-top: 20px;
  transform: translate(-50%,-50%);
  background-image: url('2.jpg');
  background-size: 100% 100%;
  box-shadow: 1px 2px 10px 5px #375554;
  animation: slider 20s infinite linear;
  opacity: 0.7;

}

@keyframes slider{
	30%{ background-image: url('3.jpg'); }
	60%{ background-image: url('4.png'); }
	/*40%{ background-image: url('8.jpg'); }
	60%{ background-image: url('12.jpg'); }
	80%{ background-image: url('10.jpg'); }
	100%{ background-image: url('13.jpg'); }*/
	
	
}

.textHomePage{
	color: white;
	font-size: 28px;
	text-align: center;
	position: absolute;
	margin-top: 200px;
	margin-left: 150px;
	background-color: #488280;
	opacity: 0.7;
}


/*new css*/

   {
        box-sizing: border-box;
   }
.hor{
	height: 3px;
	margin-top: 2px;
	background-color: white;
}
.icon{
	margin-bottom: 0px;
	background-color: #488280;

}
.img1{
	height: 400px;
	width: 50%;
	margin-left: 20px;
	text-align: left;
	margin-top: 600px;
	box-shadow: 1px 2px 10px 5px #375554;
}

.img1text{
	text-align: left;
	margin-left: 720px;
	margin-top: -350px;
}
.hor1{
	height: 2px;
	margin-top: 600px;
	background-color: #488280;
}
.intro{
	margin-top: -525px;
}

.hor2{
	height: 2px;
	margin-top: 200px;
	background-color: #488280;
}

.social{
	margin-left: 44.5%;
	margin-bottom: 10px;
	width: 150px;
}

.image1{
	height: 50px;
	width: 40px;
	margin-right: 10px;
}

.image2{
	height: 50px;
	width: 40px;
	margin-left: 10px;
}
.image3{
	height: 50px;
	width: 40px;
}

.fa:hover {
    opacity: 0.7;
}


.about{
	margin-top: 50px;
	display: flex;
}
.hor3{
	height: 2px;
	margin-left: 0px;
	background-color: #488280;
	width: 150px;
	text-align: left;
}


.au{
	margin-left: 20px;
	color: #375554;
	margin-top: 60px;
}
.au:hover{
	text-shadow: 3px 3px 8px #488280;
/*	letter-spacing: 3px;*/
}

#more {display: none;}
.acg{
	margin-left: 20px;
	margin-right: 25px;
}

.img{
	height: 450px;
	width: 400px;
}
.img:hover{
	box-shadow: 1px 2px 10px 5px #375554;
}

.moretxt{
	text-align: left;
	width: 400px;
}

#more2 {display: none;}

.boxtext{
	color: #375554;
	margin-bottom: 10px;
}
.boxtext:hover{
/*	letter-spacing: 4px;*/
	color: #488280;
}
#more3 {display: none;}

.rdbutton:hover{
	background-color: #488280;
	color: white;
	box-shadow: 1px 2px 10px 5px #375554;
}







 </style>


</head>


	<?php include('header.php') ?> 

<hr class="hor">
<div class="text-center">
	
</div>


 
<h3 class="textHomePage">
	"The artist is a receptacle for emotions that come from all over the place: from the sky,<br>from the earth, from a scrap of paper,from a passing shape,<br>from a spider's web. Inspiration exists, <br>but it has to find you working"<br>
	-PABLO PICASSO
</h3>

<!-- new code -->


	<hr class="hor1">
	<div class="intro">
		<img class="img1" src="image/1.png">
	<h5 class="img1text">
	Art is the maneuver where human demonstrates their own thought, viewpoint, concepts through creative and imaginative talent. It is the unique sector where we get the opportunity to see how beguiling human brain works
	To preserve this field in a way that creativeness gets the highest priority along with technological benefit we decided to create “ART PATIO”. It is a digital platform where artist like you can represent your visionary to the whole world.
</h5>
	</div>
<hr class="hor2">

<!-- about -->

<h5 class="au">Our Services: <hr class="hor3"></h5>
<div class="about">
	
	<div class="acg">
		<h5 class="boxtext">Artist:</h5>
		<img class="img" src="image/art2.png">
		<p class="moretxt">
		<span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
		<button class="rdbutton" onclick="myFunction()" id="myBtn">Read more</button>


	</div>

	<div class="acg">
		<h5 class="boxtext">Customer:</h5>
		<img class="img" src="image/customer.jpg">
		<p class="moretxt">
		<span id="more2">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
		<button class="rdbutton" onclick="myFunction2()" id="myBtn2">Read more</button>


	</div>

	<div class="acg">
		<h5 class="boxtext">Gallery:</h5>
		<img class="img" src="image/gallery.jpg">
		<p class="moretxt">
		<span id="more3">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
		<button class="rdbutton" onclick="myFunction3()" id="myBtn3">Read more</button>


	</div>





</div>



<script>
function myFunction() {
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (more.style.display === "none") {
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  } else {
    moreText.style.display = "none";
    btnText.innerHTML = "Read more";    
  }
}

function myFunction2() {
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  if (more2.style.display === "none") {
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  } else {
    moreText.style.display = "none";
    btnText.innerHTML = "Read more";    
  }
}

function myFunction3() {
  var moreText = document.getElementById("more3");
  var btnText = document.getElementById("myBtn3");

  if (more3.style.display === "none") {
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  } else {
    moreText.style.display = "none";
    btnText.innerHTML = "Read more";    
  }
}


</script>
<?php include('footer.php') ?> 
</html>