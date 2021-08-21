<!DOCTYPE html>
<html>
<head>
  <meta charset= "utf-8">
  <title>Event Tickets</title>
   <?php require_once "session.php";?>
  <?php require_once "bs1.php";?>
  <?php include "javascript.php";?>

  <style type="text/css">
    body, html {
  height: 70%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}


 .bg-1 { background: url("img/d1.jpg");
            background-size: cover;
}
.bg-1 h1 {color:black;
           font-family: sans-serif;}
.bg-1 h3 {font-style: italic;}
     .container {
    padding: 50px 120px;
    color: lightgrey;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
     /* Remove rounded borders from list */
.list-group-item:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}

.list-group-item:last-child {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

/* Remove border and add padding to thumbnails */
.thumbnail {
  padding: 0 0 15px 0;
  border: none;
  border-radius: 0;
}

.thumbnail p {
  margin-top: 15px;
  color: #555;
}

/* Black buttons with extra padding and without rounded borders */
.btn {
  padding: 10px 20px;
  background-color: #333;
  color: #f1f1f1;
  border-radius: 0;
  transition: .2s;
}

/* On hover, the color of .btn will transition to white with black text */
.btn:hover, .btn:focus {
  border: 1px solid #333;
  background-color:#ffc5b4;
  color: #000;
} 

/* Add a red background color to the modal header and center text */
.modal-header, h4, .close {
  background-color: #b91919;
  color: #fff !important;
  text-align: center;
  font-size: 30px;
}

.modal-header, .modal-body {
  padding: 40px 50px;
}
.btn{
  background-color: #b91919;

}

select {
width: 240px;
height: 35px;
width: 100%;
   box-sizing: border-box;
  margin: 0;
  border: 1px solid #aaa;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  border-radius: .3em;

}
.total{
  width: 250px;
  height: 36px;
   box-sizing: border-box;
  margin: 0;
  border: 1px solid #aaa;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  border-radius: .3em;
}
  #foo {
    position: absolute;
    bottom: 100px;
    right: 0;
  }
  </style>
</head>
<body>
<div class="bg-1">
    <?php require_once "header.php";?>
  <div class="container" id="events">
    <h1 class="text-center"><b>QUARTERLY EVENT DATES</b></h1>
    <h3 class="text-center" >Pick an event <br> then proceed to buy a ticket</h3><br><br>
   
    
    <div class="row text-center" >
      <div class="col-sm-4" name="selectedevent" id="joburg">
        <div class="thumbnail">
          <img src="img/joburg.png" alt="Johanessburg" width="400" height="300">
          <p><strong>Afro Joburg</strong></p>
          <p>Fri. 23  - Sun. 25 </p>
          <p> April 2021</p>
          <button class="btn" data-toggle="modal"  onclick="calculateTotal()" data-target="#myModal" >Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4" name="selectedevent"  id="morabeza">
        <div class="thumbnail">
          <img src="img/morabeza.jpg" alt="Morabeza" width="400" height="300">
          <p><strong>Morabeza Weekend</strong></p>
          <p>Fri. 23 - Sun. 25</p>
          <p>August 2021</p>
          <button class="btn" data-toggle="modal"  onclick="calculateTotal()"  data-target="#myModal" >Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4" name="selectedevent"  id="juba">
        <div class="thumbnail">
          <img src="img/juba.jpg" alt="Juba" width="400" height="300">
          <p><strong>Afro Latin</strong></p>
          <p>Fri. 14 - Sun. 16 </p>
          <p>April 2021</p>
         <button class="btn" data-toggle="modal"  onclick="calculateTotal()"  data-target="#myModal" >Buy Tickets</button>
        </div>
      </div>
      <div id="foo"> 
       <a href="https://wa.link/t4rwic" class="navbar-brand">
      <img src="img/cht4.png" height="100" width="100">
            </a></div>
    </div>
    
  </div>
 <?php 
                if(isset($_SESSION['mail']))
                    {
                         echo '  href = "payment.php"'; 
                    }
                    else{
                          echo ' href = "Sign in.php"';
                    }
    ?>


  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="sendticket.php" method="POST">
            <div class="row">
             <div class="col-sm-6" >
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets Sh.400 per person</label><br>
              <select   name="tot_ticket_requested"  onchange="calculatePrice(this.value)" required  >
                   <option value="" disabled selected>How Many?</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                   </select>
             </div>
             <div >
                <label for="total">Total</label><br>
                <input class="total" name="tot_price" id="tot_price" type="text" readonly="utf-8">
              </div>
            </div>&nbsp
           <div class="form-group">
              <label for="event" ><span class="glyphicon glyphicon-calendar"></span>Choose Event</label>
                   <select type="text" id="event" name="event" required>
                    <option value="Morabeza">Morabeza</option>
                    <option value="Juba">Afro Juba</option>
                    <option value="Joburg">Jo'burg</option>
                  </select> 
            </div> 
            <div class="form-group">
              <label for="email" ><span class="glyphicon glyphicon-envelope"></span>Send To</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
            </div>
            <div class="form-group">
              <label for="pnum"><span class="glyphicon glyphicon-earphone"></span>Phone Number</label>
              <input type="text" class="form-control" name="pnum" placeholder="Enter number" required="">
            </div>
              <button type="submit" class="btn btn-block" >Pay
                <span class="glyphicon glyphicon-ok"></span>
              </button>

          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>