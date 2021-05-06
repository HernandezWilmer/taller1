<?php
    include "connect.php";

    $sql = "SELECT ID, Nombre, Cantidad, Precio, fecha_reg FROM inventario";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "Esta vaina es un ID: " . $row["ID"] . 
                " ---- Nombre: " . $row["Nombre"] . " " .
                " ---- Cantidad: " . $row["Cantidad"] . " " .
                "--- Precio: " . $row["Precio"] .
                " ----- Fecha:" . $row["fecha_reg"] .
                "<br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?> 