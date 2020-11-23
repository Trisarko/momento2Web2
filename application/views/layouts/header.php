<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB II - SEGUNDO MOMENTO</title>
    <!-- Fuente Personalizada https://fonts.google.com/-->  
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet"> 
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Efecto ScrollReveal https://scrollrevealjs.org/ -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Mi Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
</head>

<body>

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top ">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('home') ?>"><span class="font-weight-bold">WEB II - SEGUNDO MOMENTO</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">                        
                        <a class="nav-link" href="<?php echo base_url('home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('users') ?>">Registrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('contact') ?>">Contacto</a>
                    </li>                      
                </ul>
            </div>
      </div>
    </nav>
