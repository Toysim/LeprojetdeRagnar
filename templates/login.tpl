<!DOCTYPE html>
<body>
<html lang="fr">
    
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="mt-5">
                <h1> </h1>
                <h2> Odin veille sur toi, connecte toi </h2><br/>
 
                <form method="post" enctype='multipart/form-data'action="login.php">
                    <div class="form-group">
                        <label for="email">Ton Nom</label>
                        <input type="email" class="form-control" required id="email" aria-describedby="email" name="email" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="mdp">Le mot de passe</label>
                        <input type="password" class="form-control" required id="mdp" name="mdp"rows="3" placeholder="">
                    </div>
                        <button type="submit" class="btn btn-primary"name="bouton">Rejoins !</button>
                </form>
            </div>
        </div>