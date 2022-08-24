<?php
// $email_address = $_POST['Email_address'];

// $example_textarea = $_POST['Example_textarea'];
// Database connection
$conn = new mysqli('localhost','root','','asc');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {


$userName = $_POST["userName"];
$password = $_POST['password'];
$universityName = $_POST['universityName'];
$stateName = $_POST['state'];
$email = $_POST['email'];

    $sql = "INSERT INTO signup_university (user_name, password,university_name,state_name,email_id)
VALUES ('$userName', '$password','$universityName','$stateName','$email')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
header("Location: http://localhost/ASC-full-app/login_university.html");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>