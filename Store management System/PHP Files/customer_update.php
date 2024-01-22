<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store_management_system";

$connection= new mysqli($servername,$username,$password,$dbname);

if($connection==false){
    die("Connection Failed".mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Store Management System</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    
.bs-example{
margin: 20px;
color: white;
}
tr{
    color:rgb(0, 11, 12);
        margin-top: 10px;
        padding: 20px;
        color: white;
        background-color: rgb(1, 178, 89);
}
body{
    background-color: black;
}
button{
    width: 250px;
    padding: 3px 0;
    text-align: center;
    margin: 20px 10px;
    font-weight: bold;
    border: 2px solid rgb(1, 178, 89);
    background: transparent;
    color: white;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
}


</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});

</script>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Customer Details Insertion Lists</h2>
</div>
<?php

$result = mysqli_query($connection,"SELECT * from customer_trig_up");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
<td>Customer Id</td>
<td>Customer Name</td>
<td>Customer Address</td>
<td>Customer  Number</td>
<td>Date & Time</td>
<td>Event</td>




</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["c_id"]; ?></td>
<td><?php echo $row["c_name"]; ?></td>
<td><?php echo $row["c_address"]; ?></td>
<td><?php echo $row["c_number"]; ?></td>
<td><?php echo $row["time"]; ?></td>
<td><?php echo $row["event"]; ?></td>


</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>        
</div>
</div>
<center>
  <a href="http://localhost/STORE_MANAGEMENT/customer_history.html">
               <button type="button">Go Back To Home Page</button>
             </a>
</h1>
</center>
</body>
</html>