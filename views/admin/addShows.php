<?php
require '../../controllers/admin/addShowsController.php';
var_dump($_POST);
var_dump($errorsMessageShows);
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Ajouter un spectacle</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-row">
                                <!-- <div class="form-group col-8">
                                    <label for="imgShow">Affiche du spectacle</label>
                                    <input type="file" class="form-control" name="imgShow" id="imgShow" />
                                </div> -->
                                <div class="form-group col-4">
                                    <label for="durationShow">Durée</label>
                                    <input type="time" class="form-control" name="durationShow" id="durationShow" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="titleShow">Titre</label>
                                    <input type="text" class="form-control" name="titleShow" id="titleShow" />
                                </div>
                                <div class="form-group col-6">
                                    <label for="performerShow">Artiste</label>
                                    <input type="text" class="form-control" name="performerShow" id="performerShow" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="dateShow">Date</label>
                                    <input type="date" class="form-control" name="dateShow" id="dateShow" />
                                </div>
                                <div class="form-group col-6">
                                    <label for="hourShow">Heure</label>
                                    <input type="time" class="form-control" name="hourShow" id="hourShow" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="showTypes">Type de spectacle</label>
                                    <select class="custom-select" name="showTypes" id="showTypes">
                                        <option value="1">Choisissez un type</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="genreShow">Genre</label>
                                    <select class="custom-select" name="genreShow" id="genreShow">
                                        <option value="1">Choisissez un genre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 text-center">
                                    <button type="submit" class="btn btn-sm btn-success" name="confirmAddShow">Ajouter le spectacle</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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