<?php
    $conn = mysqli_connect("localhost", "root", "P4ssw0rd_T3st", "opentutorials");
    $sql = "INSERT INTO topic (title, description, author, created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
    $result = mysqli_query($conn, $sql);
    header('Location: http://localhost/index.php');
?>
