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
                    echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
                }
            ?>
        </ol>
    </nav>
    <div id="control">
        <input type="button" value="White" onclick="document.getElementById('target').className = 'white'"/>
        <input type="button" value="Black" onclick="document.getElementById('target').className = 'black'"/>
        <a href="http://localhost/write.php">쓰기</a>
    </div>
    <article>
        <?php
            if(!empty($_GET['id'])) {
                $sql = "SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id'];
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
                echo '<p>'.htmlspecialchars($row['name']).'</p>';
                echo strip_tags($row['description'], '<a><h1><h2><h3><h4><h5><h6><ul><ol><li>');
            }
        ?>
    </article>
</body>
</html>
