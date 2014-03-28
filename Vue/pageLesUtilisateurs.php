<!--Ici commence la partie corps de page actualisable-->				
<div id="corps_page">				
    <div id="presentation">
        <section>
            <article id="presentation">
                <h1 id="titrePresentation3">Les utilisateurs</h1>
            </article>

            <article class="recherche2">									
                <form id="formulaire" method="get" action="search.php">
                    <h4 id="titreComp">Rechercher un utilisateur</h4>
                    <label id="search2" for="labelRecherche">Par nom :</label>
                    <input id="saisiecomp" value ="" type="text" name="competence" placeholder="Nom"/>
                    </br>
                    <!------------------- champ de sélection des compétences -------------------> 

<!--                    <label id="search2" for="labelRecherche">Par compétence :</label>
                    <select id="listechoix" name="choix">

                        <option id="champliste2" value="html"> - CHOISISSEZ - </option>
                        //<?php
                        //champs de la compétence mère
                        //echo "<optgroup id=\"champliste1\" label=\"" . $skills[$key] = $value->getName() . "\">";
                        //champs des compétences à sélectionner
                        //echo "<option id=\"champliste2\" value=\"skill" . $skills[$key] = $value->getId() . "\">" . $skills[$key] = $value->getName() . "</option>";

                        //echo "</optgroup>";
                        //?>
                    </select>-->

                    <!------------------- fin champ de sélection des compétences ------------------->  

                    </br>	

                    <!------------------- champ de sélection de l'école ------------------->
                    <label id="search2" for="labelRecherche">Par Ecole :</label>
                    <select id="listechoix2" name="choix">

                        <option id="champliste2" value="html"> - CHOISISSEZ - </option> 
                        <?php
                        foreach ($school as $key => $value) {
                            echo "<option id=\"champliste2\" value=\"school" . $school[$key] = $value->getId() . "\"> IMIE " . $school[$key] = $value->getName() . "<option>";
                        }
                        ?>
                        </br>
                        <input id="boutonform2" name="validation" type="submit" value="Envoyer"/>

                        <!--?php
                        if(isset($_GET["labelRecherche"]) && isset($_GET["validation"]))
                                {
                                if($_GET["labelRecherche"]=="autres")
                                        {
                                        echo "<input type='text' name='text' placeholder='Saisissez votre job'/>";
                                        }
                                }
                        ?-->

                    </select>
                    <!------------------- fin champ de sélection de l'école ------------------->
                </form>
            </article>	

            <!------------------- Affichage des résultats------------------->

            <section id="resultat">				
                <h4 id="titreComp2">Résultats de votre recherche</h4>

                <table id="tableau_result">
                    <tr>
                        <th id="thnom">Nom</th>
                        <th id="thcomp">Compétences</th>
                        <th id="thecole">Ecole</th>
                    </tr>
                </table>
                <div id="overflowtableau">

                    <table id="tabcell">
                        <?php
                        //$userList est le tableau retourné par le select()
                        foreach ($userList as $key => $value) {
                            echo "<tr>";
                            echo "<td id =\"cellule\">" . $userList[$key] = $value->getName() . " " . $userList[$key] = htmlspecialchars($value->getSurname()) . "</td>";
                            echo "<td id =\"cellule\">" . $userList[$key] = $value->getAdress1() . "</td>";
                            echo "<td id =\"cellule\">" . $userList[$key] = $value->getSchoolCity() . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </section>

            <!------------------- Fin affichage des résultats ------------------->

        </section>					
        </section>
    </div>
</div>
<aside>
    <a id="boutonProjet" href="formulaireProjet.php"><img src="images/image.png" alt="logo_prop" title="cliquez"/></a>
</aside>
