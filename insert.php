<?php

// $name = "abcd";
// $id = 1;
// $ispresent = true;
// $arr = [1,1.4,"this is a string",true];

// echo "<h1>String:".$name."</h1>";
include "conn.php";


$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$branch = $_POST['branch'];



$query = "INSERT INTO `students`(`student_name`,`student_email`,`student_address`,`student_branch`)VALUES('$name','$email','$address','branch')";
$result = mysqli_query($con, $query);

if($result){
	echo "successfully inserted";
}
else{
	echo "failed to insert";
}

?>