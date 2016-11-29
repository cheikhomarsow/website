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
            <?php
                if(isset($_POST["sujet"]) && isset($_POST["email"]) && isset($_POST["message"])){
                    echo "<p class='message_succes'>Inscription reussi</p>";
                    echo "<p>Aller à <a href='index.php'>l'accueil</a></p>";
                }else{
                    echo "<p class='message_error'>Veillez remplir tous les champs</p>";
                    include("formulaire_contact.php");
                }
            ?>
            </div>
        </div>
    <div class="clear"></div>

</div>
</body>
</html>