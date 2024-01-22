<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Management System</title>
    <style>
      h1{
        color:rgb(0, 11, 12);
        margin-top: 10px;
        padding: 20px;
        font-size: 50px;    
      }
      p{
        color: rgb(0, 0, 0); 
        font-size: 20px;
      }
      button{
    width: 350px;
    padding: 3px 0;
    text-align: center;
    margin: 20px 10px;
    font-weight: bold;
    background: transparent;
    color: black;
    font-size: 25px;
    font-family: 'Times New Roman', Times, serif;
}
body{
  margin-right: auto;
    margin-left: auto;
    text-align: center;
    border: 5px solid rgb(168, 231, 200);
    height: 450px;
    width: 550px;
}
      </style>
</head>
<body style="background-color: rgb(168, 231, 200);">

<h1 style="border: black;">
<center>
<h1>Displayed Information</h1>
</center> 
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store_management_system";

$connection= new mysqli($servername,$username,$password,$dbname);

if($connection==false){
    die("Connection Failed".mysqli_connect_error());
}
else{
    
    $sell_id=$_POST['sell_id'];
    $date=$_POST['date'];


    $view = "CALL price_calculator('$sell_id', '$date')";
    $resultt = $connection->query($view);
    $sql = "SELECT distinct* FROM pricecus WHERE sell_id = '$sell_id' and p_date='$date'";
    $result = $connection->query($sql);
    if(mysqli_num_rows($result)>0){
      while($row = $result->fetch_assoc()) {
      
        echo "<p>Display Data of Sell Id: ".$sell_id. "</p>";  
        echo  "<p><br>"."Customer ID: " . $row["c_id"]. "<br>". "Customer Name: " . $row["c_name"]. "<br>". "Total cost: " . $row["price_sum"]. "<br>". "Date: " . $row["p_date"]. "<br></p>";
        echo "<br>";
      
      }
  }
  else{
      echo "Data Not Found";
  }

}

$connection->close();
?>
<center>
  <a href="http://localhost/STORE_MANAGEMENT/sell_info.html">
               <button type="button">Go Back To Home Page</button>
             </a>
</h1>
</center>
</body>
</html>
