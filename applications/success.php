<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<link href="../css/success.css" rel="stylesheet">
		<title> DoctifySuccsess </title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
            <h1>Заявлението е прието!</h1>
            
                <label id="NB">Вх. номер: </label>

                <?php
                   include "mainConfigurations.php";

                    try {
                        $conn = new PDO("$dns;dbname=$dataBase", $username, $password);
                        // set the PDO error mode to exception
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = $conn->query("SELECT id FROM `applications` WHERE id=(SELECT max(id) FROM applications)");
                                              
                        $last_id = $sql->fetch();
                        echo "<label id='inputN'>$last_id[0]</label>";
                        }
                    catch(PDOException $e)
                        {
                        echo $sql . "<br>" . $e->getMessage();
                        }
                    
                    $conn = null;
                ?>
                <br>
                <br>
                <label>Сканирай QR кодът, за да проследиш заявлението <br> или натисни върху него, за да го изтеглиш</label>
                <br>
                
                <a href="/images/QR.jpg" download>
                    <img id='barcode' 
                        src="https://api.qrserver.com/v1/create-qr-code/?data=Helloorld&amp;size=100x100" 
                        alt="" 
                        title="DOWNLOAD" 
                        width="150" 
                        height="150" />
                </a>

                    <br>
                <label> или натисни върху този бутон</label>
                
                    <a class="button" id="link" href="../applications/tracker.php?inputN='+document.getElementById('inputN').innerText"> Tracker </a>
                    <br>
                    <br>
                    <a class="button" id="another" href="./options.php">Подай друго заявление</a>
            
        </div>    

        <script type="text/javascript">
            function generateBarCode()
            {
                var nric = 'tracker.php?inputN='+document.getElementById("inputN").innerText;
                var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
                document.getElementById("barcode").setAttribute("src",url);
                document.getElementById("link").setAttribute("href", nric);
            }
            generateBarCode();               
        </script>

    </body>
</html>