<?php
session_start();
$host="localhost";
$username="root";
$password="";
$dbname="quizapp";
$db=mysqli_connect($host,$username,$password,$dbname);
if($db==false)
{
    die("Connection failed.");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="INSERT INTO signup (username,password) VALUES('$username','$password')";
    $result=$db->query($query);
    if($result->num_rows>0)
    {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header("location:index.html");
        exit();
    }
    else{
        echo "invalid";
    }
}

?>