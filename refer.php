<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
<body>
    <center>
        <?php
 
            $servername = 'localhost';
            $username = 'root';
            $password  ='';
           $dbname = 'signup';
        $conn = mysqli_connect("$servername", "$username", "$password", "$dbname");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         if(isset($_POST['submit'])){
        // Taking all 5 values from the form data(input)
        $first_name =  $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email =  $_POST['email'];
        $password = $_POST['passwd'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO DATA  VALUES ('$first_name',
            '$last_name','$email','$password')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
           // echo nl2br "\n$first_name,\n $last_name\n
               //  $mail,\n $password)";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);}
        ?>
    </center>
</body>
 
</html>