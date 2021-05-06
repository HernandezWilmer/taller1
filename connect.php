<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "productos";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn)
    {
        die("La conexión se se pudo realizar: " . mysqli_connect_error());
    }else{
        echo "Conectado exitosamente.";
    }
?> 