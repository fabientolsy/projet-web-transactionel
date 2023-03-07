<!DOCTYPE html>
<html>
<?php include 'WebApp/_Layout/_Header.php' ?>

  <title>Accueil</title>
  <link rel="stylesheet" href="WebApp/_Layout/membre.css">
  <!-- CSS only -->
  <link rel="stylesheet" href="_Layout/bootstrap.min.css">

<body>

<?php
  require('Donnee/UtilisateurDAO.php');

  if($_SESSION != null) {
    $reception = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);
    //print_r($reception);
    $user = UtilisateurDAO::detaillerUtilisateur($reception);
    ?>


    <form action="administration/traitementUtilisateur.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?=$user->id?>"/>
      <input type="hidden" name="mdp" value="<?=$user->mdp?>"/>
        <div class="infos">
          <div class="infoPerso">
            <div class="form-group has-success">
              <label class="form-label mt-4" for="inputValid">Username</label>
              <textarea class="form-control" rows="2" id="nom" name="nom" placeholder="Nom"><?= $user->nom ?></textarea>
            </div>
            <div class="form-group has-success">
              <label class="form-label mt-4" for="inputValid">Email</label>
              <textarea class="form-control" rows="2" id="email" name="email" placeholder="Email"><?= $user->email ?></textarea>
            </div>
            <div class="form-group">
                <label for="formFile" class="form-label mt-4">Change prfile image</label>
                <input class="form-control" type="file" id="photo" name="photo" placeholder="Photo">
            </div>
            <div class="form-group has-success">
                <label class="form-label mt-4" for="inputValid">Description</label>
                <textarea class="form-control" rows="2" id="description" name="description" placeholder="Description"><?= $user->description ?></textarea>
            </div>
              <div class="form-group has-success">
                <label class="form-label mt-4" for="inputValid">Companie</label>
                <textarea class="form-control" rows="2" id="entreprise" name="entreprise" placeholder="Entreprise"><?= $user->entreprise ?></textarea>
          </div>
    
          <button type="submit" class="btn btn-warning btnModifier">Edit</button>
          </div>
        </div>
    </form>

       

       
        <?php

  } else {
    ?>
    <div class="alert alert-dismissible alert-info">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Attention !</strong>  Please log in to access to your member space !
    </div>

    <?php
  }
 
    ?>
    
</body>

<?php include 'WebApp/_Layout/_Footer.php'?>
</html>