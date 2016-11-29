<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Cheikh Omar SOW">
    <link rel="stylesheet" href="style.css">
    <title>My fisrt official web site</title>
</head>
<body>
    <?php
            include("top_bar_logout.php");
    ?>
    <div id="content" main="role">
        <?php
            include('aside.php');
        ?>
        <div id="content_box">
            <?php
                include('formulaire_article.php');
            ?>
        </div>
        <div class="clear"></div>

    </div>
</body>

</html>
