<?php

use Blog\Content;

// Helper functions
function redirect_to_root()
{
  header("Location: /app6/home");
}

if (!isset($_SESSION['logged_in'])) {
  redirect_to_root();
}

echo $error = "";

// Logout
if (isset($_GET['action']) and $_GET['action'] == 'logout') {
  unset($_SESSION['username']);
  unset($_SESSION['password']);
  unset($_SESSION['logged_in']);
  redirect_to_root();
  exit;
}


// Add new article title+content
if (isset($_POST['headline'])) {
  if (empty($_POST['headline'])) {
    $_SESSION['message'] = 'Empty address';
    $_SESSION['message_type'] = 'danger';
  } else {
    $content = new Content();
    $content->setTitle($_POST['headline']);
    $content->setContent($_POST['content']);
    $entityManager->persist($content);
    $entityManager->flush();
    $_SESSION['message'] = 'Created';
    $_SESSION['message_type'] = 'success';
    redirect_to_root();
    exit();
  }
}

// Delete article
if (isset($_GET['delete'])) {
  $content = $entityManager->find('Blog\Content', $_GET['delete']);
  $entityManager->remove($content);
  $entityManager->flush();
  redirect_to_root();
}

// Update
if (isset($_POST['update'])) {
  $content = $entityManager->find('Blog\Content', $_POST['id']);
  $content->setTitle($_POST['update']);
  $content->setContent($_POST['content']);
  $entityManager->flush();
  redirect_to_root();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <title>Admin</title>
  <style>
    .container {
      min-height: 95vh;
    }

    .big {
      height: 250px;
    }

    input[type=text]:focus {
      background-color: lime;
    }

    textarea[type=text]:focus {
      background-color: lime;
    }


    textarea {
      resize: none;
    }
    .content {
      max-width: 60%;
      white-space: break-spaces;
    } 
  </style>
</head>

<body style='background: blanchedalmond'>
  <?php
  // if (!isset($_SESSION['logged_in'])) {
  //   header('location: ' . $prefix . '/home')
  ?> 
    <!-- <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
      <div>
        <form action="" method="post">
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="username = Vygantas">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="password = 999" required>
          </div>
          <button type="submit" class="btn btn-primary" name="login">Submit</button>
        </form>
      </div>
    </div> -->

    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="home">View the Page</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="?action=home ">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?action=logout">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">

      <?php

      print("<pre>This is your Admin section " . "<br>");
      $content = $entityManager->getRepository('Blog\Content')->findAll();
      print('<table class="table">');
      print("<tr>"
            . '<th>ID</th>'
            . '<th>Title</th>'
            . '<th class="content">Content</th>'
            . '<th>Action/Delete</th>'
            . '<th>Update</th>'
            . "</tr>");
            
      foreach ($content as $p) {
          print("<tr>"
            . "<td>" . $p->getId()  . "</td>"
            . "<td>" . $p->getTitle() . "</td>"
            . "<td class='content'>" . $p->getContent() . "</td>"
            . ($p->getId() === 1 ? "<td></td>" : "<td><a class='btn btn-sm btn-danger' href='?delete={$p->getId()}'>DELETE??????</a></td>")
            . "<td><a class='btn btn-sm btn-success' href='?update={$p->getId()}'>UPDATE??????</a></td>"
            . "</tr>");
      }

      print("</table>");
      print("</pre>");

      if (isset($_GET['update'])) {
        $content = $entityManager->find('Blog\Content', $_GET['update']);
        print("<pre>Update: </pre>");
        print("
            <form class='form-control' action='' method='POST'>
            <input type='hidden' name='id' value='{$content->getId()}'>
            <label for='name'>Title: </label><br>
            <input type='text' name='update' class='form-control' value='{$content->getTitle()}' " . ($content->getTitle() ==  "Home" ? "readonly" : "") . "><br>
            <label for='name'>Content: </label><br>
            <textarea type='text' name='content' class='big form-control' value='{$content->getContent()}'>" . $content->getContent() . "</textarea><br>
            <input type='submit' class='btn btn-primary' name='updatable' value='Submit'>
            </form>
            ");
      }

      print("<pre>Add new Article: " . "</pre>"); ?>
      <div>
        <?php if (isset($_SESSION['message'])) { ?>

          <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show mt-3" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?php unset($_SESSION['message']); ?>
          </div> <?php } ?>
      </div>
      <form class="form-control" action="" method="POST">
        
        <input class="form-control" type="text" name="headline" value="Article headline"><br>
        <textarea class="form-control" type="text" name="content" placeholder="Content text area" value=""></textarea><br>
        <input class="btn btn-primary" type="submit" value="Submit">
      </form>
    </div>
    <footer class="bg-light text-center text-lg-start mt-3">
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <p>?? 2022 Copyright:</p>
        <a class="text-dark" href="home">Main page</a>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>