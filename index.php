<?php
$conn = mysqli_connect("localhost", "root", "P4ssw0rd_T3st", "opentutorials");
$result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>
<body id="target">
    <header>
        <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png">
        <h1><a href="http://localhost/">JavaScript</a></h1>
    </header>
    <nav>
        <ol>
            <?php
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.$row['title'],'</a></li>'."\n";
                }
            ?>
        </ol>
    </nav>
    <div id="control">
        <input type="button" value="White" onclick="document.getElementById('target').className = 'white'"/>
        <input type="button" value="Black" onclick="document.getElementById('target').className = 'black'"/>
    </div>
    <article>
        <?php
            $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '<h2>'.$row['title'].'</h2>';
            echo $row['description'];
        ?>
    </article>
</body>
</html>
