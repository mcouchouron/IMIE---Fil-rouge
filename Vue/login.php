<!Doctype html>
<html>
    <head>
        <title>Bienvenue</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="Vue/css/connexion.css" />
    </head>

    <body>
        <header>
            <div id="bandeau">
                <img id="logo" src="images/imieLogo.jpg" alt="logoImie" title="logoImie"/>
                <p id="My">My</p><p id="Imie">imie</p></br>
                <p id="skill">skills</p>

                <p id="titre_idee">"De l'idée...</p>

                <fieldset>
                    <form action="pageheader.php" method="post">
                        <input id='inputLogin' type='text' name='login' placeholder='Login'/>
                        <input id='inputMotdepasse' type='password' placeholder='Mot de passe' />
                    </form>
                    <div id="button">
                        <a id="boutonconnexion" href="index.php?ctrl=pageAccueil">CONNEXION</a>
                    </div>				
                </fieldset>

            </div>
        </header>
    </body>
</html>