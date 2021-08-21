<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="https://daks2k3a4ib2z.cloudfront.net/560eb94ab52962bd77dfcf14/js/webflow.57f4ffb2a.js" type="text/javascript"></script>

  
    <?php include "bs1.php"?>
	<title>Ticket download</title>
	<style type="text/css">
	.container{

        margin: 30px;
        border-color: darkgrey;
        background-color: lightgrey;
        border: 2px;
        border-radius: 5px;
        position: static;
       
    }
     .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
    }
    
    label{ margin-right: 15px;
    color: black; }

    h2{ color: black; }

    img {
    padding: 2px;
    width: 90px;
    height: 60px;
    }
    .options{
        margin: 25px;

        }
    body{
    	background-image: url("img/d10.jpg");
    	background-size: cover;
    	background-position:center ;
    }
    h1{
    	color: white;
    }


.center {
margin: auto;
width: 60%;
border: 5px solid #FFFF00;
padding: 10px;
margin-top: 50px;
}
        </style>
</head>
<body>

<center>
 <div class="container center"  ><br>

	
    <?php

$connect_mysql=mysqli_connect("localhost","root","","dance");


/**TO DISPLAY THE MOST RECENT ROW ENTERED IN THE DB**/
$query = "SELECT * FROM `ticket_details` ORDER BY ID DESC  LIMIT 1;" ;


$query_run = mysqli_query($connect_mysql,$query) or die( mysqli_error($connect_mysql));

while($row = mysqli_fetch_assoc($query_run)) 

           {
?>
<center><caption> Your Ticket</caption></center>

<table class="table  table-striped table-hover table-bordered" id="data">
 <br>
  <tbody>
   
      
      <tr>
      	 <th scope="col">Ticket Id</th>
           <td><?php echo $row['id']; ?></td>
      </tr>

       <tr>
          <th scope="col">No. of tickets</th>
       <td><?php echo $row['num_tickets']; ?></td>
      </tr>

       <tr>
      <th scope="col">Total Price</th>
           <td><?php  echo $row['tot_price']; ?></td> 
      </tr>

       <tr>
      	 <th scope="col">Event</th> 
      	 <td> <?php echo $row['event']; ?></td>
      </tr>

       <tr>
      	 <th scope="col">Email</th>
          <td><?php echo $row['mail']; ?></td>
      </tr>

       <tr>
     <th scope="col">Phone Number</th>
            <td><?php  echo $row['pnumber']; ?></td>
      </tr>




    
  </tbody>
</table>


  
<?php
}

  mysqli_close($connect_mysql)
?>


</div>
</center>

</body>
</html>