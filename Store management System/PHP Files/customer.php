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
    $c_name=$_POST['c_name'];
    $c_address=$_POST['c_address'];
    $c_number=$_POST['c_number'];

    $myquery="INSERT INTO customer(c_name,c_address,c_number) VALUES('$c_name',' $c_address',' $c_number')";

    if(mysqli_query($connection,$myquery)){
        echo "Inserted";
        header("Location: http://localhost/STORE_MANAGEMENT/goback.html");
        exit();
    }
    else{
        echo "\nNot Inserted";
    }
}

?>