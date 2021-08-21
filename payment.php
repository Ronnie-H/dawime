<!DOCT YPE html>
<html>
<head>
	<title>Pay</title>
	<?php include "bs1.php"?>
	<?php include "javascript.php"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
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
    	background-image: url("img/s1.jpg");
    	background-size: cover;
    	background-position:center ;
    }
    h1{
    	color: white;
    }
        

</style>
</head>
<body>
     <?php include "header.php"?>  
     <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Checkout Page</h1>

 <div class="container col-sm-8" ><br>

 <br> 

    <?php

$connect_mysql=mysqli_connect("localhost","root","","dance");


/**TO DISPLAY THE MOST RECENT ROW ENTERED IN THE DB**/
$query = "SELECT id,event,num_tickets,tot_price FROM ticket_details ORDER BY ID DESC  LIMIT 1;" ;


$query_run = mysqli_query($connect_mysql,$query) or die( mysqli_error($connect_mysql));

while($row = mysqli_fetch_assoc($query_run)) 

           {
?>
  
<table class="table table-striped">
    <thead>
      <tr>
      
        <th>Event</th>
        <th>Tickets</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       
        <td> <?php echo $row['event']; ?></td>
        <td><?php echo $row['num_tickets']; ?></td>
        <td><?php  echo $row['tot_price']; ?></td>
      </tr>
    </tbody>
</table>     

   
<?php
}
  mysqli_close($connect_mysql)
?>

<br>

     <p><b>Choose your payment option below</b></p>
     <div class="options">
        <label><input type="radio" name="payOption" value="creditcard"><img src="img/creditcard.png"></label>
        <label><input type="radio" name="payOption" value="mpesa"> <img src="img/mpesa.png"></label>
        <label><input type="radio" name="payOption" value="paypal"> <img src="img/paypal.jpg"></label>
    </div>
           <div class="row">
          <div class="col-sm-8">

			    <div class="creditcard box">
			    	
                <!-- CREDIT CARD FORM STARTS HERE -->
                          <div  kclass="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h2 class="panel-title display-td" ><center><b>Payment Details</b></center></h2>
                                                 
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" action="success.php" onsubmit="return checkForm(this);">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" id="num" autocomplete="cc-number" required autofocus />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="cardExpiry"
                                        placeholder="MMYY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                    <div class="form-group">
                                        <label for="cardCVC">CV CODE</label>
                                        <input 
                                            type="tel" 
                                            class="form-control"
                                            name="cardCVC"
                                            id="cvc";
                                            placeholder="CVC";
                                            autocomplete="off";
                                            required
                                        />
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="name">CARD HOLDER NAME</label>
                                    <input type="text" class="form-control" name="cardname" placeholder="Valid Card Holder Name" required />
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-success btn-lg btn-block" type="submit"  style="background-color: #2675aed9;">Pay</button>
                                <a id="suc" href="ticktdownload.php"></a>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            	
        <!--CREDIT CARD ENDS HERE-->   
			    </div>

                <style type = "text/css" >
        .form-style {
            font: 95% Arial, Helvetica, sans-serif;
            max-width: 400px;
            margin: 10px auto;
            padding: 16px;
            background: #F7F7F7;
        }

        .form-style h1 {
            background: #fff;
            padding: 20px 0;
            font-size: 140%;
            font-weight: 300;
            text-align: center;
            color: #000;
            margin: -16px -16px 16px -16px;
        }

        .form-style input[type="text"],

        .form-style input[type="number"],

        .form-style select {
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            outline: none;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            background: #fff;
            margin-bottom: 4%;
            border: 1px solid #ccc;
            padding: 3%;
            color: #555;
            font: 95% Arial, Helvetica, sans-serif;
        }

        .form-style input[type="text"]:focus,

        .form-style input[type="number"]:focus,

        .form-style textarea:focus,
        .form-style select:focus {
            box-shadow: 0 0 5px #43D1AF;
            padding: 3%;
            border: 1px solid #43D1AF;
        }

        .form-style input[type="submit"],
        .form-style input[type="button"] {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            padding: 3%;
            background: rgb(50,142,179);
            border-bottom: 2px solid blue;
            border-top-style: none;
            border-right-style: none;
            border-left-style: none;
            color: #fff;
        }

        .form-style input[type="submit"]:hover,
        .form-style input[type="button"]:hover {
            background: blue;
        }

    </style>

    <div class="mpesa box">

    <form action="#" method="post" class="form-style" id="form-mpesa">
        <h1>Mpesa</h1>
            <input type="number" name="phone" placeholder="Phone (+254)" />
            <input type="number" name="amount" placeholder="Amount" />
           <input type="submit" value="Send" /><a id="suc" href="ticktdownload.php"></a>
           <h4 id="mpesa_text"></h4>
    </form>

<script type="text/javascript">
    $('#form-mpesa').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url:'mpesa2.php',
            data:$('#form-mpesa').serialize(),
            beforeSend:function(){
                $('#mpesa_text').html('<div class="badge badge-danger">PLEASE WAIT</div>');
                console.log($(this).serialize());
            },
            success:function(data){
                $('#mpesa_text').html('<div class="badge badge-success">YOU HAVE SUCCESSFULLY PAID</div>');
                //$('#mpesa_text').html(data);
                window.location.href = "ticktdownload.php";
            }
        });


    });
</script>

    </div>


    
    <div class="paypal box">
    	 <div id="paypal-button-container"></div>
          <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
          <script>
            paypal.Buttons({
                style: {
                    shape: 'pill',
                    color: 'blue',
                    layout: 'vertical',
                    label: 'paypal',
                    
                },
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '1'
                            }
                        }]
                    });
                },
          onApprove: function(data, actions) {
              return actions.order.capture().then(function(details) {
                  alert('Transaction completed by ' + details.payer.name.given_name + '!');
              });
          }
      }).render('#paypal-button-container');
    </script>
                 <!--PAYPAL ENDS HERE-->
            </div>
    </div>
</div>




 <div class="col-sm-4">
</div>



 </div>



</body>
</html>