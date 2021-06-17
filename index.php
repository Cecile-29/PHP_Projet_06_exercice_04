<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet06 Exercice04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-9 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet06 Exercice04</h1>
            <h2 class="col-12 text-info text-center">Créez un formulaire avec les champs "civilité", "nom" et "prénom". 
            À l'envoi du formulaire sur la même page, Affichez les informations saisies. Les champs doivent être renseignés. 
            Vérifiez la saisie. Empêchez l'affichage de balises html.</h2>
        </div>
        <div class="offset-1 row justify-content-center bg-secondary rounded m-4 id=div1">
            <form method="post" action="#div2">
                <p class="col-9 text-center text-light p-2 m-3">CIVILITÉ :<p>                
                <p class="col-9 text-center text-light p-2 m-3"><select  name="civility" class="col-9 text-center text-warning btn btn-outline-light p-2 m-3" id="check" name="button">
                    <option value="Monsieur" label="Monsieur">
                    <option value="Madame" label="Madame">
                    <option value="Autre" label="Autre">
                </select></p></p></p>
                <p class="col-9 text-center text-light p-2 m-3">NOM :<p>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="text" name="name" id="name"/></p></p>
                <p class="col-9 text-center text-light p-2 m-3">PRÉNOM :<p>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="text" name="firstName" id="firstName"/></p></p>
                <p class="col-9 text-center text-light p-2 m-3"><button type="submit" class=" col-9 text-center text-warning btn btn-outline-light p-2 m-3" id="check" name="button">AFFICHER LES DONNÉES !</button></p>
            </form>
        </div> 
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center id=div2">
        <a class="mr-3" href="index.php">RÉINITIALISER LE FORMULAIRE</a>
            <?php 
                // var_dump($_POST);
                if(isset($_POST['civility'])) {
                $result = $_POST['civility'];

                 if(empty($result)) {
                 echo "<script language='JavaScript'>alert('Input CIVILITÉ requis !')</script>";
                    } elseif(!preg_match("/^[a-zA-Z àâäéèêëïîôöùûüÿ-]*$/", $result)) {
                    echo "<script language='JavaScript'>alert('Seulement les lettres et les espaces sont autorisés !')</script>";
                    } else {
                    echo 'NOM : '. $_POST['civility'];
                    }
                }

                if(isset($_POST['name'])) {
                $result = $_POST['name'];

                 if(empty($result)) {
                 echo "<script language='JavaScript'>alert('Input NOM requis !')</script>";
                    } elseif(!preg_match("/^[a-zA-Z àâäéèêëïîôöùûüÿ-]*$/", $result)) {
                    echo "<script language='JavaScript'>alert('Seulement les lettres et les espaces sont autorisés !')</script>";
                    } else {
                    echo '  '. 'NOM : '. $_POST['name'];
                    }
                }

                if(isset($_POST['firstName'])) {
                $result2 = $_POST['firstName'];

                 if(empty($result2))
                    echo "<script language='JavaScript'>alert('Input PRÉNOM requis !')</script>";
                 elseif(!preg_match("/^[a-zA-Z àâäéèêëïîôöùûüÿ-]*$/", $result2))
                    echo "<script language='JavaScript'>alert('Seulement les lettres et les espaces sont autorisés !')</script>";
                else
                    echo '  '. 'PRÉNOM : '. $_POST['firstName'];
                    
                }
            ?>
        </div> 



            <!--  Correction JP --
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center id=div2">
                    <?php 
                // if(isset($_POST['name']) || isset($_POST['firstName'])){
                //     echo "<script language='JavaScript'>alert('Seulement les lettres et les espaces sont autorisés !')</script>";
                // }else{
                //     echo ' Hello '. ($_POST['civility']). '  '. strip_tags($_POST['name']). '  '. strip_tags($_POST['firstName']);
                // }
            ?>
            <a class="mr-3" href="index.php">RÉINITIALISER LE FORMULAIRE</a>
        </div>
           -->
           
            <?php
            // if(empty($_POST['lastName']) || empty($_POST['firstName'])){
            ?>
        <!-- <div class="offset-1 row justify-content-center bg-secondary rounded m-4">
            <form method="post" >
                <p class="col-9 text-center text-light p-2 m-3">CIVILITÉ :<p>                
                <p class="col-9 text-center text-light p-2 m-3"><select  name="civility" class="col-9 text-center text-warning btn btn-outline-light p-2 m-3" id="check" name="button">
                    <option value="Monsieur" label="Monsieur">
                    <option value="Madame" label="Madame">
                    <option value="Autre" label="Autre">
                </select></p></p></p>
                <p class="col-9 text-center text-light p-2 m-3">NOM :<p>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="text" name="lastName" id="lastName"/></p></p>
                <p class="col-9 text-center text-light p-2 m-3">PRÉNOM :<p>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="text" name="firstName" id="firstName"/></p></p>
                <p class="col-9 text-center text-light p-2 m-3"><button type="submit" class=" col-9 text-center text-warning btn btn-outline-light p-2 m-3" id="check" name="button">AFFICHER LES DONNÉES !</button></p>
            </form>
        </div>  -->
        <?php 
        //     // $regex = "/^[A-ZÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð][a-zàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšž]+([-][A-Z][a-z]+)?$/";
        //     // $verifName = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
        //     $verifName = "/^[a-zA-Z àâäéèêëïîôöùûüÿ-]*$/";
        //     if (isset($_POST['civility']) && isset($_POST['lastName']) && isset($_POST['firstName'])) {
        //         if (preg_match($verifName, $_POST['lastName']) && preg_match($verifName, $_POST['firstName'])) {
        //             // echo '  '. 'Bonjour : '. ' '. $_POST['civility']. '  '. $_POST['firstName'].  '  '. $_POST['name'];
        //             echo ' Hello '. ($_POST['civility']). '  '. strip_tags($_POST['lastName']). '  '. strip_tags($_POST['firstName']);
        //         } else {
        //             echo "<script language='JavaScript'>alert('Seulement les lettres et les espaces sont autorisés !')</script>";
                    
        //         }
        //     }
        // }
        ?>      
    </div>
</body>
</html>