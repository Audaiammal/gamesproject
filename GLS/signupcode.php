<?php
session_start();
$host="localhost";
$username="root";
$password="";
$dbname="log";
$db=new mysqli($host,$username,$password,$dbname);
if($db->connect_error)
{
    die("Connection failed:".$db->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="INSERT INTO login(username,password) VALUES('$username','$password')";
    if($db->query($query)==TRUE)
    {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header("location:logincode.php");
        exit();
    }
    else{
        echo "signup failed.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Signup Form</title>
        <style>
            @import url('Georgia');
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
                font-family:'Georgia',sans-serif;
                cursor:pointer;
            }
            body{
                height:100vh;
                width:100%;
                display:flex;
                justify-content:center;
                align-items:center;
                background:linear-gradient(to right,#ffffff,#3f5ef6);
            }
            form{
                width:25rem;
                height:20rem;
                display:center;
                flex-direction:column;
                background:rgba(255,255,255,0.06);
                box-shadow:0 8px 32px 0 rgba(31,38,135,.37);
                border-radius:30px;
                border-left:1px solid rgba(255,255,255,.3);
                border-top:1px solid rgba(255,255,255,.3);
            }
            h1{
                font-size:50px;
                text-align:center;
                color:white;
                text-shadow:2px 2px 4px rgba(0,0,0,.2);
                letter-spacing:3px;
                margin-bottom:.5%;
                opacity:.7;

            }
            label{
                font-size:20px;
                color:white;
                display:center;
                margin:5%;
                text-shadow:2px 2px 4px rgba(0,0,0,.2);
            }
            input{
                width:80%;
                margin:3% auto;
                margin-bottom:8%;
                border:none;
                outline:none;
                background:transparent;
                color:black;
                border-bottom:1px solid rgba(255,255,255,0.6);
            }
            button{
                width:50%;
                margin:5% auto;
                color:white;
                font-size:15px;
                background:rgba(255,255,255,0.06);
                padding:10px 30px;
                border:none;
                outline:none;
                border-radius:20px;
                text-shadow:2px 2px 4px rgba(255,255,255,0.2);
                box-shadow:3px 3px 5px rgba(31,38,135,37);
                border-bottom:1px solid rgba(0,0,0,0.6);
            }
            </style>
            </head>
            <body>
                <center>
                    <form method="POST" action="signupcode.php">
                        <h1>Sign up</h1>
                        <label>Username</lable><br>
                            <input type-"text" name="username" required/>
                            <label>password</label><br>
                            <input type="password" name="password" required/>
                            <h3>Already a member?<a
                                href="logincode.php">Login</a><h3>
                                    <button type="submit">Submit</button>
                                </form>
                            </center>
                        </body>
                        </html>