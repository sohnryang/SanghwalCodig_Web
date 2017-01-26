<?php
    $conn = mysqli_connect("localhost", "root", "P4ssw0rd_T3st", "opentutorials");
    $sql = "SELECT * FROM user WHERE name='".$_GET['name']."' AND password='".$_GET['password']."'";
    echo $sql."<br/>";
    $result = mysqli_query($conn, $sql);
    var_dump($result);
    echo "<br/>"
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
        if ($result->num_rows == "1") {
            echo "주인님 환영합니다.";
        } else {
            echo "뉘신지?";
        }
    ?>
</body>
</html>
