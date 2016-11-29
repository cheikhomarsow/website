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
            <div id="articles_content">
                <?php
                    if(isset($_POST["title"]) && isset($_POST["message"])){
                        $username = $_SESSION['username'];
                        if($username) {
                            require("dbconnect.php");
                            $title = htmlentities(trim($_POST["title"]));
                            $message = htmlentities(trim($_POST["message"]));
                            $sql = $bdd->prepare("SELECT id FROM users WHERE username='$username'");

                            $sql->execute();
                            $row = $sql->fetch();
                            $id_author = $row['id'];
                            $req = $bdd->prepare('INSERT INTO articles(title, message, id_author) VALUES(:title, :message, :id_author)');
                            $req->execute(array(
                                'title' => $title,
                                'message' => $message,
                                'id_author' => $id_author
                            ));
                            echo "Bonjour <b>" . $username . "<br><span> class='message_succes'>Votre article est publié !</span><br>";
                            echo 'Aller sur <a href="mes_articles.php">\'Mes articles\' </a>pour voir vos articles !';
                        }else{
                            header('location:connexion.php');
                        }
                    }else{
                        echo "<span class='message_error'>Veillez remplir tous les champs</span>";
                        include("formulaire_article.php");
                    }
                ?>
            </div>
        </div>
        <div class="clear"></div>

    </div>

</body>









</html>
