<!DOCTYPE html>

<?php include "loginScript.php";?>

<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<link href="../css/login.css" rel="stylesheet">
		<title> Login </title>
    </head>

    <body>
        <div id="wrapper">     
            <div id="home">
                <a href="../home.php">
                    <img src="../img/document.png" alt=""> Doctify
                </a>
            </div>
            <hr>
            <form  method="POST">
          
                <h1 id="type">Вход</h1>
                <input style="" type="text" name="username"  placeholder="Username или email">
                <br><br>
                <input type="password" name="password"  placeholder="Парола">
                <br><br>
                <input type="submit" class="button4" name="login" value="Login" > 
                <br>
                <p><?php
                    echo $err;
                ?></p>
            </form> 		
        </div>    
    </body>
</html>