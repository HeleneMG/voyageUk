<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style2.css">
        <title><?php echo $title ?? "titre1 par défaut" ?></title>
    </head>

    <body>
        <header>
            <div class="container">
                <nav>
                    <ul class="menu">
                        <li><a href="index.php">Accueil</a></li>
                        <li class="dropdown"><a href="#">Galerie</a>
                            <ul class="dropdown-content cache">
                                <li><a href="angleterre.php">Angleterre</a></li>
                                <li><a href="ecosse.php">Ecosse</a></li>
                                <li><a href="irlande.php">Irlande du Nord</a></li>
                                <li><a href="galles.php">Pays de Galles</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <h1>Le Royaume-Uni</h1>
                <nav>
                    <ul class="menu">
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
