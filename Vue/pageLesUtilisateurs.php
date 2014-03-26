<!--Ici commence la partie corps de page actualisable-->				
<div id="corps_page">				
    <div id="presentation">
        <section>
            <article id="presentation">
                <h1 id="titrePresentation3">Les utilisateurs</h1>
            </article>

            <article class="recherche2">									
                <form id="formulaire" method="get" action="traitement.php">
                    <h4 id="titreComp">Rechercher un utilisateur</h4>
                    <label id="search2" for="labelRecherche">Par nom :</label>
                    <input id="saisiecomp" value ="" type="text" name="competence" placeholder="Nom"/>
                    </br>										
                    <label id="search2" for="labelRecherche">Par compétence :</label>
                    <select id="listechoix" name="choix">
                        <option id="champliste2" value="html"> - CHOISISSEZ - </option>
                        <optgroup id="champliste1" label="Web"> 
                            <option id="champliste2" value="html">HTML 5</option>
                            <option id="champliste2" value="php">PHP</option>
                            <option id="champliste2" value="css">CSS3</option>
                        </optgroup>
                        <optgroup id="champliste1" label="Méthodologie"> 
                            <option id="champliste2" value="uml">UML</option>
                            <option id="champliste2" value="agilite">Agilité</option>
                        </optgroup>
                        <optgroup id="champliste1" label="Persistence des données"> 
                            <option id="champliste2" value="langagesql">Langage SQL</option>
                            <option id="champliste2" value="postgresql">PostgreSQL</option>
                        </optgroup>
                        <optgroup id="champliste1" label="Langage Objet"> 
                            <option id="champliste2" value="java">Java</option>
                            <option id="champliste2" value="poo">POO</option>
                        </optgroup>
                    </select>
                    </br>				
                    <label id="search2" for="labelRecherche">Par Ecole :</label>
                    <select id="listechoix2" name="choix">
                        <option id="champliste2" value="html"> - CHOISISSEZ - </option> 
                        <option id="champliste2" value="html">IMIE Nantes</option>
                        <option id="champliste2" value="php">IMIE Rennes</option>
                        <option id="champliste2" value="css">IMIE Angers</option>		

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
                </form>
            </article>						
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
                            echo "<td id =\"cellule\">" . $userList[$key] = htmlspecialchars($value->getName()) . " " . $userList[$key] = htmlspecialchars($value->getSurname()) . "</td>";
                            echo "<td id =\"cellule\">" . $userList[$key] = htmlspecialchars($value->getAdress1()) . "</td>";
                            echo "<td id =\"cellule\">" . $userList[$key] = htmlspecialchars($value->getSchoolId()) . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </section>
        </section>					
        </section>
    </div>
</div>
<aside>
    <a id="boutonProjet" href="formulaireProjet.php"><img src="images/image.png" alt="logo_prop" title="cliquez"/></a>
</aside>
