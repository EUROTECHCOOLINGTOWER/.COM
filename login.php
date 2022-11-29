<?php
$servername = 'localhost';
$username = 'root';
$password  ='';
$dbname = 'signup';
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(!$conn){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
else{
    echo"thank you";
}
if(isset($_POST['submit'])){
   $Uname =$_POST['t1'];
   $Upass =$_POST['t2'];
   $sql  ="SELECT  * FROM  data WHERE( 'Email'='$Uname')";
  $res = mysqli_query($conn,$sql); 
   if($sql==FALSE){
    throw new execution("mysqli_errror"($conn));
   if(mysqli_num_rows($res)>0){
    $row=mysqli_fetch_array($sql);
    if($row['Email']==$Uname ){
        header(location:'mainpage.php');
    }
    else{
    echo"invalid user try again !!!";
   }
}
   }
}

?>