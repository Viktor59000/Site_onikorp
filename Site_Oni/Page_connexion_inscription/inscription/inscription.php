<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Inscription</title>
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
                <h2 class="text-center">S'inscrire</h2>       
                <div class="form-group">
                    <input type="pseudo" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                    <p class="inscription">J'ai déjà crée un <span><a href="../connexion/index.php">Compte</a></span>. Je m'y <span><a href="..\connexion\connexion.html">Connecte</a></span></p>
                </div>   
            </form>
        </div>
        <style>
                body{
                    display: flex;
                    font-family: 'agency-fb', sans-serif;
                    text-align: center;
                    justify-content: center;
                    background-color: #404040;
                }
                
                form {
                    margin-top: 20px;
                    padding: 40px 60px;
                    border-radius: 10px;
                    min-width: 300px;
                    font-family: 'agency-fb', sans-serif;
                }

                form h2{
                    color: #C23028;
                    font-family: 'agency-fb', sans-serif;
                    text-align: center; 
                }

                form div.form-group {
                    display: flex;
                    flex-direction: column;
                }

                form div.form-group input[type='pseudo'], input[type='email'], input[type='password'], input[type='password_retype'] {
                    padding: 20px 10px;
                    border:none;
                    background-color: #C23028;
                    opacity: 80%;
                    color: #FFFFFF;
                    outline:none;
                    margin-bottom: 10px;
                    font-family: 'agency-fb', sans-serif;
                    transition: 1s;
                }
                form div.form-group input[type='pseudo']:hover, input[type='email']:hover, input[type='password']:hover, input[type='password_retype']:hover {
                    opacity: 100%;
                }
                form div.form-group input[type='pseudo']::placeholder, input[type='email']::placeholder, input[type='password']::placeholder, input[type='password_retype']::placeholder {
                    opacity: 100%;
                    color: #FFFFFF;
                }

                form p.inscription{
                    font-size: 14px;
                    margin-bottom: 20px;
                    margin-top: 15px ;
                    color: #fff;
                    font-family: 'agency-fb', sans-serif;
                    text-align: center;
                    justify-content: center;
                    text-decoration: none;

                }
                form p.inscription span{
                    color: #e06d67;
                    font-family: 'agency-fb', sans-serif;
                    text-decoration: none;
                }form p.inscription span > a{
                    text-decoration: none;
                    color: #e06d67;
                    transition: 1s;
                }
            }form p.inscription span > a:hover{
                    text-decoration: none;
                    color: #C23028;
                }

                form div.form-group button{
                    padding: 10px 15px;
                    border:none;
                    font-size: 16px;
                    color: #fff;
                    background-color: #C23028;
                    opacity: 75%;
                    outline:none;
                    cursor:pointer;
                    font-family: 'agency-fb', sans-serif;
                    transition: 1s;
                }
                form div.form-group button:hover{
                    opacity: 100%;
                }

            
        </style>
        </body>
</html>
