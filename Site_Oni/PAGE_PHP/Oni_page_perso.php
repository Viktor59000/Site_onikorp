<?php 
    session_start();
    require_once 'Oni_config.php'; 
   
    if(!isset($_SESSION['user'])){
        header('Location:Oni_connexion.php');
        die();
    }

    
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>

<head>
    <!doctype html>
    <html lang="fr">


    <title>Espace membre | Oni korp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>


            <div class="text-center">
                <h1 class="p-5">Bonjour <?php echo $data['pseudo']; ?> !</h1>
                <hr />
                <a href="Oni_deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
                </button>
            </div>
        </div>
    </div>
</body>

</html>