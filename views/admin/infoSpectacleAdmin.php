<?php
require '../../controllers/admin/infoSpectacleAdminController.php';
?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>LHP3 Arena</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
    <?php require '../../views/header.php'?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Informations du spectacle</h1>
            </div>
        </div>
        <div class="row justify-content-start text-center mt-4 ml-4">
            <div class="col-2 border border-dark">
                <img src="<?=$ShowManager->getImg_Shows()?>" alt="Affiche du spectacle" class="img-fluid" />
            </div>
            <div class="col-4 text-left">
                <h2 class="font-weight-bold"><?=$ShowManager->getTitle_Shows()?></h2>
                <h3><?=$ShowManager->getPerformer_Shows()?></h3>
                <p class="m-0">Le <?=date('d/m/Y', strtotime($ShowManager->getDateHour_Shows()))?> à
                    <?=date('H:i', strtotime($ShowManager->getDateHour_Shows()))?> <span>(Durée :
                        <?=date('h:i', strtotime($ShowManager->getDuration_Shows()))?>)</span></p>
                <p><?=$ShowManager->getId_ShowTypes()?>/<?=$ShowManager->getId_Genres()?></p>
                <p>Prix des billets :</p>
                <form method="POST" action="">
                    <div class="form-row">
                        <?php if (isset($_POST['addTickets'])):?>
                            <div class="form-group col-4">
                                <input type="text" class="form-control form-control-sm" name="priceTickets" />
                            </div>
                            <div class="form-group col-6">
                            <a type="button" href="?id=<?=$ShowManager->getId_Shows()?>" class="btn btn-sm btn-secondary">Modifier</a>
                                <a type="button" href="?id=<?=$ShowManager->getId_Shows()?>" class="btn btn-sm btn-danger">Retour</a>
                            </div>
                        <?php else:?>
                        <button type="submit" class="btn btn-sm btn-secondary" name="addTickets">Modifier prix des
                            tickets</button>
                        <?php endif;?>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>