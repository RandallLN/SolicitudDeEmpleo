<?php

    $usuario = "root"; //en ste caso root por ser localhost
    $password = "123456";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="form"; //nombre de la base de datos


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables
    $nombreE=$_POST['nomE']; //name="nombre"
    //$correo=$_POST['correo']; //name="correo"
    //$mensaje=$_POST['mensaje']; //name="mensaje"

    //sentencia sql
    $sql="INSERT INTO empresa (Nombre) VALUES ('$nombreE')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);


    //verificacion de la ejecucion
    if(!$ejecutar){
        echo"hubo algun error"; //si algo sale mal mandanos este mensaje
    }else{
        //echo"datos guardado correctamente <br><a href='index.html'>volver</a>"; //si todo sale bien mandanos este mensaje
	header('Location:mensaje-de-envio.html');
    }
     
?>﻿