<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- <link href="<?= base_url('assets/css/style.css') ?>"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title><?= $judulhlm ?></title>
</head>

<body>
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
<div class="navbar-nav">
                    <a class="nav-link" href="<?= base_url('/') ?>">Home</a>
                    <a class="nav-link" href="<?= base_url('/Admin') ?>">Admin</a>
                    <a class="nav-link" href="<?= base_url('/Pengadaan') ?>">Pengadaan</a>
                </div>  
  </div>
</div>
<nav class="navbar navbar-dark bg-success">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?= base_url('/') ?>">
                <img src="<?= base_url('/assets/img/bdi-denpasar.jpg') ?>" height="24" class="d-inline-block align-text-top">
                BDIBOOKSTORE
            </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
 
    <span class="navbar-toggler-icon"></span>
     
    </button>
  </div>
</nav>


           