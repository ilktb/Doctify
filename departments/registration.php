<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<link href="../css/registration.css" rel="stylesheet">
		<title> DoctifySubject </title>
    </head>

    <body>
        <div id="wrapper">    
            <div id="home">
                <a id="doctify" href="../home.php">
                    <img src="../img/document.png" alt=""> Doctify
                </a>
            </div> 
            <hr>

            <form method="POST">
          
                <h1 id="type">Регистрация</h1>
                <br>
                <input id="nick" type="text" name="nickname"  placeholder="Username" required>
                <br>
                <input id="email" type="email" name="email"  placeholder="E-mail" required>
                <br>
                <input id="name" type="text" name="name"  placeholder="Име" required>    
                <br>
                <input id="sir" type="text" name="sirname"  placeholder="Фамилия"required>
                <br>
                <select id="dep" name="department" required> 
                    <option value="DS">Отдел Студенти</option>
                    <option value="DE">Отдел Учебен</option>                    
                    <option value="Dean">Декан</option>
                    <option value="Rect">Ректор</option>
                </select>
                <br>
                <input id="pass" type="password" name="password"  placeholder="Парола" required>
                <br>
                <input id="rpass" type="password" name="rp_password" placeholder="Повтори паролата" required>
                <br>
                <input type="submit" class="button4" name="order" id="order" value="Register" required>
                <br>
                <?php 
                    include "registrationScript.php";
                    echo "<p> $err2 </p>";
                ?>    
            </form> 
        </div>  

        <script>
            function validationName() {
                var str = document.getElementById('name').value;
                if(str.match(/[a-Z]+/))
            }
        </script>

    </body>
</html>