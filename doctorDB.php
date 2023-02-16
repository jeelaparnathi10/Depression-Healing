<?php
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"admin");
$nm = $_POST['dname'];
$add = $_POST['address'];
$exp = $_POST['experience'];
$deg = $_POST['degree'];
$age = $_POST['age'];
$gen = $_POST['gender'];
$eid = $_POST['email'];
$uni = $_POST['university'];
$num = $_POST['phoneno'];
$sql = "INSERT INTO doctor (Doctor_name,Address,Experience,Degree,Age,Gender,Email,University,Phone_no) VALUES ('$nm','$add','$exp','$deg','$age','$gen','$eid','$uni','$num')";
// $result = mysqli_query($conn,$sql);
if (!$conn) {
	echo "Connection failed"."<br>";
}
else{
	echo "Connection Established"."<br>";
}
if (!$db) {
	echo "DataBase Connection failed"."<br>";
}
else{
	echo "DataBase Connection Established"."<br>";
}
if (mysqli_query($conn,$sql)){
	echo "Data Inserted Successfully :)"."<br>";
} else {
	echo "Not Inserted... :(".mysqli_error($conn)."<br>";
}
?>