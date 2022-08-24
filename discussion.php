<?php
// $email_address = $_POST['Email_address'];

// $example_textarea = $_POST['Example_textarea'];
// Database connection
$conn = new mysqli('localhost','root','','asc');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {


$university = $_POST["university"];
$program = $_POST["program"];
$branch = $_POST["branch"];
$semester = $POST["semester"];
$subject = $POST["subject"];


// $password = $_POST['password'];
// $email = $_POST['email'];

    $sql = "INSERT INTO discussion_university (university,program,branch,sem,subject)
VALUES ('$university', '$program','$branch','$semester','$subject')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>