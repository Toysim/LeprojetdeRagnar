 <!DOCTYPE html>
<html lang="fr">
    <body>
    <!-- Navigation -->

<!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="mt-5">
                    <h2> Ajoute un article </h2><br/>

                    <form method="post" enctype='multipart/form-data'action="article.php">
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" class="form-control" required id="titre" aria-describedby="Titre" name="titre" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="texte">Texte</label>
                            <textarea type="text" class="form-control" required id="texte" name="text"rows="3" placeholder="Texte"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="fichier">Ficher</label>
                            <input type="file" class="form-control" required id="img" name="img">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" required id="publie"name="publie">
                            <label class="form-check-label" for="publie">Publié ?</label>
                        </div>
                        <button type="submit" class="btn btn-primary"name="bouton">Envoyer</button>
                    </form>
                </div>
            </div>
            </body>

    </html>