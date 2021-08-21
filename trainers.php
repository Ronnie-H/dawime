<!DOCTYPE html>
<html>
<head>
	 <?php include "bs1.php"?>
	<title></title>
	<style type="text/css">

.trainers {
  background-color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Roboto', sans-serif;
  height: 70vh;
  margin: 0;
  padding: 0;
}		
		
.container {
  position: relative;
  height: 350px;
  width: 240px;
  overflow: hidden;
  box-shadow: 0px 2px 5px rgba(0,0,0,0.3);
  transition: box-shadow 0.3s ease-out;
  border-radius: 15px 50px;
}

.container:hover {
  box-shadow: 1px 2px 10px rgba(0,0,0,0.5);
}

.img-container {
  background-color: transparent;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  transition: transform 0.3s ease-out;
  z-index: 2;
}

.img-container:hover {
	cursor: pointer;
}

.container:hover .img-container {
	transform: translateY(-100px);
}

.img-container > img {
  height: 100%;
  width: 100%;
  transition: opacity 0.3s ease-out;
}

.container:hover > .img-container > img {
  opacity: 0.5;
}

.social-media {
  display: flex;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  z-index: 3;
  margin: 0;
  padding: 0;
}

.social-media > li {
  list-style: none;
}

.social-media > li > a {
  display: block;
  height: 50px;
  width: 50px;
  background-color: #FFF;
  text-align: center;
  color: #262626;
  margin: 0 5px;
  border-radius: 50%;
  opacity: 0;
  transform: translateY(200px);
  transition: all 0.3s ease-out;
}

.container:hover > .social-media > li > a {
  transform: translateY(0);
  opacity: 1;
}

.social-media > li > a > .fa {
  font-size: 24px;
  line-height: 50px;
  transition: transform 0.3s ease-out;
}

.social-media > li > a:hover > .fa {
  transform: rotateY(360deg);
}

.container:hover .social-media li:nth-child(1) a {
	transition-delay: 0s;
}

.container:hover .social-media li:nth-child(2) a {
	transition-delay: 0.1s;
}

.container:hover .social-media li:nth-child(3) a {
	transition-delay: 0.2s;
}

.container:hover .social-media li:nth-child(4) a {
	transition-delay: 0.3s;
}

.container:hover .social-media li:nth-child(5) a {
	transition-delay: 0.4s;
}

.user-info {
  position: absolute;
	bottom: 0;
	left: 0;
	background-color: #FFF;
	height: 100px;
	width: 100%;
	box-sizing: border-box;
	padding: 10px;
  text-align: center
}

.user-info > h3 {
  padding: 0;
  margin: 5px 0;
}

.user-info > span {
  color: #262626;
  font-size: 16px;
}

	</style>
</head>
<body>
     
 <section class="trainers">
 <div class="container">
  <div class="img-container">
    <img src="img\dan.png" alt="">
  </div>
  <ul class="social-media">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		</ul>
		<div class="user-info">
			<h3>Allan & Dancan </h3>
      <span>Nairobi Dance Project(NDP)</span>
		</div>
</div>


 <div class="container">
  <div class="img-container">
    <img src="img\sungu.png" alt="">
  </div>
  <ul class="social-media">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		</ul>
		<div class="user-info">
			<h3>Lynda Sungu</h3>
      <span> Kike </span>
		</div>
</div>


 <div class="container">
  <div class="img-container">
    <img src="img\omera.png" alt="">
  </div>
  <ul class="social-media">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		</ul>
		<div class="user-info">
			<h3>Omera</h3>
      <span>Latin Saturdays</span>
		</div>
</div><br>


 <div class="container">
  <div class="img-container">
    <img src="img\munga.png" alt="">
  </div>
  <ul class="social-media">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		</ul>
		<div class="user-info">
			<h3>Marion Munga</h3>
      <span>Kike </span>
		</div>
</div><br>


 <div class="container">
  <div class="img-container">
    <img src="img\dave.png" alt="">
  </div>
  <ul class="social-media">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		</ul>
		<div class="user-info">
			<h3>Dave Koech</h3>
      <span>Urban Movement</span>
		</div>
</div><br>


</section>


</body>
</html>
