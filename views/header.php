<nav class="navbar navbar-expand-lg navbar-white bg-white sticky-top">
  <a class="navbar-brand" href="../index.php">
    <img src="../assets/img/logoLhp3Arena.png" alt="logo Lhp3 Arena" class="lhp3Logo" title="Retour accueil" />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link text-dark" href="../index.php">Accueil</a>
      <a class="nav-item nav-link text-dark" href="../views/programmation.php">Programmation</a>
      <a class="nav-item nav-link text-dark" href="../views/billeterie.php">Billetterie</a>
      <a class="nav-item nav-link text-dark" href="../views/compte.php">Mon compte</a>
      <form method="POST" action="http://colyseumv2/views/result.php?page=1" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-1" type="search" placeholder="Recherche" aria-label="Search" name="searchTitle">
        <button class="btn btn-outline-warning my-1 px-2" name="searchSubmit" type="submit" title="Recherche"><i class="fas fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>