<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Content management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
  </head>
<body>
    <h1>C-M-S</h1>
    <?php
    include_once 'nav.php';
    ?>
    <!-- <p>
      <a href="create.php" type="button" class="btn btn-success">Add new article</a>
    </p> -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Date created</th>
      
      <!-- <button type="button" class="btn btn-info">Edit</button> -->
    </tr>
 </thead>
  </table>
<label for="w3review">Review of W3Schools:</label>

<textarea id="w3review" name="w3review" rows="4" cols="50">
<?php  
    echo ('$head')
?>
</textarea>
</body>
</html>