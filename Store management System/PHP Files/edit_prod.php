<?php
echo " <h1>Insert Data into Database</h1>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store_management_system";

$connection= new mysqli($servername,$username,$password,$dbname);

if($connection==false){
    die("Connection Failed".mysqli_connect_error());
}
else{
    $p_id=$_POST['p_id'];
    $p_name=$_POST['p_name'];
    $p_quantity=$_POST['p_quantity'];
    $p_price=$_POST['p_price'];

    $myquery="UPDATE product SET p_name = '$p_name', p_quantity = '$p_quantity', p_price='$p_price' WHERE p_id='$p_id';";

    if(mysqli_query($connection,$myquery)){
        echo "Deleted";
        header("Location: http://localhost/STORE_MANAGEMENT/goback_.html");
        exit();
    }
    else{
        echo "\nNot Inserted";
    }
}

?>