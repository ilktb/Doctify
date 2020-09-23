<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/> 
		<link href="../css/form.css" rel="stylesheet">
		<title> DoctifySubject </title>
    </head>

    <body>
        <div id="wrapper">     

            <div id="home">
                <a href="../home.php">
                    <img src="../img/document.png" alt=""> Doctify
                </a>
            </div>
            <hr>
            <form method="POST">           
          
                <h1 id="type">Записване на дисциплина</h1>
                <br>
                <input id= "name" type="text" name="name"  placeholder="Име и фамилия"><br>
                <select id="fac" name="faculty"> 
                    <option value="FMI">Факултет по математика и информатика</option>
                    <option value="FI">Исторически факултет</option>                    
                    <option value="FF">Философски факултет</option>
                    <option value="FKNF">Факултет по класически и нови филологии</option>
                    <option value="FL">Юридически факултет</option>
                    <option value="FP">Факултет по педагогика</option>
                    <option value="FFiz">Физически факултет</option>
                    <option value="FHF">Факултет по химия и фармация</option>
                    <option value="FG">Богословски факултет</option>
                    <option value="FM">Медицински факултет</option>
    	        </select>
                <input id="fn" type="text" name="fn"  placeholder="Фак. номер">                          
                <br>
                <input id="spec" type="text" name="specialty"  placeholder="Специалност">
                <input id="course" type="number" name="course"  placeholder="Курс">
                <br>
                <textarea id="text" type="text" name="text" placeholder="Текст" ></textarea>
                <br>
                <input id="button" type="submit" class="button" name="order" id="order" value="Подай" > 

            </form>  
            
            <?php include "formScript.php";?>
        </div>    
    </body>
</html>