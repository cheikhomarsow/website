<?php


echo "<fieldset>
            <legend>Connexion</legend>
            <form action='do_formulaire_connexion.php' method='POST'>
                <input type=\"text\" name=\"username\" required  placeholder=\"Pseudo\" id=\"username\"><br>
                <input type=\"password\" name=\"password\" required placeholder=\"Password\" id=\"password\"><br>
                <br><br><br>
              <input class=\"mySubmit\" type=\"submit\" value=\"Se connecter\">
            </form>
        </fieldset>";
?>