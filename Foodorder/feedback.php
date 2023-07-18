<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "foodorder";
$conn = mysqli_connect($server_name, $username, $password, $database_name);

//now check the connection
if (!$conn) {
    //For inserting the values to mysql database
    $sql_query = "INSERT INTO feedback(name,gender,email,number,message)
VALUES ('$name','$gender','$email','$number','$message')";
    die("Connection Failed:" . mysqli_connect_error());
}


if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
   


    $sql_query = "INSERT INTO feedback(name,gender,email,number,message)
 VALUES('$name','$gender','$email','$number','$message')";
    if (mysqli_query($conn, $sql_query)) {
        echo "New Details inserted successfully !";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
