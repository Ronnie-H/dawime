
<?php
$connect_mysql=mysqli_connect("localhost","root","","dance");

echo("Hello");

if(!$connect_mysql)
{
    alert("Connection Failed" . mysqli_connect_error());
}

$tickets=$_POST['tot_ticket_requested'];
$total=$_POST['tot_price'];
$event=$_POST['event'];
$mail=$_POST['email'];
$pnum=$_POST['pnum'];


$sql="INSERT INTO ticket_details(num_tickets,tot_price,event,mail,pnumber) values('$tickets','$total','$event','$mail','$pnum')";


// Print auto-generated id
echo "New record has id: " . mysqli_insert_id($connect_mysql); 


if(mysqli_query($connect_mysql,$sql))
{
        header("Location:payment.php");
}
else {
	/**header("Location:Signup.php?msg=Email ID already exist! Please try again");**/
	die(mysqli_error($connect_mysql));
}


?>