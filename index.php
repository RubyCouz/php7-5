<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <form class="form" action="index.php" method="POST">
            <label>Informations :</label><select class="select" name="civility">
                <option selected disabled>Veuillez selectionner une option</option>
                <option>Mr</option>
                <option>Mme</option>
            </select>
            <label>Nom :</label><input type="text" name="lastname" placeholder="Nom" />
            <label>Prénoms :</label><input type="text" name="firstname" placeholder="Prénom" />
            <input type="submit" name="valider" value="Valider">
        </form>
        <?php
        if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['civility'])) {
            echo 'Bonjour ' . $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
        } else {
            echo 'Veuillez renseigner votre identité svp!';
        }
        ?>
    </body>
</html>
