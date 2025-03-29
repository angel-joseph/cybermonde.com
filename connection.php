<!DOCTYPE html>
<html lang="en">
<body>
    <center>
        <?php
        $conn = mysqli_connect("localhost","root","","db_website");
        if($conn === false){
            die("error" 
                 . mysqli_connect_error());
        }
        $name=$_REQUEST['name'];
        $age=$_REQUEST['age'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        
        $sql = "INSERT INTO formm VALUES('$name', '$age', '$email', '$password')";
        if(mysqli_query($conn, $sql)){
            echo "elements are \n\n";
            echo nl2br("\n$name $age $email $password ");
        } else{
            echo "error" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
        </center>
    
</body>
</html>