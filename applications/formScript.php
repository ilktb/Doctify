<?php
    include "config.php" ;

     if($_SERVER["REQUEST_METHOD"] == "POST"){
         //validaciq na vhod
        $type = explode(".",explode("/","http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")[5])[0];
        $stm = $db->prepare("INSERT INTO `applications`(`type`, `name`, `fn`, `faculty`, `course`, `specialty`, `text`) 
                            VALUES (:type,:name,:fn,:faculty,:course,:specialty,:text)");
        $stm->execute(['type'=> $type, 'name'=>$_POST['name'], 'fn'=>$_POST['fn'], 'faculty'=>$_POST['faculty'], 'course'=>$_POST['course'], 
                    'specialty'=>$_POST['specialty'], 'text'=>$_POST['text']]);

        header("Location: ../applications/success.php");
   }
?> 