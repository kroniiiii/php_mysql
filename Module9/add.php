<?php

//With this file we include the database connection
include_once("config.php");

//isset() function determine if a variable is declard and is different from NULL
if(isset($_post['submit'])){
    $name = $_post['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = 'INSERT INTO users(name, username, email) VALUES (:name, :username, :email)';
     
    $sqlQuery = $connect->prepare(query: $sql); 
    
    $sqlQuery->bindParam(':name', $name);
    $sqlQuery->bindParam(':username', $username);
    $sqlQuery->bindParam(':email',$email); 

    $sqlQuery->execute();

    echo"The user was added succesfully!";
}


?>