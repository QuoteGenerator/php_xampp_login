<?php

include 'connect.php';

if(isset($_POST['signup'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail="SELECT * From benutzer where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Adress Already Exists !!!";
    } else{
        $insertQuery="INSERT INTO benutzer(firstName, lastName, email, password)
                        VALUES ('$firstName', '$lastName', '$email', '$password')";
            if($conn->query($insertQuery)==true){
                header("location: index.php");
            }
            else{
                echo "ERROR:" .$conn->error;
            }
    }
}

if(isset($_POST['signin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM benutzer WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);

    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: homepage.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }
} 
?>