<!DOCTYPE html>
<html>
<head>
  <?php include "bootstrap.php"?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About DaWiMe</title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.85;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("img/d6.jpg");
  min-height: 20%;
}



.bgimg-3 {
  background-image: url("img/d6.jpg");
  min-height:  30%;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    height: auto;
  
}


</style>
</head>
<body>

<div class="bgimg-1">
  <?php include "header.php"?>
  <div class="caption">
  <span class="border">VENUES</span>
  </div>
</div>




  <div >
       <?php include "info.php" ?>
  </div>





<div class="bgimg-3">
   <div class="caption">
  <span class="border">SALSA TRAINERS</span>
  </div>
</div>




  <div>
     <?php include "trainers.php" ?>
  </div>

          

</body>
</html>