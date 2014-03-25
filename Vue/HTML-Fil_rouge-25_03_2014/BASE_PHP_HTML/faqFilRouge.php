<!DOCTYPE html>
<html>   
	<head>
		<title>Responsive Design</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="faqFilRouge.css" type="text/css" />
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
		Nous sommes le 
		<script type="text/javascript">
			function printHorloge(){
				if (document.getElementById) {
					var txtHorloge="<div id=\"horlogeDiv\">d</div>";
					document.write(txtHorloge);
					updateHorloge();
				}
			}
			function updateHorloge(){

				var dt = new Date();
				var jours = new Array( "Dimanche", "Lundi","Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
				var mois = new Array("Jan.", "Fev.", "Mar.", "Avr.", "Mai", "Juin", "Juil.", "Aou.", "Sep.", "Oct.", "Nov.", "Dec.");
				var Y = dt.getFullYear();
				var M = mois[dt.getMonth()];
				var D = dt.getDate();
				if (D==1){D="1er";}
				var J = jours[dt.getDay()];
				var h = dt.getHours();
				if (h<10){h="0"+h;}
				var m = dt.getMinutes();
				if (m<10){m="0"+m;}
				var s = dt.getSeconds();
				if (s<10){s="0"+s;}
				document.getElementById("horlogeDiv").innerHTML=J+" "+D+" "+M+"<br/>"+h+" : "+m+" : "+s;
				setTimeout("updateHorloge()", 500);
			}				
				printHorloge();
		</script>
		<div id="accordion">
		<h3>Qui peut contribuer ?</h3>
		<div>
		<p>
		N'importe qui étant ou ayant été inscrit à l'imie peut contribuer à un projet, quel que soit le niveau. 
		L'accès à l'application est ouverte aux étudiants des différentes formations de l'IMIE, ceux des années
		précédentes peuvent prendre part aux projets, dans une limite de cinq années (bac+5).
		</p>
		</div>
		<h3>Comment s'auto-évaluer ?</h3>
		<div>
		<p>
		L'auto-évaluation est simple: vous sélectionnez vos compétences et indiquez quel est votre niveau sur 
		une échelle de cinq points. Rien n'est figé: si vous progressez 
		dans telle ou telle matière, vous pouvez modifier votre niveau à votre convenance. Egalement, si vous 
		pensez vous être surestimé dans une technologie, vous pouvez revenir sur votre évaluation.
		</p>
		</div>
		<h3>Comment proposer un projet ?</h3>
		<div>
		<p>
		Pour proposer un nouveau projet, vous pouvez devez simplement cliquer la bulle prévue à cet effet. 
		Le fonctionnement est simple et intuitif, laissez vous guider !
		</p>
		</div>
		<h3>J'ai perdu mon mot de passe, comment le récupérer ?</h3>
		<div>
		<p>
		Pour récupérer votre mot de passe, vous devez vous adresser à un administrateur dans la rubrique contact, 
		en lui indiquant votre adresse mail. Le générateur de nouveau mots de passe est en construction...
		</p>
		</div>
		</div>
	</body>
</html>