<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Ibk - Fábrica de Calçados e Eva</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" href="img/logo.png" sizes="32x32">
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo">
            <img src="img/logo.png"/>
        </a>

        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="category-calcados.php">Calçados</a></li>
            <li><a href="category-eva.php">EVA</a></li>
        </ul>

        <!-- Dropdown Structure -->
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="rep-calcados.php">Calçados</a></li>
            <li><a href="rep-eva.php">EVA</a></li>
        </ul>

        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Início</a></li>
            <li><a href="empresa.php">A Empresa</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger" href="javascript:void(null)" data-target="dropdown1">Produtos<i class="material-icons right">arrow_drop_down</i></a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger" href="javascript:void(null)" data-target="dropdown2">Representantes<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="contato.php">Contatos</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>