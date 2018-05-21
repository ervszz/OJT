<?php
    if(isset($_POST["upload"])){
        $db = new mysqli("p:localhost", "root", "", "online_printing");
        session_start();
        $allowed = array('application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        $username = $_SESSION['username'];
        $size = $_POST['group1'];
        $type = $_POST['group2'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $fileName = $_FILES['fileupload']['name'];
        $fileType = $_FILES['fileupload']['type'];
        $data = file_get_contents($_FILES['fileupload']['tmp_name']);
        if(in_array($fileType, $allowed)){
            $query = "INSERT INTO upload(user_upload, file_name, size, type, date, time, user_name) VALUES(?,?,?,?,?,?,?)";
            $stmt = $db->stmt_init();
            $stmt->prepare($query);
            $stmt->bind_param("bssssss" ,$data, $fileName, $size, $type, $date, $time, $username);
    
            $stmt->execute();
            header("Location: ../upload.php");
        }else{
        }

    }