<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];

//database connection
$conn = new mysqli('localhost','root','','tourtraveldatabase');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("INSERT INTO contactus(name, email, phone, subject, message) VALUES(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);
    $stmt->execute();
    echo "we will inform you soon!";
    $stmt->close();
    $conn->close();
}
?>