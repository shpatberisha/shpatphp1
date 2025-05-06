<a?php

include_once('config.php');

$sql="SELECT * FROM movies";
$selectMovies=$conn->prepare($sql);
$selectMovies->execute();

$movies_data=$selectMovies->fetchAll();

?>

<!DOCTYPE html>
 <html>
 <head>
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">
 </head>
 <body>

 <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>


  <div class="album py-5 bg-light">
    <div class="container">


      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php
    foreach($movies_data as $movie_data){
    ?>
    <div class="col">
      <div class="card shadow-sm">
        <img src="movie_images/<?php echo $movie_data['movie_image'];?>" height="350">
        <div class="card-body">
          <h4><?php echo $movie_data['movie_name'] ?></h4>
          <p class="card-text"><?php echo $movie_data['movie_desc'] ?></p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
             <a href="details.php?id=<?php echo $movie_data['id'];?>" class="btn btn-sm btn-outline-secondary">View</a>
             <a href="edit.php?id=<?php echo $movie_data['id'];?>" class="btn btn-sm btn-outline-secondary">Edit</a>
            </div>
            <small class="text-muted">Rating:<?php echo $movie_data['movie_rating']; ?></small>
            <small class="text-muted"><?php echo $movie_data['movie_quality']; ?></small>
          </div>
        </div>


      </div>
    </div>


    <?php
    }
    ?>
      <?php
        
        ?>





        
      </div>
    </div>
  </div>


  



 </body>
 </html>
 </body>

