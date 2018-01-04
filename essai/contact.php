<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="asset/css/contact.css">
    <title>Formulaire traiteur Gaumart</title>
</head>

<body>
    <header>
        <?php require 'entete.php'; ?>
    </header>
    <div id="containerform">
        <div class="contactform">
            <div class="adresseform">
                <p>GAUMART</p>
            </div>
            <div class="telform"> Tél: 01 45 83 78 78 </div>
            <br/>
            <div class="emailform">Email: <span>gaumart75@orange.fr</span></div>
            <div id=imagepageformulaire> <img src="asset/img/csm_patissier_traiteur_a_paris_2d2c89ae22.jpg"> </div>
            <br/>
            <div>
                <button><a href="demande_de_devis.php" class="bouton"> demande de devis</a></button>
            </div>
        </div>
        <div class="contactform2">
            <form class="formulaire" name="formulaire" method="post" action="contact.php">
                <label>
                    <input class="nom" type="text" name="nom" placeholder="NOM" /> </label>
                <br/>
                <label>
                    <input class="societe" type="text" name="societe" placeholder="SOCIETE*" />
                    <br/> </label>
                <br/>
                <label>
                    <input class="email" type="text" name="email" placeholder="EMAIL*" />
                    <br/> </label>
                <br/>
                <label>
                    <input class="tel" type="number" name="tel" placeholder="TEL" />
                    <br/> </label>
                <br/>
                <textarea name="message" id="message" rows="10" cols="50" placeholder="MESSAGE"></textarea>
                <br/>
                <br/>
                <input class="droite" type="submit" name="valider" value="ENVOYER" /> </form>
        </div>
    </div>
    <footer>
        <?php require 'footer.php'; ?>
    </footer>
</body>
<?php
            $nom = $_POST['nom'];
            $societe = $_POST['societe'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $message = $_POST['message'];
        try {
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            
$bdd=new PDO('mysql:host=localhost;dbname=gaumart','root','',$pdo_options);

}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
    try
    {
            $req = $bdd->prepare("INSERT INTO contact (nom, societe, email, tel, message) VALUES(:nom, :societe, :email, :tel, :message)");
    $req->execute(array("nom" => $_POST['nom'], "societe" => $_POST['societe'], "email" => $_POST['email'], "tel" => $_POST['tel'], "message" => $_POST['message']));
        }
        
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());

}
?>

</html>