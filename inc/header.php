<?php
require_once 'config/db_connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fishing Store</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="8IMhttps://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">


</head>

<body>
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark text-white">
        <div class="container">
            <a href="index.php" class="navbar-brand">FishyWish
                <img src="/assets/logo-img/fishing.png" width="40" height="40" alt="">
            </a>

            <form class="input-group w-auto mb-0" role="search">
                <input type="text" class="form-control" placeholder="Search">
                <button class="btn btn-danger" type="submit">Go</button>
            </form>

            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fs-5 text-white">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="products.php" class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <!-- Carousel -->
    <div class="container-fluid mt-5">
</html>