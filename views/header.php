<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARP-Sunarp</title>
    <!-- Latest compiled and minified CSS -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="public/css/estilo.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-arp">
        <a class="navbar-brand" href="#">ARP-Sunarp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav item-menu ">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo constant('URL')?>main">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?php echo constant('URL')?>nuevo">Nuevo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo constant('URL')?>consulta">Consulta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo constant('URL')?>ayuda">Ayuda</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="header">

    </div>
   