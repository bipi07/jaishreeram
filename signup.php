<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>

    <link rel="stylesheet" href="forms.css">
</head>
<body>
    <div class="container">
        <h2> Sign up</h2>
        <div class="content">
        <form action="insertdata.php" method="post">
        
                <label for="">Name </label> <br>
                <input type="text" name="Name" placeholder="Name"> <br>
                <label for="">Phone </label> <br>
                <input type="number" name="Phone" placeholder="Phone"> <br>
                <label for="">Email </label> <br>
                <input type="text" name="Email" placeholder="Email"> <br>
                <label for="">Pswr </label> <br>
                <input type="password" name="Pswr" placeholder="Pswr"> <br>
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