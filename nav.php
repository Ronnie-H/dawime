<div id="header"> 


   <div id="small-screen-nav">
    <div id="close"></div>0
    <ul id ="small-ul">
      <li><a  href="about.php">Venues & Trainers</a></li>
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

  <div id="container">
    
    <ul id="full-ul">
      <li><a href="#" class="navbar-brand">
      <img src="img/logo2.png" height="30px" width="30px">
        <span class="text-uppercase font-weight-bold">Home</span>
    </a></li>  
      <li><a  href="about.php">Venues & Trainers</a></li>
      <li><a href="ticket.php">Tickets</a></li>

       <?php 
                if(isset($_SESSION['mail']))
                    {
                         echo '  <li><a href="signout.php">Sign Out</a></li>'; 
                    }
                    else{
                          echo ' <li><a href="Sign in.php">Sign In</a></li>';
                    }
    ?>

    </ul>
      <div id="nav-icon"></div>
  </div>
</div>

