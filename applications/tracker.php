<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<link href="../css/tracker.css" rel="stylesheet">
		<title> DoctifyTracker </title>
    </head>

    <body>
        <div id="wrapper">
        <div style="text-align:center;">
        <div id="home">
                <a id="doctify" href="../home.php">
                    <img src="../img/document.png" alt=""> Doctify
                </a>
            </div>
        </div>
            <hr>
            <h1>Прoследяване на заявление</h1>
 
                <?php
                    include "./config.php";
                    if(explode("=","http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"))
                        {
                            $strings= explode("=","http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                            if(count($strings)>1){
                                echo "
                                <h3 id='h3'>Проследяване на вх. номер: " ;
                                $type = explode("=","http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")[1];
                                echo "<span>";
                                echo "$type";
                                echo " </span></h3>";
                                $id=$strings[1];
                            }
                            else{
                                $id=$strings[0];
                            }
                        }

                  
                      
                    if($tracker= $db->query("SELECT trace from applications where id='$id'")->fetch()['trace']){
                      if($tracker>0 && $tracker<5){
                        echo"<label id='DS'>Отдел Студенти </label>
                        <label id='DE'>Отдел Учебен </label>
                        <label id='Dean'>Декан </label>
                        <label id='Rect'>Ректор</label>";
                      }
                        if($tracker == 1){
                            echo "<div class='tracker'>";
                            echo "<div id='first' class='stage'></div></div>";
                        } elseif ($tracker == 2){
                            echo "<div class='tracker'>";
                            echo "<div id='first' class='stage'></div>";
                            echo "<div class='stage'></div></div>";
                        } elseif ($tracker == 3){
                            echo "<div class='tracker'>";
                            echo "<div id='first' class='stage'></div>";
                            echo "<div class='stage'></div>";
                            echo "<div class='stage'></div></div>";
                        } elseif ($tracker == 4){
                            echo "<div class='tracker'>";
                            echo "<div id='first' class='stage'></div>";
                            echo "<div class='stage'></div>";
                            echo "<div class='stage'></div>";
                            echo "<div id='last' class='stage'></div></div>";
                        } elseif($tracker == 5){
                            echo "<p id='p'> Вашето заявление е OДОБРЕНО!</p>";
                        } elseif($tracker == 6){
                            echo "<p id='p'>Вашето заявление е ОТХВЪРЛЕНО!</p>";
                        }
                    }
                     else{
                        if(explode("=","http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"))
                        {
                            $strings= explode("=","http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                            if(count($strings)>1)
                            {
                               echo "<p id='p'>Заявление с този вх. номер не съществува в БД!</p>";
                            }
                            else{
                               echo "";
                            }
                        }                
                    }   
                                   
                ?>
                
            <form>
                <?php
                  if(explode("=","http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"))
                    {
                        $strings= explode("=","http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                        if(count($strings)>1)
                        {
                           echo "<h3>Въведи друг вх. номер:</h3>";
                        }
                        else{
                           echo "<h3>Въведи вх. номер:</h3>";
                        }
                    }
                ?>
                <input id="input" type="text" name="inputN" placeholder="Входящ номер"><br>
                <input id="button" type="submit" value="Търси">
            </form> 
		</div>    
    </body>

</html>