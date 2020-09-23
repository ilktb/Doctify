<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<link href="../css/insideHome.css" rel="stylesheet">
		<title> DSHome </title>
    </head>

    <body>
        <div id="wrapper">
            <h1>Отдел <strong> СТУДЕНТИ </strong></h1>
            <a id="button" href="logout.php">Logout</a>
            <label>
            <?php
                session_start();

                if(isset($_SESSION['username'])) {
                    echo "Здравейте, <strong>".$_SESSION['username']."!"."</strong><br/>";
                } else {
                    header('location: login.php');
                }
            ?>
            </label>
            <table>
                <tr>
                    <th class="tbHead">Вх. номер</th>
                    <th class="tbHead">Type</th>
                    <th class="tbHead">Имена</th>
                    <th class="tbHead">Факултет</th>
                    <th class="tbHead">Специалност</th>
                    <th class="tbHead">Курс</th>
                    <th class="tbHead">ФН</th>
                    <th class="tbHead"></th>
                </tr>
                <?php include "pullDSdb.php" ?>
            </table>
        </div>    
        <script>
            function relocate()
            {
                var arr = document.getElementsByTagName("tr");

                var func = function(){
                    location.href="openDSApp.php?name="+this.children[0].innerText;
                    
                };

                for(var i=0; i<arr.length; i++){
                    arr[i].addEventListener('click', func, false);
                }
            }
            relocate();
        </script>
    </body>
</html>





