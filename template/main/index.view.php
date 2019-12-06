<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saulius</title>
    <link type="text/css" rel="stylesheet" href="template/<?=activeTemplate;?>/css/bootstrap.css">
    <script type="text/javascript" src="template/<?=activeTemplate;?>/js/jquery.slim.js"></script>
    <script type="text/javascript" src="template/<?=activeTemplate;?>/js/bootstrap.min.js"></script>
    <link href="template/<?=activeTemplate;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/<?=activeTemplate;?>/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id=sidebar-wrapper">
            <div class="sidebar-heading"><?=$siteName;?></div>
            <div class="li st-group list-group-flush"></div>
        </div>
    </div>
<header>
    <h1>Filmu aplikacija</h1>
</header>
<nav>
    <ul>
        <li><a href="#">Visi filmai</a></li>
        <li><a href="#">Prieti filma</a></li>
        <li><a href="#">Filmai pagal zanra</a></li>
        <li><a href="#">Filmo paieska</a></li>
        <li><a href="#">Zanru valdymas</a></li>
    </ul>
</nav>
<section class="about-project">
    <h2>Apie projekta</h2>
    <p>Trumpai apie projekta</p>
</section>
<main>
    <h2>Naujausi filmai</h2>
    <article>
    <p>Filmo pavadinimas</p>
    <p>Aprasymas</p>
    <a href="#">Daugiau...</a>
    </article>
    <article>
        <p>Filmo pavadinimas</p>
        <p>Aprasymas</p>
        <a href="#">Daugiau...</a>
    </article>
    <article>
        <p>Filmo pavadinimas</p>
        <p>Aprasymas</p>
        <a href="#">Daugiau...</a>
    </article>

</main>
<footer>

</footer>


</body>
</html>