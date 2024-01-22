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
    $u_name=$_POST['u_name'];
    $u_pass= $_POST['u_pass'];

   // $myquery="INSERT INTO customer(u_name,u_pass) VALUES('$u_name','$u_pass')";
    $name="Chowa0_0";
    $pass="124chowA";
    if($u_name==$name && $u_pass==$pass){
        header("Location: http://localhost/STORE_MANAGEMENT/admin_h.html");
    }
    else{
        echo "wrong!";
    }
}
?>