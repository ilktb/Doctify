<?php
    include "../applications/mainConfigurations.php";

    $err2='';

    try{    
        $db=new PDO("$dns;charset=utf8;dbname=$dataBase",$username,$password); 
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $email= $_POST['email'];
            $nickname=$_POST['nickname'];
            $password=hash("md5", $_POST['password']);
            $name=$_POST['name']; 
            $sirname=$_POST['sirname'];
            $department=$_POST['department'];       
            
            if(preg_match('/^[A-Za-z]+$/i',$name) && preg_match('/^[A-Za-z]+$/i',$sirname)) {

                $stm = $db->prepare("INSERT INTO `accounts`(`email`, `nickname`, `password`, `name`, `sirname`, `department`) 
                VALUES (:email, :nickname, :password, :name, :sirname, :department)");
                if($stm->execute(['email'=> $email,  'nickname'=>$nickname, 'password'=>$password, 'name'=>$name, 'sirname'=>$sirname,'department'=>$department])) {
                    header("Location: ./login.php");
                }
                else{
                    echo "The email or the username already exists!";
                exit();
                } 
            }
            else {
                $err2="Name and Sirname must contain only letters!";
            }
        }
    }
    catch(PDOException $exception){
        echo "НЕУСПЕШНО свързване към базата данни!";
        exit();
    }
?> 