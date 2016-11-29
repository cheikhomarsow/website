<?php
echo "<fieldset>
                    <legend>Me contacter</legend>
                    <form action='do_contact.php' method='POST'>
                        <input type=\"text\" name=\"sujet\" required  placeholder=\"Sujet\" cols=\"50\" id=\"title\"><br>
                        <input type=\"email\" name=\"email\" required  placeholder=\"email\" cols=\"50\" id=\"title\"><br>
                        <textarea name=\"message\" id=\"message\" required placeholder=\"Votre message ici...\"></textarea>
                        <br><br><br>
                        <input class=\"mySubmit\" type=\"reset\" value=\"Effacer\">
                        <input class=\"mySubmit\" type=\"submit\" value=\"Envoyer\">
                    </form>
                </fieldset>";
?>