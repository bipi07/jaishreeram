<?php 
    if($_POST){
        $formName=$_POST['Name'];
        $formEmail=$_POST['Email'];
        $formPhone=$_POST['Phone'];
        $formPassword=$_POST['Pswr'];
        $text = 'Pswr';
        $digest = hash('md4', $text);

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="myDB";

        $connection=new mysqli($servername,$username,$password,$dbname);

        if($connection){    
            $sql="INSERT INTO student(fullname,phone, email,pass) VALUES ('$formName','$formPhone', '$formEmail', '$digest')";
            mysqli_query($connection, $sql);
        }    
        mysqli_close($connection);
    }
    echo "signed up successfully";
    // header('Location:p.php');
?>