<!DOCTYPE html>

<!--Author: Antti Peltola <antti.v.peltola@tuni.fi>
Date:2019-08-21
-->


<html lang="en">
 <head>
     <title>Login</title>
 </head>

 <body>

    <h1>Tervetuloa</h1>
  <div id="logging">
    <form action="login.php" method = "post">
        <label for="admin">Käyttäjänimi: </label> <input type="username" id="username" name="username"><br /><br />
        <label for="password">Salasana:</label> <input type="password" id="password" name="password"><br /><br />
        <button type="submit" name="submit">Kirjaudu sisään</button>
    </form>
    </div>

<?php 
session_start();
session_destroy();
$_SESSION = array();
    session_start(); 
    if (isset($_POST['submit'])){
        if (isset($_POST['username'])){
            $username = $_POST['username'];
        }
        if (isset($_POST['password'])){
            $password = $_POST['password'];
        }
        
        if (isset($_SESSION['logout'])){
            $logout = $_SESSION['logout'];
        }
        if (isset($_SESSION['login'])){
            $login = $_SESSION['login'];
        }
        
        if ($username == "admin" && $password =="password") {
            $_SESSION['username'] = 'admin';
            $_SESSION['password'] = 'password';
            $_SESSION['login']=true;
            echo "Success";
            print "<script> location.href='admin.php'; </script>";
        }
        else {
            echo "Väärä käyttäjänimi tai salasana";
        }
    }
?>


</body>
</html>