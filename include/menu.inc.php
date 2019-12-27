
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Ragnar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Menu
              <span class="sr-only">(current)</span>
            </a>
          </li>
            <?php if($connecte == TRUE){
              ?>
          
          <li class="nav-item">
            <a class="nav-link" href="article.php">Creer un article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deconnexion.php">Se deconnecter</a>
          </li>
           <?php }else{?>
          <li class="nav-item">
            <a class="nav-link" href="creation_utilisateur.php">Rejoins-nous!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Me connecter</a>
          </li>
          
          <?php }?>
        </ul>
      </div>
    </div>
  </nav>

       