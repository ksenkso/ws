<?php


?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ЭКО-Окна</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="page__container">
    <?php include_once 'partials/_header.php';?>
    <?php include_once "partials/_menu.php"; ?>
    <?php include "partials/_action.php"; ?>
    <div class="offers">
        <?php include "partials/_offer.php"; ?>
    </div>
    <div class="offers">
        <?php include "partials/_offer.php"; ?>
    </div>
    <div class="offers">
        <?php include "partials/_offer.php"; ?>
    </div>
</div>
<script src="js/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
