<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="foodorder";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
//For inserting the values to mysql database
$sql_query = "INSERT INTO log(username,password)
VALUES ('$username','$password')";
die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{ 
 $username = $_POST['username'];
 $password = $_POST['password'];

 $sql_query = "INSERT INTO log(username,password)
 VALUES ('$username','$password')";
 if (mysqli_query($conn, $sql_query))
 {
echo "New Details Entry inserted successfully !";
 }
 else
 {
echo "Error: " . $sql . "" . mysqli_error($conn);
 }
 mysqli_close($conn);
}
