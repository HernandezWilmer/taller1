<?php
    include "connect.php";

    $sql = "UPDATE inventario SET Precio='2800000' WHERE ID=5";

    if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?> 