<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../PAGE_CSS/Oni_connexion.css">
    <title>Connexion | Oni Korp</title>
</head>

<body>

    <div class="login-form">
        <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> mot de passe incorrect
        </div>
        <?php
                        break;

                        case 'email':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> email incorrect
        </div>
        <?php
                        break;

                        case 'already':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> compte non existant
        </div>
        <?php
                        break;
                    }
                }
                ?>

        <form action="Oni_connexion_traitement.php" method="post">
            <h2 class="text-center">Connexion</h2>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe"
                    required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Connexion</button>
            </div>
        </form>
        <p class="inscription">Je n'ai pas de <span>Compte</span>. Je m'en <span><a href="Oni_inscription.php">Crée
                    un</a></span>.</p>

    </div>
</body>

</html>