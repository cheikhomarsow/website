<?php
echo "<fieldset>
                    <legend>Connexion</legend>
                    <form action='do_article.php' method='POST'>
                        <input type=\"text\" name=\"title\" required  placeholder=\"Titre\" cols=\"50\" id=\"title\"><br>
                        <textarea name=\"message\" id=\"message\" required placeholder=\"Votre article ici...\"></textarea>
                        <br><br><br>
                        <input class=\"mySubmit\" type=\"reset\" value=\"Effacer\">
                        <input class=\"mySubmit\" type=\"submit\" value=\"Publier\">
                    </form>
                </fieldset>";
?>