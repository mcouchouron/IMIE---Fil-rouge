<!Doctype html>
	<html>
		<head>
			<title>header</title>
			<meta charset="utf-8"/>
			<link rel="stylesheet" type="text/css" href="css\filR.css"/>
			<link rel="stylesheet" type="text/css" href="css\homepageFred.css"/>
			<link rel="stylesheet" type="text/css" href="css\homepageFooter.css"/>
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

							<!--form action="MonAction" method="get">
							<input class="recherche" onclick="this.form.MonNom.value=" name="s" type="text" value="" />
							</form-->
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
								<label for="prenom">Prenom</label>
									<input id="inputprenom" placeholder="  Prenom" type="text"name="prenom" id="prenom"/>
								<label for="ecole">Ecole</label>
									<input id="inputecole" placeholder="  Ecole" type="text"name="Ecole" id="Ecole"/>
								<label for="Courriel">Courriel</label>
									<input id="inputcourriel" placeholder="  Courriel" type="text"name="Courriel" id="Courriel"/>
									
						</fieldset>	
						</form>
						</div>
						
						
						<nav>
							<p id="sous-titres">
								| Home |
									<select name="Home" id="Home">
										<label for="Home">Ecoles</label>
											<option value="0">Choisissez...</option>
											<option value="Imie Rezé">Imie Rezé</option>
											<option value="Imie Rennes">Imie Rennes</option>
											<option value ="Imie Angers">Imie Angers</option>
									</select>
							</p>
							<p id="sous-titres">
								| Projets |
									<select name="Projects" id="Projects">
										<label for="Projects"></label>
											<option value="0">Selectionnez...</option>
											<option value="Abc">Abc</option>
											<option value ="Bca">Bca</option>
											<option value="Cab">Cab</option>
											<option value="Bac">Bac</option>
											<option value="Acb">Acb</option>
									</select>
							</p>
							<p id="sous-titres">
								| Compétences |
									<select name="Skills" id="Skills">
										<label for="Skills">Compétences</label>
										<option value ="0">Choisissez votre compétence...</option>
										<option value ="Language of programmation"> Langage de programmation</option>
										<option value="Personal Qualities">Qualités personnelles</option>
									</select>
							</p>									
							<p id="sous-titres">
								| Utilisateurs |
									<select name="Users" id="Users">
										<label for="Users">Utilisateurs</label>
										<option value ="0">Utilisateurs</option>
									</select>	
							</p>
						</nav>
				
			</div>
			<?php include("homepage.php"); ?>
			</body>
		
	</html>	