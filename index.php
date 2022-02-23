<?php
include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Newsletter Subscription</title>
  </head>
  <body>
    <button class="show-modal" center>Press Me</button>

    <div class="modal hidden">
      <button class="close-modal">&times;</button>
      <h1>Subscribe to our</h1>
      <h2>Newsletter</h2>
      <p>
        <div class="container">
          <div class="col-sm-6">
              <form action="index.php" method="post">
                  <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control">
                  </div>
      
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="name" name="name" class="form-control">
                  </div>
      
                  <input type="submit" name="submit" class="btn btn-primary">
              </form>
          </div>
        </div>
      </p>
    </div>
    <div class="overlay hidden"></div>
    
    <script src="script.js"></script>
  </body>
</html>
