<!DOCTYPE html>
<html lang="fr">
    <body>
    <!-- Navigation -->
      <!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="mt-5">
            <h1> </h1>
            <h2> Rejoins nous !!! </h2><br/>
 
            <form method="post" enctype='multipart/form-data'action="creation_utilisateur.php">
                <div class="form-group">
                    <label for="nom">Ton Nom</label>
                    <input type="text" class="form-control" required id="nom" aria-describedby="Nom" name="nom" placeholder="">
                </div>
                <div class="form-group">
                    <label for="prenom">Ton Prenom</label>
                    <textarea type="text" class="form-control" required id="prenom" name="prenom"rows="3" placeholder=""></textarea>
                </div>
                <div class="form-group">
                    <label for="prenom">Ton email</label>
                    <textarea type="email" class="form-control" required id="email" name="email"rows="3" placeholder=""></textarea>
                </div>
                <div class="form-group">
                    <label for="mdp">Le mot de passe</label>
                    <input type="password" class="form-control" required id="mdp" name="mdp"rows="3" placeholder="">
                </div>
                    <button type="submit" class="btn btn-primary"name="bouton">Rejoins !</button>
            </form>
        </div>
    </div>