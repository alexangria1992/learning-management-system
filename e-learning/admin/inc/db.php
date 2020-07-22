<?php

$con = "mysql:host=localhost;dbname=e_learning;port=3306";
$username = "root";
$password = "";


try {
 $con = new PDO($con, $username, $password);
 echo "You have connected!";
}
catch(PDOException $e) {
 $error_message = $e->getMessage();
 echo $error_message;
 exit();
}

?>