<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
  // output data of each row
  // while($row = $result->fetch_assoc()) {
  //   // echo "id: " . $row["id"]. " - Name: " . $row["fullname"]. " - email: " . $row["email"]."<br>";
  // }
  $row = mysqli_fetch_assoc($result);
   $id = $row["id"];
   $name  = $row["fullname"];
   $email = $row["email"];
   $phone = $row["phone"];
   $password = $row["pass"];
} 

else {
  echo "0 results";
}
$conn->close();
?>

<div class="container">
        <h2> Sign up</h2>
        <div class="content">
        <form action="insertdata.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id ?>" required><br>
        
                <label for="">Name </label> <br>
                <input type="text" name="Name" value="<?php echo $name ?>"> <br>
                <label for="">Phone </label> <br>
                <input type="number" name="Phone" value="<?php echo $phone ?>"> <br>
                <label for="">Email </label> <br>
                <input type="text" name="Email" value="<?php echo $email ?>"> <br>
                <label for="">Pswr </label> <br>
                <input type="password" name="Pswr" value="<?php echo $password ?>"> <br>
                <div class="forgot"><a href="">forgot password?</a></div> 
                <div class="forbtn"><button class="btn">LOGIN</button></div> <br>
            
        </form> 

        <div class="signup">
            <h4>Don't Have a Account</h4>
            <h5><a href="">SIGNUP</a></h5>
        </div>

        </div>
    </div>
</body>
</html>