<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<link href="../css/openApp.css" rel="stylesheet">
		<title> openDEApp </title>
    </head>

    <body>
    <div id="home">
            <a href="./DEHome.php">
                <img src="../img/document.png" alt=""> Doctify
            </a>
        </div>
        <hr>
        <form action="" method="POST">
            <?php
                include "../applications/config.php";
                $url=explode("=","http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")[1];
                $id = $url;

                $arr=$db->query("SELECT * FROM applications WHERE trace='2' AND id='$id'")->fetch();            
                $type = $arr['type'];
                $name = $arr['name'];
                $faculty = $arr['faculty'];
                $specialty = $arr['specialty'];
                $course = $arr['course'];
                $fn = $arr['fn'];   
                $text = $arr['text'];

                echo "  <p id='title'> $type </p>
                        <p>Вх.номер: <strong> $id</strong></p>
                        <p>Имена:<strong> $name</strong></p>
                        <p>Факултет: <strong>$faculty</strong></p>
                        <p>Специалност:<strong> $specialty</strong></p>
                        <p>Курс: <strong>$course</strong></p>
                        <p>ФН:<strong> $fn</strong></p>
                        <p id='text'>$text</p>";
                        
                        if(isset($_POST["delete"]))
                        {
                            $db->prepare("DELETE FROM applications WHERE id='$id'")->execute();
                            header("location: DEHome.php");
                        }

                        if(isset($_POST["accept"]))
                        {
                            $db->prepare("UPDATE `applications` SET `trace`= 3 WHERE id=$id")->execute();
                            header("location: DEHome.php");
                        }
                        if(isset($_POST["decline"]))
                        {
                            $db->prepare("UPDATE `applications` SET `trace`= 0 WHERE id=$id")->execute();
                            header("location: DEHome.php");
                        }

            ?>
            <button class="button" id="accept" name="accept"> ACCEPT </button>
            <button class="button" id="decline" name="decline">DECLINE</button>
            <button class="button" id="delete" name="delete"> DELETE </button>
        </form>

    </body>
</html>