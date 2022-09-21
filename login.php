<?php
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    #usuarios
    $admin = 'administrador';
    $cliente = 'cliente';
    #password
    $adminp = "asd";
    $clientep = "123";

    if($name == $cliente){
        if($password == $clientep){
            header("location: inicio.php");
        }else{
            header("location: error_usuario.php");
        }
    }
    if($name == $admin){
        if($password == $adminp){  
            header("location: dashboard.php"); 
        }else{
            header("location: error_usuario.php");
        }
    }
    if($name != $cliente and $name != $admin){
        header("location: error_usuario.php");
    }
    