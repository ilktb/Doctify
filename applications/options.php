<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<link href="../css/options.css" rel="stylesheet">
		<title> DoctifyOptions </title>
    </head>

    <body>
        <div id="wrapper">

            <div id="home">
                <a href="../home.php">
                    <img src="../img/document.png" alt=""> Doctify
                </a>
            </div>
            <hr>
			<p>Изберете тип заявление от показаните:</p>
			<div class="button" onclick="redirect('subjectForm.php')">
				<a class="op" href="subjectForm.php">Записване на дисциплина</a>
            </div><br>
            
            <div class="button" onclick="redirect('creditsForm.php')">
				<a class="op" href="creditsForm.php">Признаване на кредити</a>
            </div><br>
            
            
			<div class="button" onclick="redirect('complaintForm.php')">
				<a class="op" href="complaintForm.php">Подаване на оплакване</a>
            </div><br>
            
            
			<div class="button"onclick="redirect('praiseForm.php')">
				<a class="op" href="praiseForm.php">Подаване на похвала</a>
            </div><br>
    
        </div>    
    </body>

    <script>
        function redirect(a) {
            location.href=a;
        }
    </script>

</html>