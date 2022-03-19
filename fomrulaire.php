<!DOCTYPE html>
<html lang="fr">
<head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire dynamique</title>
		<script src="JS/regexp.js"></script>
		<script src="JS/passVerif.js"></script>
		<script src="JS/forms.js"></script>
		<link rel="stylesheet" href="CSS/forms.css" />
		<link rel="stylesheet" href="CSS/design.css" />
		<script src="bar color.js"></script>
		
		<script>
			//Change the color of the bar
			function change(id, val)
			{
				if(val == 0)
					document.getElementById(id).style.backgroundColor = "#dd0000";
				else if(val == 1)
					document.getElementById(id).style.backgroundColor = "#70b500";
				else
					document.getElementById(id).style.backgroundColor = "#ffc500";
			}
		</script>
		
    </head>
	
    <body>
		
		<form method="post" action="">
			<h2>Formulaire: </h2>
			
			<div class="p">
				<label for="pseudo">Pseudo: </label><input type="text" name="pseudo" id="pseudo" onchange='nform_alphaNum(pseudo.value, change, "verPseudo")' />
					<div id="verPseudo" class="zoneVerif"></div><br />
				<label for="mdp">Mot de passe: </label><input type="password" name="mdp" id="mdp" onchange='nform_pass(mdp.value, change, "verMdp")' />
					<div id="verMdp" class="zoneVerif"></div><br />
				<label for="mdp2">Retapez le mot de passe: </label><input type="password" name="mdp2" id="mdp2" onchange='nform_passVerif(mdp.value, mdp2.value, change, "verMdp2")' />
					<div id="verMdp2" class="zoneVerif"></div><br />
				<label for="mail">Adresse email: </label><input type="text" name="mail" id="mail" onchange='nform_mail(mail.value, change, "verMail")' />
					<div id="verMail" class="zoneVerif"></div><br />
			</div>
				<hr />
			<div class="p">
				<label for="nom">Nom: </label><input type="text" name="nom" id="nom" onchange='nform_alpha(nom.value, change, "verNom")' />
					<div id="verNom" class="zoneVerif"></div><br />
				<label for="cp">Contacte: </label><input type="text" name="cp" id="cp" onchange='nform_num(cp.value, change, "verCp")' />
					<div id="verCp" class="zoneVerif"></div><br />
			</div>
		</form>
		<script src="sciptlink.js"></script>
		<script>
			var pseudo = document.getElementById("pseudo");
			var mdp = document.getElementById("mdp");
			var mdp2 = document.getElementById("mpd2");
			var mail = document.getElementById("mail");
			var nom = document.getElementById("nom");
			var cp = document.getElementById("cp");
			
		</script>
    </body>
</html>