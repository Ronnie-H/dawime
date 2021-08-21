 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="https://daks2k3a4ib2z.cloudfront.net/560eb94ab52962bd77dfcf14/js/webflow.57f4ffb2a.js" type="text/javascript"></script>
  <?php include "session.php"?>
  <link href="img/l4.png" rel="shortcut icon" type="image/x-icon">
  <title>DaWiMe</title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  padding: 0;


}

.bg-image {
  /* Full height */
  height: 50%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

/* Images used */
.img1 { background-image: url("img/d9.jpg"); }
.img2 { background-image: url("img/d11.jpg"); }

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 80px;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 300px;
  padding: 20px;
  text-align: center;
}

/*Navbar stuff*/
.top-menu {
    position: fixed;
    top: -65px;
    left: 0;
    width: 100%;
    padding: 10px 0;
    background: transparent;
      transition: all .5s cubic-bezier(0.250, 0.250, 0.750, 0.750);
}
 
.top-menu.active {
    top: 0;
}
 
.top-menu .components {
    max-width: 1140px;
    margin: 0 auto;
    overflow: hidden;
}
 
.top-menu .logo {
    float: left;
    width: 20%;
    text-align: left;
}
 
.top-menu .logo a {
    display: inline-block;
    width: 123px;
    height: 40px;
    background: url(img/l1.png) ;
    border: 0;
  
}
 
.top-menu .navigation {
    float: left;
    width: 70%;
    text-align: right;
}
 
.top-menu .navigation li {
    display: inline-block;
    border-right: 3px solid #fff;
}
 
.top-menu .navigation li a {
    display: inline-block;
    padding: 5px 10px;
    color: #fff;
    border: 0;
    text-decoration: none;
}
 
.top-menu .navigation li a:hover,
.top-menu .navigation li a:focus {
    color: #ccc;
    border: 0;
    outline: 0;
}
/* Hamburger button code */
 
.hamburger-button {
    position: relative;
    max-width: 1140px;
    margin: 0 auto;
}
 
.hamburger-button button {
    position: absolute;
    top: 10px;
    right: 0;
    width: 40px;
    height: 40px;
    background: none;
    border: 0;
    box-shadow: none;
    cursor: pointer;
    vertical-align: middle;
    z-index: 999;
}
 
.hamburger-button button:focus {
    outline: 0;
}
 
.hamburger-button button span {
    display: block;
    width: 80%;
    height: 2px;
    margin: 5px auto;
    background: #fff;
    transition: all .8s cubic-bezier(0.250, 0.100, 0.250, 1.000);
}
 
.hamburger-button button:hover span,
.hamburger-button button:focus span {
    background: #ccc;
}
 
/* rotate first span */
.hamburger-button button span:first-of-type {
    transform: rotate(45deg) translate(5px, 5px);
}
 
/* hide second span */
.hamburger-button button span:nth-of-type(2) {
    opacity: 0;
}
 
/* rotate third span */
.hamburger-button button span:last-of-type {
    transform: rotate(-45deg) translate(5px, -5px);
}
 
.hamburger-button button.menu-closed span {
    transform: none;
    opacity: 1;
}
@media (min-width: 992px) and (max-width: 1199px) {
 
    .top-menu .components {
        max-width: 992px; padding-left: 15px; padding-right: 15px;
    }
 
    .hamburger-button { max-width: 992px; }
    .hamburger-button button { right: 15px; }
     
}
 
@media (min-width: 768px) and (max-width: 991px) {
 
    .top-menu .components {
        max-width: 768px; padding-left: 15px; padding-right: 15px;
    }
 
    .hamburger-button { max-width: 768px; }
    .hamburger-button button { right: 15px; }
 
}
 
@media (max-width: 767px) {
     
    .top-menu { top: 0; }
 
    .top-menu.active {
        top: -300px;
        transition: all 1.2s cubic-bezier(0.250, 0.250, 0.750, 0.750);
    }
 
    .top-menu .components { max-width: 100%; padding-top: 50px; }
    .top-menu .logo { float: none; width: 100%; text-align: center; }
    .top-menu .navigation { float: none; width: 100%; text-align: center; }
 
    .hamburger-button { width: 40px; }
 
    .hamburger-button button span:first-of-type { transform: none; opacity: 1; }
    .hamburger-button button span:nth-of-type(2) { transform: none; opacity: 1; }
    .hamburger-button button span:last-of-type { transform: none; opacity: 1; }
 
    .hamburger-button button.menu-closed span:first-of-type {
        transform: rotate(45deg) translate(5px, 5px);
    }
    .hamburger-button button.menu-closed span:nth-of-type(2) {
        opacity: 0;
    }
    .hamburger-button button.menu-closed span:last-of-type {
        transform: rotate(-45deg) translate(5px, -5px);
    }
 
    .page-content { padding-top: 80px; padding-bottom: 60px; }
 
}
</style>
</head>
<body>

<div class="bg-image img1">

 <nav class="top-menu active">
 
        <div class="components">
 
            <div class="logo">
                <a href="index.php"></a>
            </div>
 
            <ul class="navigation">
                <li><a href="about.php">Venues & Trainers</a></li>
                <li><a href="ticket.php">Tickets</a></li>
                 <?php 
                if(isset($_SESSION['mail']))
                    {
                         echo '  <li><a class="glyphicon glyphicon-user"href="signout.php">Sign Out</a></li>'; 
                    }
                    else{
                          echo ' <li><a href="Sign in.php">Sign In</a></li>';
                    }
    ?>
            </ul>
 
        </div>
 
    </nav>
 
    <div class="hamburger-button">
        <button type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</div>

<div class="bg-image img2"></div>

<div class="bg-text">Dance With Me</div>
<script type="text/javascript">
  $('.hamburger-button button').on('click', function(){
    $('.top-menu').toggleClass('active');
    $(this).toggleClass('menu-closed');
});
</script>

</body>
</html>