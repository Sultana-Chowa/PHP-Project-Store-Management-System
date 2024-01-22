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
    $product_id=$_POST['product_id'];
    $customer_id=$_POST['customer_id'];
    $date=$_POST['date'];
    $s_quantity=$_POST['s_quantity'];
    
    $myquery="INSERT INTO sell(product_id,customer_id,date,s_quantity) VALUES('$product_id','$customer_id','$date',' $s_quantity')";
    $my_query = "UPDATE product inner join sell on product.p_id= $product_id SET product.p_quantity = product.p_quantity-$s_quantity";
    
    if(mysqli_query($connection, $myquery)){
        if($connection->query($my_query)){
            $view = "insert into price_cal (cus_id,p_date,price_sum, sell_id) select sell.customer_id, sell.date, sell.s_quantity*product.p_price, sell.s_id from sell inner join product on product.p_id = '$product_id' and date='$date'";
    $result = mysqli_query($connection, $view);


            header("Location: http://localhost/STORE_MANAGEMENT/sell_info.html");        
      } 
    }
        
    else{
        echo "\nNot Inserted";
    }   
}
$connection->close();
?>