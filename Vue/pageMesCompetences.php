
<!--Ici commence la partie corps de page actualisable-->

<div id="corps_page">

    <div id="presentation">
        <section>
            <article id="presentation">
                <h1 id="titrePresentation2">Mes compétences</h1>
            </article>
            <article class="competence">
                <p>
                <h4 id="titreComp">Web</h4>
                <ul>
                        <!--li id="comp">HTML 5 <img id="eval" src="images/evaluation.png" title="evaluation pleine" alt=""/> </li-->
                    <li id="comp">HTML 5
                        <!--système de notation sous forme d'étoiles ☆-->
                        <!--div class="rating">
                           <a href="#5" title="Donner 5 étoiles">■</a> 
                           <a href="#4" title="Donner 4 étoiles">■</a> 
                           <a href="#3" title="Donner 3 étoiles">■</a>
                           <a href="#2" title="Donner 2 étoiles">■</a>
                           <a href="#1" title="Donner 1 étoile">■</a>  
                        </div-->
                        <?php include ("systemeNotation.php"); ?>
                    </li> 
                    <li id="comp">PHP
                        <?php include ("systemeNotation.php"); ?>
                    </li>
                    <li id="comp">CSS3
                        <?php include ("systemeNotation.php"); ?>
                    </li>
                </ul>
                </p>
                <p>
                <h4 id="titreComp">Méthodologie</h4>
                <ul>
                    <li id="comp">UML
                        <?php include ("systemeNotation.php"); ?>
                    </li>
                    <li id="comp">AGILITE
                        <?php include ("systemeNotation.php"); ?>
                    </li>
                </ul>	
                </p>
                <p>
                <h4 id="titreComp">Persistence des données</h4>	
                <ul>
                    <li id="comp">Langage SQL
                        <?php include ("systemeNotation.php"); ?>
                    </li>
                    <li id="comp">PostgreSQL
                        <?php include ("systemeNotation.php"); ?>
                    </li>
                </ul>	
                </p>
                <p>
                <h4 id="titreComp">Langage Objet</h4>	
                <ul>
                    <li id="comp">JAVA
                        <?php include ("systemeNotation.php"); ?>
                    </li>
                    <li id="comp">Autre
                        <?php include ("systemeNotation.php"); ?>
                    </li>
                </ul>	
                </p>				
            </article>
            <article class="recherche">

                <form id="formulaire" method="post" action="traitement.php">	

                      <fieldset id="headrecherche">
                      <h4 id="titreComp">Rechercher une compétence</h4>
                    <label id="search" for="labelRecherche">Recherche :</label>
                    <input id="saisiecomp" value ="" type="text" name="competence" placeholder="Compétence"/></br>
                    <input id="boutonform" name="validation" type="submit" value="Proposer"/>
                    </fieldset></br>

                    <div id="formcomp"><form>
                            <input type="checkbox" name="choix" value="SQL"><span id="boutonradio">Langage SQL</span></br>
                            <input type="checkbox" name="choix" value="postgre"><span id="boutonradio">PostgreSQL</span></br>
                            <input type="checkbox" name="choix" value="mysql"><span id="boutonradio">MySQL</span></br>
                        </form>
                    </div>
                    <input id="boutonform" name="ajouter" type="submit" value="Ajouter"/>

                </form>					
            </article>
        </section>
    </div>
    <aside>
        <a id="boutonProjet" href="formulaireProjet.php"><img src="Vue/images/image.png" alt="logo_prop" title="cliquez"/></a>
    </aside>
</div>
