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
						<a id="boutonhome" href="home.html">| Home |</a>
					</div>
						<div id="boutonprojet">
							<a id="boutonprojet" href="projet.html">| Projets |</a>
						</div>
							<a id="boutoncompetences" href="competences.html">| Compétences |</a>
							<a id="boutonutilisateurs" href="projet.html">| Utilisateurs |</a>
				</nav>
				</div>
				
				
				<!--Ici commence la partie corps de page actualisable-->
					

				<div id="corps_page">
				
					<div id="presentation">
						<section>
							<article id="presentation">
								<h1 id="titrePresentation">Présentation</h1>
								
								<p id="intro">Bienvenue sur la page d'accueil de l'interface my imie.</br>
								Vous pouvez accéder à vos projets ou en proposer de nouveaux.</br>
								Vous pouvez également renseigner vos compétences et
								en proposer de nouvelles.</p>
							</article>
							
							<article id="textearticle">
								<h2>Article / Thème / Sous-thématique</h2>
									<h3>Titre de l'article</h3>
										<p id="blocarticle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
										sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
										magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
										quis nostrud exerci tation ullamcorper suscipit lobortis 
										nisl ut aliquip ex ea commodo consequat.
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
										sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
										magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
										quis nostrud exerci tation ullamcorper suscipit lobortis 
										nisl ut aliquip ex ea commodo consequatorem ipsum dolor sit amet,
										adipiscing consectetuer adipiscing elit,
										sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
										magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
										quis nostrud exerci tation ullamcorper suscipit lobortis 
										nisl ut aliquip ex ea commodo consequat.elitsed diam nonummy nibh euismod 
										tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
										enim ad minim veniam,quis nostrud exerci tation ullamcorper 
										suscipit lobortis nisl ut aliquip ex ea commodo consequat.
										adipiscing consectetuer adipiscing elit,
										sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
										magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
										quis nostrud exerci tation ullamcorper suscipit lobortis 
										nisl ut aliquip ex ea commodo consequat.elitsed diam nonummy nibh euismod 
										tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
										enim ad minim veniam,quis nostrud exerci tation ullamcorper 
										suscipit lobortis nisl ut aliquip ex ea commodo consequat.										
										<!--p><a href="#nogo" onclick="document.getElementById('lirelasuite').style.display = 'block'; 
										this.style.display = 'none';">Lire la suite...</a></p>
										<p id="lirelasuite">adipiscing consectetuer adipiscing elit,
										sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
										magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
										quis nostrud exerci tation ullamcorper suscipit lobortis 
										nisl ut aliquip ex ea commodo consequat.elitsed diam nonummy nibh euismod 
										tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
										enim ad minim veniam,quis nostrud exerci tation ullamcorper 
										suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p-->
										</p>
									<p id="mots-cles">Mots-clés</p>
									<a class="mots-cles" href="projets.html">Projets</a>
									<a class="mots-cles" href="http://www.imie-ecole-informatique.fr">IMIE Rennes</a>
							</article>
						</section>
					</div>
									<aside>
					<a id="boutonProjet" href="page_de_proposition_de_projet"><img src="images\image.png" alt="logo_prop" title="cliquez"/></a>
				</aside>
				</div>
				


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