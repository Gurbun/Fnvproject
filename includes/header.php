<?php
$lang = $_GET['lang'] ?? 'nl';

$text = [
    'nl' => [
        'home' => 'Home',
        'about' => 'Over ons',
        'news' => 'Nieuws',
        'agenda' => 'Agenda',
        'photos' => 'Foto’s',
        'info' => 'Informatie',
        'contact' => 'Contact',
        'admin' => 'Admin'
    ],
    'en' => [
        'home' => 'Home',
        'about' => 'About us',
        'news' => 'News',
        'agenda' => 'Agenda',
        'photos' => 'Photos',
        'info' => 'Information',
        'contact' => 'Contact',
        'admin' => 'Admin'
    ]
];

$t = $text[$lang] ?? $text['nl'];
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FNV Heerenveen-Opsterland</title>

    <meta name="description" content="FNV Heerenveen-Opsterland ondersteunt mensen in de regio Heerenveen met werk, inkomen, sociale zekerheid, bijeenkomsten en advies.">
    <meta name="keywords" content="FNV Heerenveen, vakbond Heerenveen, FNV Heerenveen-Opsterland, werk, inkomen, sociale zekerheid, vakbond">
    <meta name="author" content="FNV Heerenveen-Opsterland">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark fnv-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="index.php?lang=<?php echo $lang; ?>">
            <img src="images/LokaalFNV.jpg" alt="FNV logo" class="site-logo">
            <span>FNV Heerenveen</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php?lang=<?php echo $lang; ?>"><?php echo $t['home']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="over-ons.php?lang=<?php echo $lang; ?>"><?php echo $t['about']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="nieuws.php?lang=<?php echo $lang; ?>"><?php echo $t['news']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="agenda.php?lang=<?php echo $lang; ?>"><?php echo $t['agenda']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="fotos.php?lang=<?php echo $lang; ?>"><?php echo $t['photos']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="informatie.php?lang=<?php echo $lang; ?>"><?php echo $t['info']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php?lang=<?php echo $lang; ?>"><?php echo $t['contact']; ?></a></li>
            </ul>

            <div class="d-flex gap-2 align-items-center">
                <a class="language-link" href="?lang=nl">NL</a>
                <a class="language-link" href="?lang=en">EN</a>
                <a class="btn btn-success btn-sm rounded-pill px-3" href="admin/login.php"><?php echo $t['admin']; ?></a>
            </div>
        </div>
    </div>
</nav>