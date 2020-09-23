<?php
    include "mainConfigurations.php";

    $conn=new PDO($dns,$username,$password); 
    $conn->prepare("create database if not exists $dataBase")->execute();

    $dns="mysql:host=localhost;charset=utf8;dbname=$dataBase"; // connection string
    $username="root";
    $password="";

    $db=new PDO($dns,$username,$password);           

    $db->query("CREATE TABLE if not exists applications (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        type varchar(50),
        name varchar(100),
        fn int(10),
        faculty varchar(100),
        course int(10),
        specialty varchar(100),
        text text,
        trace int(5) default 1
      )CHARACTER SET utf8 COLLATE utf8_general_ci;");

    $db->query("CREATE TABLE if not exists accounts (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        email varchar(100) unique,
        nickname varchar(100) unique,
        password varchar(100),
        name varchar(100),
        sirname varchar(100),
        department varchar(100)
      )CHARACTER SET utf8 COLLATE utf8_general_ci;");    
?>