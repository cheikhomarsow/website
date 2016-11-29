<?php


    echo "<fieldset>
            <legend>Inscription</legend>
            <form action='do_formulaire_inscription.php' method='POST'>
                <input type=\"text\" name=\"username\" required  placeholder=\"Pseudo\" id=\"username\"><br>
                <input type=\"password\" name=\"password\" required placeholder=\"Password\" id=\"password\"><br>
                <input type=\"password\" name=\"repeat_password\" required  placeholder=\"Repeat password\" id=\"repeat_password\"><br>
                <br><br><br>
              <input class=\"mySubmit\" type=\"submit\" value=\"S'inscrire\">
            </form>
        </fieldset>";
?>