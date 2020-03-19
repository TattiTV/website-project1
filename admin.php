<!DOCTYPE html>

<html lang="en">
 <head>
  <title>Login</title>
 </head>

 <body>
 
 <?php
 session_start(); 
if (isset($_SESSION['login']) && ($_SESSION['login']==true)){
    echo("
<form action='admin.php' method = 'post'>
    <button type='submit' name='logout'>Kirjaudu ulos</button>
</form>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='edit-data.js'></script>
<style>
.edit {
  color: red;
  width: 50%;
}
</style>
<button id='save' onclick='submit()'>Tallenna muutokset</button>
<p id='contents'></p>
<h1>Editoi sivujen sisältöä:</h1>
<h2>Etusivu</h2>
<div>
    <p contenteditable='true' class='edit' id='introduction'></p>
    <p contenteditable='true' class='edit' id='info'></p>
    <h2 contenteditable='true' class='edit' id='name1'></h2>
    <p contenteditable='true' class='edit' id='person1'></p>
    <h2 contenteditable='true' class='edit' id='name2'></h2>
    <p contenteditable='true' class='edit' id='person2'></p>
</div>

<h2>Koulutukset</h2>
<div>
    <h2 contenteditable='true' class='edit' id='turva1'></h2>
    <p contenteditable='true' class='edit' id='turva2'></p>
    <h2 contenteditable='true' class='edit' id='turva3'></h2>
    <p contenteditable='true' class='edit' id='turva4'></p>
    <p contenteditable='true' class='edit' id='turva5'></p>
    <p contenteditable='true' class='edit' id='turva6'></p>
    <h2 contenteditable='true' class='edit' id='tuli1'></h2>
    <p contenteditable='true' class='edit' id='tuli2'></p>
    <h2 contenteditable='true' class='edit' id='tuli3'></h2>
    <p contenteditable='true' class='edit' id='tuli4'></p>
    <h2 contenteditable='true' class='edit' id='tuli5'></h2>
    <p contenteditable='true' class='edit' id='tuli6'></p>
    <p contenteditable='true' class='edit' id='tuli7'></p>
    <h2 contenteditable='true' class='edit' id='sam1'></h2>
    <h2 contenteditable='true' class='edit' id='sam2'></h2>
    <p contenteditable='true' class='edit' id='sam3'></p>
    <h2 contenteditable='true' class='edit' id='sam4'></h2>
    <p contenteditable='true' class='edit' id='sam5'></p>
    <h2 contenteditable='true' class='edit' id='sam6'></h2>
    <p contenteditable='true' class='edit' id='sam7'></p>
</div>
<h2 id='yt1'></h2>
    <p contenteditable='true' class='edit' id='yt2'></p>
    <p contenteditable='true' class='edit' id='yt3'></p>
    <p contenteditable='true' class='edit' id='yt4'></p>
    <p contenteditable='true' class='edit' id='yt5'></p>
<h2>Sivun alareunan tiedot</h2>
<div>
    <p contenteditable='true' class='edit' id='footer1'></p>
    <p contenteditable='true' class='edit' id='footer2'></p>
</div>
");
} else {
    echo("<h1>Tervetuloa</h1>
        <a href='login.php'>Kirjaudu sisään</a>");
}
if (isset($_POST['logout'])){
    $_SESSION['login']=false;
    print "<script> location.href='login.php'; </script>";
}
    
?>
</body>
</html>
