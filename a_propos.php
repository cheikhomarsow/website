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
include("top_bar.php");
?>
<div id="content" main="role">
    <?php
    include('aside.php');
    ?>
    <div id="content_box">
        <div id="articles_content">
            <h3>A propos</h3>
            <p>Etudiant en informatique passionné des technos HTML5, CSS3, PHP5, JavaScript</p>
        </div>
    </div>
    <div class="clear"></div>

</div>
</body>
</html>