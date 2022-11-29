<?php
$host="localhost";
$user="root";
$pass='';
$db="signup";
$con= mysqli_connect($host,$user,$pass,$db);

if(!$con){
    die ("could not connect".mysqli_connect_error($con));
}
else{
    echo "connection succ
    
    essfully ....";
}
if(isset($_POST['submit'])){  
$firstname=$_POST['first_name'];
$Lastname=$_POST['last_name'];
$Email=$_POST['email'];
$password=$_POST['passwd'];
$abc="INSERT INTO xyz ('Fname', 'Lname', 'Email, 'Passwd') VALUES ('$firstname','$Lastname','$Email','$password')";
if (mysqli_query($abc,$con)==TRUE){
    echo "$firstname";
    //echo "$lastname";
    # code...
}
//else{


    //echo"data is not inserted succesfully";
//}
//}
}  
?>