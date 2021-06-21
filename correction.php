<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo4</title>
    </head>
    <body>
            <?php
            if (empty($_POST['firstName']) && empty($_POST['lastName'])) {
                ?>
            <form method="post" action="correction.php">
                <select name="civilite">
                    <option>Mr</option>
                    <option>Mme</option>
                </select>
                <label>Nom</label>
                <input type="text" name="lastName" placeholder="Votre nom">
                <label>Prénom</label>
                <input type="text" name="firstName" placeholder="Votre prénom">
                <input type="submit" name="valider" value="Valider"/>
            </form>
            <?php
            }
            $verifName = "/^[a-zA-Z àâäéèêëïîôöùûüÿ-]*$/";
            if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['civilite'])){
                if(preg_match($verifName, $_POST['lastName']) && preg_match($verifName, $_POST['firstName'])){
               echo 'Bonjour '. ' ' . $_POST['civilite']. ' ' . $_POST['firstName']. ' ' . $_POST['lastName'];
                }else{
                   echo ' Veuillez vérifier votre saisie !';
                }
           }
        
        ?> 
</body>
</html>