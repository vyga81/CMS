<?php

require_once 'bootstrap.php';

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
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <?php

                    $address = $entityManager->getRepository('Blog\Content')->findAll();
                    echo '<li>';
                    foreach ($address as $p)
                        echo '<li> <a class="nav-link m-1" href="?id=' . $p->getId() . '">' . $p->getTitle() . '</a></li>';
                    ?>
      </div>
    </div>
  </div>
</nav>
    <h1>C-M-S</h1>
    <?php
    include_once 'nav.php';
    ?>
    <!-- <p>
      <a href="create.php" type="button" class="btn btn-success">Add new article</a>
    </p> -->
    


 <?php 
 
 
 if (!isset($_GET['id'])){
 echo'<table class="table">'
  .'<thead>'
    .'<tr>'
      .'<th scope="col">#</th>'
      .'<th scope="col">Title</th>'
      .'<th scope="col">Date created</th>'
      
      
    .'</tr>'
    
  .'</thead>'
  .'<tbody class="table-group-divider">';
     
    $content = $entityManager->getRepository('Blog\Content')->findAll();
    //print_r($content);
    foreach ($content as $i => $post):  
    
        echo '<tr>'
        .'<th scope="row">' . $i +1 .'</th>'
       . '<td><a href="home?id='  . $post->id . '">' . $post->title . '</a></td>'
        .'<td>'.  $post->create_date->format('Y-m-d H:i:s') . '</td>'
        
         
        .'</tr>';
    endforeach; 
  echo '</tbody>'
  
  .'</table>';
 }
 
 if (isset($_GET['id'])) {
            $add = $entityManager->getRepository('Blog\Content')->findBy(array('id' => $_GET['id']));
            echo '<div>';
            foreach ($add as $z)
                echo "<br>"
                    . "<tr>"
                    . "<td>" . $z->getContent() . "</td>"
                    . "</tr>"
                    . "</div>";
        }


        ?>
</body>
</html>