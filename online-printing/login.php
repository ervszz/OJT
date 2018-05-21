<?php
    $db = new mysqli("p:localhost", "root", "", "online_printing");
    echo "HEy";
    if(isset($_POST['login'])){
        session_start();
        $userName = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);


        $query = "SELECT concat(first_name,' ',last_name) as name from user WHERE user_name = ? AND password = ?";
        $stmt = $db->stmt_init();
        $stmt->prepare($query);
        $stmt->bind_param("ss" ,$userName, $password);

        $stmt->execute();

        $stmt->bind_result($name);
        $numberOfRows = $stmt->fetch();
        if($numberOfRows == 1){

            while($stmt->fetch()){
                $names = $name;
            }
            $stmt->close();
            $_SESSION['name'] = $name; 
            $_SESSION['username'] = $userName;
            
            header("location: index.php");
        }else{
            header("location: index.php?error=1");
        }
    }
?>