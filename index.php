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
                $conn = mysqli_connect("localhost", "root", "P4ssw0rd_T3st", "opentutorials");
                $result = mysqli_query($conn, "SELECT * FROM topic");
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
            $result = mysqli_query($conn, "SELECT * FROM topic");
            if(!empty($_GET['id']))
                while($row = mysqli_fetch_assoc($result))
                    if($row['id'] == $_GET['id'])
                        echo $row['description'];
        ?>
    </article>
</body>
</html>
