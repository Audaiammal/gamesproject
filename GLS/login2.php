<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="pri";

$db=mysqli_connect($host,$user,$password,$db);
if($db==false)
{
     die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM mary where username='$username' AND password='$password'";
    $result=$db->query($query);
    if($result->num_rows>0)
    {
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header("location:adminhome.html");
        exit();
    }
    else
    {
        echo "invalid";
    }
  }


?>
  <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>Login form - Bedimcode</title>
      <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");
:root {
  --white-color: hsl(0, 0%, 100%);
  --black-color: hsl(0, 0%, 0%);
  --body-font: "Poppins", sans-serif;
  --h1-font-size: 2rem;
  --normal-font-size: 1rem;
  --small-font-size: .813rem;
}
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body,
input,
button {
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
}

a {
  text-decoration: none;
}

img {
  display: block;
  max-width: 100%;
  height: auto;
}

.login {
  position: relative;
  height: 100vh;
  display: grid;
  align-items: center;
}

.login__bg {
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

.login__form {
  position: relative;
  margin-inline: 1.5rem;
  background-color: hsla(0, 0%, 100%, .01);
  border: 2px solid hsla(0, 0%, 100%, .7);
  padding: 2.5rem 1rem;
  color: var(--white-color);
  border-radius: 1rem;
  backdrop-filter: blur(16px);
}

.login__title {
  text-align: center;
  font-size: var(--h1-font-size);
  margin-bottom: 1.25rem;
}

.login__inputs, 
.login__box {
  display: grid;
}

.login__inputs {
  row-gap: 1.25rem;
  margin-bottom: 1rem;
}

.login__box {
  grid-template-columns: 1fr max-content;
  column-gap: .75rem;
  align-items: center;
  border: 2px solid hsla(0, 0%, 100%, .7);
  padding-inline: 1.25rem;
  border-radius: 4rem;
}

.login__input, 
.login__button {
  border: none;
  outline: none;
}

.login__input {
  width: 100%;
  background: none;
  color: var(--white-color);
  padding-block: 1rem;
}

.login__input::placeholder {
  color: var(--white-color);
}

.login__box i {
  font-size: 1.25rem;
}

.login__check, 
.login__check-box {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.login__check {
  margin-bottom: 1rem;
  font-size: var(--small-font-size);
}

.login__check-box {
  column-gap: .5rem;
}

.login__check-input {
  width: 1rem;
  height: 1rem;
  accent-color: var(--white-color);
}

.login__forgot {
  color: var(--white-color);
}

.login__forgot:hover {
  text-decoration: underline;
}

.login__button {
  width: 100%;
  padding: 1rem;
  margin-bottom: 1rem;
  background-color: var(--white-color);
  border-radius: 4rem;
  color: var(--black-color);
  font-weight: 500;
  cursor: pointer;
}

.login__register {
  font-size: var(--small-font-size);
  text-align: center;
}

.login__register a {
  color: var(--white-color);
  font-weight: 500;
}

.login__register a:hover {
  text-decoration: underline;
}
@media screen and (min-width: 576px) {
  .login {
    justify-content: center;
  }
  .login__form {
    width: 420px;
    padding-inline: 2.5rem;
  }
  .login__title {
    margin-bottom: 2rem;
  }
}
   
</style>
</head>
   <body>

      <div class="login">
         <img src="adlog.jpg" alt="image" class="login__bg">
         
         <form action="admin2.php" method="POST" class="login__form">
            <h1 class="login__title">Admin</h1>

            <div class="login__inputs">
               <div class="login__box">
                  <input type="username" name="username" placeholder="username" required class="login__input">
                  <i class="ri-mail-fill"></i>
               </div>

               <div class="login__box">
                  <input type="password" name="password" placeholder="Password" required class="login__input">
                  <i class="ri-lock-2-fill"></i>
               </div>
            </div>

            <div class="login__check">
               <div class="login__check-box">
                  <input type="checkbox" class="login__check-input" id="user-check">
                  <label for="user-check" class="login__check-label">Remember me</label>
               </div>

               <a href="#" class="login__forgot">Forgot Password?</a>
            </div>

            <button type="submit" class="login__button">Login</button>
            <ul><li><a href="homepage.html">Back</a></li></ul>

         </form>
      </div>
   </body>
</html>