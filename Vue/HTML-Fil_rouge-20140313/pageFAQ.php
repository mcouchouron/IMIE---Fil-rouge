<!DOCTYPE html>
<html>   
	<head>
		<title>Responsive Design</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/faq.css" type="text/css" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css" />
		<script>
			$(function() {
			$( "#accordion" ).accordion();
			});
		</script>
	</head> 
	<body>
	<div id="pagefaq">
		<div id="accordion">
				<span id="titrequestion">Qui peut contribuer ?</span>
				<div>
				<p id="textereponse">
				N'importe qui étant ou ayant été inscrit à l'imie peut contribuer à un projet, quel que soit le niveau. 
				L'accès à l'application est ouverte aux étudiants des différentes formations de l'IMIE, ceux des années
				précédentes peuvent prendre part aux projets, dans une limite de cinq années (bac+5).
				</p>
				</div>
				<span id="titrequestion">Comment s'auto-évaluer ?</span>
				<div>
				<p id="textereponse">
				L'auto-évaluation est simple: vous sélectionnez vos compétences et indiquez quel est votre niveau sur 
				une échelle de cinq points. Rien n'est figé: si vous progressez 
				dans telle ou telle matière, vous pouvez modifier votre niveau à votre convenance. Egalement, si vous 
				pensez vous être surestimé dans une technologie, vous pouvez revenir sur votre évaluation.
				</p>
				</div>
				<span id="titrequestion">Comment proposer un projet ?</span>
				<div>
				<p id="textereponse">
				Pour proposer un nouveau projet, vous pouvez devez simplement cliquer la bulle prévue à cet effet. 
				Le fonctionnement est simple et intuitif, laissez vous guider !
				</p>
				</div>
				<span id="titrequestion">J'ai perdu mon mot de passe, comment le récupérer ?</span>
				<div>
				<p id="textereponse">
				Pour récupérer votre mot de passe, vous devez vous adresser à un administrateur dans la rubrique contact, 
				en lui indiquant votre adresse mail. Le générateur de nouveau mots de passe est en construction...
				</p>
				</div>
		</div>	
		<div id="retourhome">
			<a id="retourhome" href="pageAccueil.php">| Retour Home |</a>
		</div>	
	</div>
	</body>
</html>