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
$sql_query = "INSERT INTO reg(first_name,last_name,username,email, mobile_no, password)
VALUES ('$first_name','$last_name','$username','$email','$mobile_no', '$password')";
die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{ 
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $mobile_no = $_POST['mobile_no'];
 $password = $_POST['password'];

 $sql_query = "INSERT INTO reg(first_name,last_name, username, email, mobile_no, password)
 VALUES ('$first_name','$last_name','$username','$email','$mobile_no', '$password')";
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
