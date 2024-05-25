<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['studentname'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $branch=$_POST['branch'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
 
$conn=new mysqli('localhost:3307','root',' ','application_form');
if($conn->connect_error)
{
    die("connection failed: ". $conn->connect_error);
}

    $sql="INSERT INTO student_details (Student_Name, Student_Password, Gender,Branch, Email, Phone) VALUES ('$name', '$password', '$gender', '$branch', '$email', '$phone')";
   if($conn->query($sql) === TRUE)
   {
    echo "Data inserted successfully";
   }
   else
   {
   echo "Error:" . $sql . "<br>" . $conn->error;
   }

$conn -> close();
}
?>