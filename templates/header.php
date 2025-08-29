<?php
    include_once("helpers/url.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?php echo $BASE_URL; ?>" id="logo">
            <img src="<?php echo $BASE_URL; ?>/img/logo.svg" alt="Blog do Jabs">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?php echo $BASE_URL; ?>" class="nav-link">Home</a></li>
                <li><a href="<?php echo $BASE_URL; ?>contact.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>