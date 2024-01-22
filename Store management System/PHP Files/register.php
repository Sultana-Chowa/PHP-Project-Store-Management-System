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
    $r_name=$_POST['r_name'];
    $r_address=$_POST['r_address'];
    $r_dob=$_POST['r_dob'];
    $r_num=$_POST['r_num'];
    $r_nid=$_POST['r_nid'];

   // $myquery="INSERT INTO customer(u_name,u_pass) VALUES('$u_name','$u_pass')";
    $sql ="INSERT INTO register(r_name, r_address, r_dob, r_num, r_nid) VALUES ('$r_name', '$r_address', '$r_dob', '$r_num', '$r_nid')";
    if (mysqli_query($connection,$sql)){
            
           echo "Logged In";
           header("Location: http://localhost/STORE_MANAGEMENT/set_login.html");
           exit();           
        }
        
    else{
        echo "\nNot Inserted";
        header("Location: http://localhost/STORE_MANAGEMENT/wrong_pass.html");
    }
}
?>