<?php
require_once 'bootstrap.php'




?>
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
  <tbody class="table-group-divider">
    <?php 
    $content = $entityManager->getRepository('Blog\Content')->findAll();
    //print_r($content);
    foreach ($content as $i => $post):  
    ?>
        <tr>
        <th scope="row"><?php echo $i +1 ?></th>
        <td><a href="content.php?id=<?php echo $post->content; ?>"><?php echo $post->title ?></a></td>
        <td><a href=""><?php echo $post->create_date->format('Y-m-d H:i:s') ?></a></td>
        
         
        </tr>
    <?php endforeach; ?>    
  </tbody>
  
  </table>

</body>
</html>