<?php
    include "connect.php";
 
    $sql = "INSERT INTO inventario (ID, Nombre, Precio, Cantidad, fecha_reg)
    VALUES ('1473', 'Micrófono', '27000', '3', '05/05/2021');";
    
    $sql .= "INSERT INTO inventario (ID, Nombre, Precio, Cantidad, fecha_reg)
    VALUES ('1497', 'Pantalla', '1000000', '1', '04/05/2021');";

    $sql .= "INSERT INTO inventario (ID, Nombre, Precio, Cantidad, fecha_reg)
    VALUES ('444', 'Pad mouse', '5000', '5', '7/05/2021');";

    if (mysqli_multi_query($conn, $sql)) {
        echo "Se insertaron los registros.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?> 