<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";



// class DivideByZeroException extends Exception{}
// try{
// $a =12;
// $b =0;
// throw new DivideByZeroException("please enter the non zero number\n");
// $c=$a/$b;
// echo"$c";
// }
// catch( DivideByZeroException $e) {
//   echo $e->getMessage();
// }
// finally{
//   echo "Jai shree Ram";
// }

class ram extends Exception{
function getError(){
  echo"phir se bolo";
}
}
try{
$a = 12;
$b = -1;
throw new ram ("Joor se bolo\n");

$c=$a/$b;
echo"$c";
}
catch(ram $e){
  echo $e->getError();
  echo "<Br>";

}
finally{
   echo "Jai shree Ram";
   }


?>