<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="form.css">
    <title>formulaire</title>
<head>
    
<body>
    <main>
    <header>
        <img src="AFPA.jpg" alt="Logo Afpa" title="Afpa" width="190px" height="130px"></a></header>
    <form action="recup.php"  method="POST"> 
<section class="content">
    <section class="global">      
        <section class="gauche">   
            <input type="text" name="nom-prenom" placeholder="Nom - Prénom" required><br>
            <input type="email" name="email" placeholder="Courriel" requiered><br>
            <input type="phonenumber" name="telephone" placeholder="Téléphone" requiered><br>
            
    <select name="job">
    <option disabled value="mot" >Vous êtes...</option>
    <option value="Directeur du systeme d'information">Directeur du système d'information</option>
    <option value="Développeur" >Développeur</option>
    <option value="Chef de projet">Chef de projet</option>
    </select><br> 

<textarea name="commentaires"  rows="5" placeholder="Commentaires"></textarea><br>
        </section>

        <section class="droite">
<legend>Quelle est la meilleure manière de vous contacter ?</legend>
    <input name="maniere" type="radio" value="telephone"> Télephone<br>
    <input name="maniere" type="radio" value="email"> Courriel<br>   

<legend>Jours de la semaine ou vous êtes disponible:</legend>
    <input name="jours[]" type="checkbox" value="lundi">Lundi<br>
    <input name="jours[]" type="checkbox" value="mardi">Mardi<br>
    <input name="jours[]" type="checkbox" value="mercredi">Mercredi<br>
    <input name="jours[]" type="checkbox" value="jeudi">Jeudi<br>
    <input name="jours[]" type="checkbox" value="vendredi">Vendredi<br>

<legend>Moment approprié pour un rendez-vous :</legend>
    <input name="moment[]" type="checkbox" value="Matin">Matin<br>
    <input name="moment[]" type="checkbox" value="Après-midi">Après-midi<br>
        </section>//
    </section>

    <hr>
    <button type="submit"> Envoyer </button>
</section>    
</main> 

    </body>
</html>