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
				<!--Ici insertion de la page Header-->
				<?php include ("pageheader.php"); ?>
				
				<!--Ici insertion de la page Compétences-->
				<?php include ("pageMesCompetences.php"); ?>	

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