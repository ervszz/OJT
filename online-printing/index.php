<?php
    session_start();
    include "Includes/header.html";
    if(!isset($_SESSION['username'])){

        if(isset($_GET['error'])==true){
            
            echo '<p class = "center-align" style = "color:red; font-size:25px"> Wrong credentials </p>';
        }
        include "loginform.html";
    } else {
        include "home.php";
    }

    include "Includes/footer.html";