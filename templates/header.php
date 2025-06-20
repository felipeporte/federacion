<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Federación de Patinaje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./../public/css/style.css">
    <?php if (isset($extra_head)) echo $extra_head; ?>
</head>
<body<?php if (isset($body_class)) echo ' class="' . $body_class . '"'; ?>>
<header class="site-header">
  <div class="container d-flex align-items-center justify-content-between py-3">
    <a href="/index.php" class="navbar-brand">
       <img src="https://artistico.cl/blancox2.png" alt="Logo Federación" class="logo">
    </a>
    <button class="menu-toggle navbar-toggler" aria-label="Abrir menú" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <nav class="nav collapse navbar-collapse" id="mainNav">
      <a href="/index.php" class="nav-link">Inicio</a>
      <a href="/inscripciones" class="nav-link">Inscripciónes</a>
      <a href="/calendario/index.php" class="nav-link">Calendario 2025</a>
      <a href="/reglamento/index.php" class="nav-link">Reglamento 2025</a>
      <a href="/login.php" class="nav-link">Login</a>
    </nav>
  </div>
</header>
<div class="header-sticky-bar"></div>
