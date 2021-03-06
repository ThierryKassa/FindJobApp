<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Job Lister</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/flatty_bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
      <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">

        <a href="#" class="navbar-brand">Job Lister</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="create.php">Create Listing</a></li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  

      </div>
    </div>
    </div>

  <div class="container">
    <div class="bs-docs-section">
      <?php displayMessage(); ?>