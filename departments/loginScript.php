<?php
    session_start();

    $err="";

    include '../applications/config.php';

    if(isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = hash("md5", $_POST['password']);

        if(empty($user) || empty($pass)) {
            $message = 'All field are required';
        } 
        else {
            $row = $db->query("SELECT nickname, password, department FROM accounts WHERE (nickname='$user' OR email='$user') AND password='$pass' ")->fetch();
            $dep=$row["department"];
            
            try{
                if($row) { 
                   $_SESSION['username'] = $user;
                   if($dep==="Rect"){
                       header('location:RectHome.php');
                   }
                   elseif($dep==="DS"){
                       header('location:DSHome.php');
                   }
                   elseif($dep==="DE"){
                       header('location:DEHome.php');
                   }
                   elseif($dep==="Dean"){
                       header('location:DeanHome.php');
                    }
                }
                else{
                    $err = "Username or password is incorrect!";
                } 
            }   
            catch(PDOexception $a) {
                $message = "Username/Password is wrong";
                echo "$message";
            }
        }

    }
?>