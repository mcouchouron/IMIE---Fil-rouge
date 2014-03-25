<!Doctype html>
	<html>
		<head>
			<title>pageprincipale</title>
			<meta charset="utf-8"/>
			<link rel="stylesheet" type="text/css" href="css\pageprincipale.css"/>
			<!--link rel="stylesheet" type="text/css" href="css\homepageFred.css"/-->
			<!--link rel="stylesheet" type="text/css" href="css\homepageFooter.css"/-->
		</head>
			<body>
				<div id="page">
				<header>
					<img id="p1" src="images/imieLogo.jpg"alt="logoImie" title="logoImie"/>
						<p id="My">My</p><p id="Imie">imie</p></br>
						<p id="skill">skills</p>
				</header>
					<span id="bandeautitre">
						<p id="titre1">"De l'idée nait</p>
						<p id="titre2">le projet..."</p>
							<div id="zonerecherche">
								<input id="boutonrecherche" type="image" src="images/loupe.png" />
								<input id="texterecherche" type="text" placeholder="Rechercher" />								
							</div>
					</span>
						
				<div id="identification">
					<img id ="imageUser" src="images/portrait.png" alt="photo" title="photofictive"/>
						<input id="notification" name="Notifications" type="submit" value="Notifications"/>
						<input id="deconnexion" name="Deconnexion" type="submit" value="Déconnexion"/>
					<form id="mon formulaire" method="post" action="traitement php">		
						<fieldset>
							<legend id=coordonnees>Vos coordonnées</legend>
								<label for="nom">Nom</label>
									<input id="inputnom" placeholder="  Nom" type="text" name="nom" id="nom"/>
								<label for="prenom">Prénom</label>
									<input id="inputprenom" placeholder="  Prenom" type="text" name="prenom" id="prenom"/>
								<label for="ecole">Ecole</label>
									<input id="inputecole" placeholder="  Ecole" type="text" name="Ecole" id="Ecole"/>
								<label for="Courriel">Mail</label>
									<input id="inputcourriel" placeholder="  Mail" type="text" name="Mail" id="Mail"/>
								<input id="boutonmodifier" type="submit" value="MODIFIER"/>	
						</fieldset>	
					</form>
				</div>					
				<nav>
					<div id="boutonhome">
						<a id="boutonhome" href="pageprincipale05032014.php">| Home |</a>
					</div>
						<div id="boutonprojet">
							<a id="boutonprojet" href="projet.html">| Projets |</a>
						</div>
							<a id="boutoncompetences" href="pageLienCompetences.php">| Compétences |</a>
							<a id="boutonutilisateurs" href="projet.html">| Utilisateurs |</a>
				</nav>
				</div>
				
				
				<!--Ici insertion de la page présentation-->
				<?php include ("pagepresentation.php"); ?>	

					<footer>
						<div class="liens">
							<a id="lien_mention" href="mentionslegales.html">| Mentions légales |</a>
							<a id="lien_contacts" href="contacts.html">| Contacts |</a>
							<a id="lien_faq" href="faq.html">| FAQ |</a>
						<!--input name="ml" type="submit" value="Mentions légales"/>
						<b>|</b>
						<input name="contacts" type="submit" value="Contacts"/>
						<b>|</b>
						<input name="faq" type="submit" value="FAQ"/-->
						</div>
					</footer>
				</div>
			</body>
		
	</html>	