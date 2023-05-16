<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cyber Dragon - Artist & Coder</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon-16x16.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-FGNgDh4W75N4xODyL9mp/4ovTgTfCHSAdMk3qUIZaT4g4J75xFvo4RHx+NptR9xn+Q2OFax1W8zZt+DImt/vkA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="animation.css">
</head>

<body>

  <header>
    <button class="navbar-toggler">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav-brand">
      <img src="images/irondragon_logo.png" alt="logo" class="img-logo">
      <a href="#">Cyber Dragon</a>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="art.php">Art</a></li>
        <li><a href="code.php">Code</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>


  <main class="container fade-in-animation">
    <h1>My Programming Projects</h1>
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Bill Manager</h2>
            <p class="card-text">An application for managing bills and payments.</p>
            <a href="https://github.com/IronDragon51/Bill" target="_blank" class="btn btn-primary">View on GitHub</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Blood Sugar Manager</h2>
            <p class="card-text">A web application for tracking blood sugar levels.</p>
            <a href="https://github.com/IronDragon51/BloodSugar" target="_blank" class="btn btn-primary">View on GitHub</a>
          </div>
        </div>
      </div>
    </div>
    <p class="text-center"><a href="https://github.com/IronDragon51" target="_blank" class="btn btn-outline-secondary">View More Projects on GitHub</a></p>
  </main>


  <?php include 'footer.php'; ?>