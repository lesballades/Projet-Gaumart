<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="asset/css/styledevis.css" media="screen" />
    <!--<link rel="stylesheet" href="assets/css/correctif_balise.css" media="screeen" />-->
    <script src="assets/js/correctif.js"></script>
    <title>demande de devis</title>
</head>

<body>
    <header>
       
    </header>
    
    <div id="container">
        <div id="contenu">
            <form id="demande_devis" action="" method="post">
                <div id="contact">
                    <h1>GAUMART</h1>
                    <h3>Tél: 01 45 83 78 78</h3>
                    <h3>Email: <span>gaumart75@orange.fr</span></h3> </div>
                <p>Demande de devis</p>
                <fieldset>
                    <legend>Réception</legend>
                    <label for="prestation">Type de prestation: </label>
                    <br/>
                    <label class="checkbox">
                        <input type="checkbox" name="cocktail" value="cocktail aperitif" />Cocktail aperitif </label>
                    <br/>
                    <label class="checkbox">
                        <input type="checkbox" name="dinatoire" value="dinatoire" />Cocktail déjeunatoire/dînatoire</label>
                    <br/>
                    <label class="checkbox">
                        <input type="checkbox" name="debout" value="debout" />Buffet debout</label>
                    <br/>
                    <label class="checkbox">
                        <input type="checkbox" name="assis" value="assis" />Buffet assis</label>
                    <br/>
                    <label class="checkbox">
                        <input type="checkbox" name="repas" value="repas" />Repas servi à l'assiette</label>
                    <br/>
                    <label class="checkbox">
                        <input type="checkbox" name="dejeuner" value="dejeuner" />Petit déjeuner</label>
                    <br/>
                    <br/>
                    <label class="text">Autres :
                        <input type="text" name="autres" id="autres" /> </label>
                    <br/>
                    <br/>
                    <label for="lieu de reception">Lieu de réception : </label>
                    <input type="text" name="lieu" id="lieu" required="required" />
                    <br/>
                    <br/>
                    <label for="date">Date de réception: </label>
                    <input type="date" id="date" required />
                    <br/>
                    <br/>
                    <label for="heure_d">Heure de début: </label>
                    <input type="time" id="heure_d" name="heure_d" />
                    <br/>
                    <br/>
                    <label for="heure_f">Heure de fin: </label>
                    <input type="time" id="heure_f" name="heure_f" />
                    <br/>
                    <br/>
                    <label for="Nombre de convives">Nombre de convives: </label>
                    <input type="text" name="nombre" id="nombre" required="required" />
                    <br/>
                    <br/>
                    <label for="personnel">Personnels souhaités: </label>
                    <input type="radio" name="cocktail" id="oui" value="oui" />Oui
                    <label for="personnel"></label>
                    <input type="radio" name="cocktail" value="non" />Non
                    <br/> </fieldset>
                <fieldset>
                    <legend>Services</legend>
                    <label for="prestation">Boissons alcolisées: </label>
                    <br/>
                    <input class="checkbox" type="checkbox" name="rouge" value="rouge" />Vin rouge
                    <br/>
                    <input class="checkbox" type="checkbox" name="blanc" value="blanc" />Vin blanc
                    <br/>
                    <input class="checkbox" type="checkbox" name="rose" value="rose" />Vin rosé
                    <br/>
                    <input class="checkbox" type="checkbox" name="champagne" value="champagne" />Champagne
                    <br/>
                    <input class="checkbox" type="checkbox" name="creman" value="creman" />Créman
                    <br/>
                    <input class="checkbox" type="checkbox" name="kir" value="kir" />Kir
                    <br/>
                    <input class="checkbox" type="checkbox" name="alcool" value="alcool" />Alcool fort
                    <br/>
                    <label for="prestation">Boissons non alcoolisées: </label>
                    <br/>
                    <input class="checkbox" type="checkbox" name="eaux" value="eaux" />Eau minérale plate et gazeuse
                    <br/>
                    <input class="checkbox" type="checkbox" name="cafe" value="cafe" />Café
                    <br/>
                    <input class="checkbox" type="checkbox" name="soft" value="soft" />Jus de fruit et soda
                    <br/>
                    <label for="prestation">Besoins complémentaires: </label>
                    <br/>
                    <input class="checkbox" type="checkbox" name="jetable" value="jetable" />Matériel jetable
                    <br/>
                    <input class="checkbox" type="checkbox" name="reception" value="reception" />Matériel de réception à louer
                    <br/>
                    <input class="checkbox" type="checkbox" name="service" value="service" />Personnel de service
                    <br/>
                    <input class="checkbox" type="checkbox" name="buffet" value="buffet" />Décoration de buffet
                    <br/>
                    <input class="checkbox" type="checkbox" name="florale" value="florale" />Décoration florale
                    <br/>
                    <input class="checkbox" type="checkbox" name="table" value="table" />Centre de table en fleurs fraiches
                    <br/>
                    <input class="checkbox" type="checkbox" name="nappe" value="nappe" />Nappage
                    <br/>
                    <input class="checkbox" type="checkbox" name="animation" value="animation" />Animation musicale
                    <br/>
                    <input class="checkbox" type="checkbox" name="salle" value="salle" />Salles de réception
                    <br/>
                    <br/>
                    <label class="text">Autres :
                        <input type="text" name="autres" id="autres" />
                    </label>
                </fieldset>
                <fieldset>
                    <legend>Votre budget</legend>
                    <label for="budget">Budget par personne: </label>
                    <input type="number" name="budget1" id="budget1"> et
                    <input type="number" name="budget2" id="budget2"> </fieldset>
                <fieldset>
                    <legend>Vos coordonnées</legend>
                    <br/>
                    <label for="nom">Nom :
                        <input type="text" name="nom" id="nom" placeholder="Votre nom" required="required" />
                    </label>
                    <br/>
                    <br/>
                    <label for="prenom">Prénom :
                        <input type="text" name="prenom" id="prenom" placeholder="Votre prénom" required="required" />
                    </label>
                    <br/>
                    <br/>
                    <label for="societe">Société :
                        <input type="text" name="societe" id="societe" placeholder="societe" required="required" />
                    </label>
                    <br/>
                    <br/>
                    <label>Tel:
                        <input type="tel" id="tel" required/>
                    </label>
                    <br/>
                    <br/>
                    <label>Votre e-mail
                        <input type="email" id="email" required />
                    </label>
                    <br/> </fieldset>
                <br/>
                <button><a href="index.php"> Retour à l'accueil</a></button>
                <br/>
                <input class="envoyer" type="submit" name="valider" value="Envoyer votre demande de devis" />
            </form>
        </div>
    </div>
    
    <footer>
       
    </footer>
   
</body>
 
</html>