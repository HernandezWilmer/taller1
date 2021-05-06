<?php
    include "connect.php";
    ///Acá hice otro cambio

    $sql = "INSERT INTO inventario (ID, Nombre, Precio, Cantidad, fecha_reg)
    VALUES ('1445', 'Parlantes', '85000', '7', '06/05/2021')";

    if (mysqli_query($conn, $sql)) {
        echo "Nuevo registro insertado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?> 