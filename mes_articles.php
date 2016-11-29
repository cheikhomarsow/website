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
                    require("dbconnect.php");
                    $username = $_SESSION['username'];
                    if($username){
                        $sql =  $bdd->prepare("SELECT id FROM users WHERE username='$username'");
                        $data = array(
                            'username' => $username
                        );
                        $sql->execute();
                        $row = $sql->fetch();
                        $id_author = $row['id'];

                        $req = $bdd->prepare("SELECT title, message FROM articles WHERE id_author='$id_author' ORDER BY id_author DESC");
                        $req->execute(array(
                                'id_author' => $id_author
                            )
                        );

                        if(empty($row)){
                            echo "Articles de ".$username."<br>";
                            echo "Publier votre premier article : ";
                            include('formulaire_article.php');
                        }else{
                            echo "Mes articles :<br><br><br>";
                            while ($row = $req->fetch()) {
                                echo "<article>";
                                echo "<header>";
                                echo "<b>" . $row['title'] . "</b>";
                                echo "</header>";
                                echo "<p>" . $row['message'] . "</p>";
                                echo "</article>";
                                echo "<hr>";
                            }
                        }


                    }else{
                        header('location:connexion.php');
                    }


                    //$reponse->closeCursor();
                ?>
            </div>
        </div>
        <div class="clear"></div>

    </div>
</body>
</html>
