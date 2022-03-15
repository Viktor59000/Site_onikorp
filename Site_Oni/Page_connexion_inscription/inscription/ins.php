<!DOCTYPE HTML>
<!--Crée un compte Oni korp a de divers avantage. Ainsi cette page sert a se crée un compte chez la Oni korp.-->
<html lang="fr">
	<head>
		<title>Inscription | Oni Korp</title> <!--On nomme l'onglet-->
		<meta charset="uft-8" />
		<link rel="icon" href="../../Assets/emoji_site_oni.png">	<!--On applique une icone-->
		<link rel="stylesheet" href="ins.css">			<!--On lie le css a l'html-->
	</head>

    <body>
        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">
                <h1 class="text-center">S'inscrire</h1>       
                <div class="inputs">
                    <input type="Pseudo" name="Pseudo"  placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="inputs">
                    <input type="email" name="email"  placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="inputs">
                    <input type="password" name="password"  placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="inputs">
                    <input type="password" name="password_retype"  placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="inputs">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>
                <p class="inscription">J'ai déjà crée un <span><a href="..\connexion\connexion.html">Compte</a></span>. Je m'y <span><a href="..\connexion\connexion.html">Connecte</a></span></p>
   
            </form>
        </div>
    </body>
</html>

