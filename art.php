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


  <aside>
    <div class="gallery-container">
      <div class="gallery-image">
        <img src="images/space_girl.png" alt="Image 1"> 
      </div>
      <div class="gallery-image">
        <img src="images/fishtower.jpg" alt="Image 2">
      </div>
      <div class="gallery-image">
        <img src="images/zebra.jpg" alt="Image 3">
      </div>
    </div>
  </aside>


  <main class="container fade-in-animation">
    <h1>My Art Projects</h1>
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">ArtStation</h2>
            <p class="card-text">The arts/designs I'm most proud of! </p>
            <p class="card-text">Sort by theme available </p>
            <p class="card-text-small">Updated 7 months ago</p>
            <a href="https://cyb3rdragon.artstation.com" target="_blank" class="btn btn-primary">View on ArtStation</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Fiverr</h2>
            <p class="card-text">Designs I made for customers all around the world</p>
            <p class="card-text">◾ 70+ orders completed so far</p>
            <p class="card-text">◾ 4.9/5⭐ average rating</p>
            <p class="card-text">◾ 60+ reviews/feedbacks</p>
            <a href="https://www.fiverr.com/irondragon51" target="_blank" class="btn btn-primary">View on Fiverr</a>
          </div>
        </div>
      </div>
    </div>
    <h1 class="text-center"><a href="https://www.instagram.com/cyberdragon_art" target="_blank" class="btn btn-outline-secondary">View More Arts on Instagram</a></h1>
    <h1 class="text-center"><a href="https://www.tiktok.com/@cyberdragonart" target="_blank" class="btn btn-outline-secondary">View Progress videos on TikTok</a></h1>
  </main>

  <?php include 'footer.php'; ?>
