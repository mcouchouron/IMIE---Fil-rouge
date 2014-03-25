progressbar.php

<?php

  function Initialize($gauche,$haut,$largeur,$hauteur,$bord_col,$txt_col,$bg_col)
  {
   $tailletxt=$hauteur-10;
   echo '<div id="pourcentage" style="position:absolute;top:'.$haut;
   echo ';left:'.$gauche;
   echo ';width:'.$largeur.'px';
   echo ';height:'.$hauteur.'px;border:1px solid '.$bord_col.';font-family:Tahoma;font-weight:bold';
   echo ';font-size:'.$tailletxt.'px;color:'.$txt_col.';z-index:1;text-align:center;">0%</div>';

   echo '<div id="progrbar" style="position:absolute;top:'.($haut+1); //+1
   echo ';left:'.($gauche+1); //+1
   echo ';width:0px';
   echo ';height:'.$hauteur.'px';
   echo ';background-color:'.$bg_col.';z-index:0;"></div>';

  }
  function ProgressBar($indice)
  {
    echo "\n<script>";
    echo "document.getElementById(\"pourcentage\").innerHTML='".$indice."%';";
    echo "document.getElementById('progrbar').style.width=".($indice*2).";\n";
    echo "</script>";
    flush();  // explication : http://www.manuelphp.com/php/function.flush.php
  }

?>


 index.php


<html>
<body>
<?php

  include ("progressbar.php");
  
//Initialize(x,y,largeur,hauteur,'couleur bordure','couleur du pourcentage','couleur de la barre de progression');
  Initialize(50,60,200,30,'#000000','#FFCC00','#006699');  // initialisation de la barre de progression
  for ($i=0;$i<=100;$i++)
  {
  ProgressBar($i);   // réaffichage de la barre avec le nouvel indice
  //***********************
  // ici on mets notre code
  for ($j=0;$j<=100000;$j++)  {$p=1;} // dans cette exemple, j'ai une boucle de retardement
  //**************************
  }
?>
</body>
</html>