<?php
    $db = new mysqli("p:localhost", "root", "", "online_printing");
    $id = $_POST["list"];
    $query = "DELETE FROM `upload` WHERE `idupload`='$id';";
    mysqli_query($db, $query);
    header("Location: ../upload.php");
