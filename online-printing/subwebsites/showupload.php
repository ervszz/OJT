
    <h4>Files</h4>
<ul class = "collection col m8 offset-m2 s12">
<?php
    $ctr = 0;
    $db = new mysqli("p:localhost", "root", "", "online_printing");
    $userName = $_SESSION['username'];
    $stmt = $db->stmt_init();
    $stmt->prepare("select * from upload where user_name = ? AND upload_status = 'NP'");
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $stmt->bind_result($id, $data, $fileName, $size, $type, $upload_status, $date, $time, $user_name);
    echo "<ul class='collapsible'>";
    echo "<li><div class='collapsible-header'><h5> Not yet Printed </h5></div>
        <div class='collapsible-body'><span>Trial</span></div> <li>";

    echo "</ul>";

    while($stmt->fetch()){ 
        $ctr++;
        ?>
        
           <li class = "collection-item avatar">
            <a href = "./subwebsites/download.php?id=<?php echo $id ?>" class = "collection-item">
                <i class = "material-icons circle">folder</i>
                <span class = "title"><?php echo $ctr ?></span>
                <p><?php echo $fileName ?> </p>
            </a>
            <button type = "submit">Cancel</button>
        </li>

<?php
    }
?>


</ul>

<br>
<br>
<ul class = "collection col m8 offset-m2 s12">

<?php
    $ctr = 0;
    $db = new mysqli("p:localhost", "root", "", "online_printing");
    $userName = $_SESSION['username'];
    $stmt = $db->stmt_init();
    $stmt->prepare("select * from upload where user_name = ? AND upload_status = 'P'");
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $stmt->bind_result($id, $data, $fileName, $size, $type, $upload_status, $date, $time, $user_name);
    echo "<h5> Already Printed </h5>";

    while($stmt->fetch()){ 
        $ctr++;
        ?>
        
        <li class = "collection-item avatar">
            <a href = "./subwebsites/download.php?id=<?php echo $id ?>" class = "collection-item">
                <i class = "material-icons circle">folder</i>
                <span class = "title"><?php echo $ctr?></span>
                <p><?php echo $fileName ?> </p>
            </a>
        </li>

<?php
    }
?>
</ul>


<br>
<br>
<ul class = "collection col m8 offset-m2 s12">

<?php
    $ctr = 0;
    $db = new mysqli("p:localhost", "root", "", "online_printing");
    $userName = $_SESSION['username'];
    $stmt = $db->stmt_init();
    $stmt->prepare("select * from upload where user_name = ? AND upload_status = 'PY'");
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $stmt->bind_result($id, $data, $fileName, $size, $type, $upload_status, $date, $time, $user_name);
    echo "<h5> Paid </h5>";

    while($stmt->fetch()){ 
        $ctr++;
        ?>
        <form action = "./subwebsites/deleteUpload.php" method = "POST">
            <li class = "collection-item avatar">
                <a href = "./subwebsites/download.php?id=<?php echo $id ?>" class = "collection-item">
                    <i class = "material-icons circle">folder</i>
                    <span class = "title"><?php echo $ctr?></span>
                    <p><?php echo $fileName ?> </p>

                </a>
                <input type = "hidden" name = "list" value = '<?php echo $id ?>'>
                <button type = "submit">Delete</button>
            </li>
        </form>

<?php
    }
?>
</ul>
