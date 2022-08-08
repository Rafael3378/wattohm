<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="topHeader">
        <nav>
            <ul class="nav">
                <li class="menu"><a href="#"><img class="logo" src="images/icons8-home-96.png" alt="logo"/></a></li>
                <li class="menu"><a href="#"><img class="logo" src="images/icons8-info-64.png" alt="logo"/></a></li>
                <li class="menu"><a href="#"><img class="logo" src="images/icons8-galerie-96.png" alt="logo"/></a></li>
                <li class="menu"><a href="#"><img class="logo" src="images/icons8-mallette-128.png" alt="logo"/></a></li>
                <li class="menu"><a href="#"><img class="logo" src="images/icons8-stylo-à-bille-100.png" alt="logo"/></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php require_once $view; ?>
    </main>
    <Footer>
        
    </Footer>
</body>
</html>