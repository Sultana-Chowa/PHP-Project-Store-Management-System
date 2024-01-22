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
    $p_name=$_POST['p_name'];
    $p_quantity=$_POST['p_quantity'];
    $p_price=$_POST['p_price'];
    $s_quantity=$_POST['s_quantity'];

    $myquery="INSERT INTO product(p_name,p_quantity,p_price) VALUES('$p_name',' $p_quantity',' $p_price')";

    ///$updated = $p_quantity-$s_quantity;

    /////$my_query = "UPDATE product inner join sell on product.p_id= sell.'$product_id' SET product.p_quantity = '$updated'";


    if(mysqli_query($connection,$myquery)){
        echo "Inserted";
        header("Location: http://localhost/STORE_MANAGEMENT/goback_.html");
    }
    else{
        echo "\nNot Inserted";
  
    }
}

?>