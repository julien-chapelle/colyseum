<?php require '../controllers/programmationController.php';?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/programmation.css">

  <title>Fnac</title>
</head>

<body>
  <?php require "header.php"?>


  <div class="container">
      <h1>Liste des spectacles</h1>
      <form class="form-inline my-2 my-lg-0" action="" method="POST">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
      <?php if(isset($_POST["search"])): ?>
        <?php foreach($resultSearch as $search):?>

        <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="<?= $search['img_Shows']; ?>" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text"><small class="text-muted"><?= $search['types_ShowTypes']; ?></small></p>
              <h5 class="card-title"><?= $search['title_Shows']; ?></h5>
              <p class="card-text"><?= utf8_encode(strftime('%d %B %Y', strtotime($search['dateHour_Shows']))); ?>(<?= strftime('%HH%M', strtotime($search['duration_Shows'])); ?>)</p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
        <?php endif; ?>
      <hr>
      <?php foreach($months as $month):?>
      <p><?=strftime('%B', strtotime($month["month"]))?></p>
      <?php foreach($shows as $content):?>
      <?php if(strftime('%B', strtotime($month["month"])) == strftime('%B', strtotime($content['dateHour_Shows']))):?>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="<?= $content['img_Shows']; ?>" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text"><small class="text-muted"><?= $content['types_ShowTypes']; ?></small></p>
              <h5 class="card-title"><?= $content['title_Shows']; ?></h5>
              <p class="card-text"><?= utf8_encode(strftime('%d %B %Y', strtotime($content['dateHour_Shows']))); ?>(<?= strftime('%HH%M', strtotime($content['duration_Shows'])); ?>)</p>
            </div>
          </div>
        </div>
      </div>

      <?php endif; ?>
      <?php endforeach; ?>
      <?php endforeach; ?>
  </div>


  <?php require "footer.php"?>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>