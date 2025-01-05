<?php

echo "hello world";
$name= $_POST["full_name"];
 $age=$_POST["Age"];
 $gender=$_POST["gender"];
 $t = time();
$curr_timestamp = date("Y-m-d H:i:s", $t);  // Corrected time format

// the script needs to be connected to the database.
$host="localhost";
$dbname= "form_db";
$dbuser= "root";
$dbpass= "";

$conn =  mysqli_connect($host,$dbuser,$dbpass,$dbname);
//false
if (!$conn){
    die("database connection error:" . mysqli_connect_error());

}
echo "database connection successfull!";
$sql = "INSERT INTO htmlform(full_name,age,gender,created_at) VALUES('$name','$age','$gender','$curr_timestamp')";

if (mysqli_query($conn, $sql)) {
    echo "New record added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>