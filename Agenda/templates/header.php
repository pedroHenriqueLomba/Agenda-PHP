<?php
    include_once ("config/helper.php");
    include_once ("config/connection.php");
    include_once ("config/process.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="<?=$baseURL?>CSS/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Agenda</title>
</head>
<body>
    <header>
        <nav>
            <ul id = "barra_navegacao" >
                <li><a href="<?=$baseURL?>index.php"><img src="<?=$baseURL?>img/logo.svg" alt="logo Agenda" id="logo"></a></li>
                <li><a href="<?=$baseURL?>index.php" class="home">Home</a></li>
                <li><a href="<?=$baseURL?>add.php">Adicionar contatos</a></li>
            </ul>
        </nav>
    </header>
