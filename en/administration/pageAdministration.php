<!DOCTYPE html>
<html>
  <?php include '../WebApp/_Layout/_Header.php' ?>
  

<title>Accueil</title>
<link rel="stylesheet" href="../WebApp/_Layout/Accueil.css">
<body class="body">

  <?php
  include "../Donnee/JeuxDAO.php"; 

  if($_SESSION != null){
    if($_SESSION['admin'] == true){
      $jeux = JeuxDAO::listerJeux();
      $iteration = 0;
    
          foreach($jeux as $jeu)
          {
            if($iteration == 0){
              ?><div class="boxDeJeux"><?php
              $iteration = $iteration + 1;
            }
            if($iteration <= 3){
              ?>
              <div style="width: 100%;" class="testFlex">
                <div class="card border-warning mb-3" style="max-width: 20rem;">
                  <div class="card-header">Game #<?= $jeu->id ?></div>
                  <div class="card-body">
                    <h4 class="card-title"><?= $jeu->titre ?></h4>
                    <p class="card-text"><?= $jeu->courte_descritption ?></p>
                    <p class="card-text"><?= $jeu->description ?></p>
                    <form action="../PageListeDt.php" method="post">
                        <input type="hidden" name="id" id="id" value="<?= $jeu->id ?>"/>
                        <button type="submit" class="btn btn-secondary">More</button>
                    </form>
                    <div>
                        <br>
                        <form action="pageModifier.php" method="post">
                            <input type="hidden" name="id" id="id" value="<?= $jeu->id ?>"/>
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </form>
                        <br>
                        <form action="pageSupprimer.php" method="post">
                            <input type="hidden" name="id" id="id" value="<?= $jeu->id ?>"/>
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </div>                				
                  </div>
                </div>
              </div>
          <?php
          $iteration = $iteration + 1;
            } else {
                ?>
              </div>
              <div class="boxDeJeux">
              <div style="width: 100%;" class="testFlex">
                <div class="card border-warning mb-3" style="max-width: 20rem;">
                  <div class="card-header">Game #<?= $jeu->id ?></div>
                  <div class="card-body">
                    <h4 class="card-title"><?= $jeu->titre ?></h4>
                    <p class="card-text"><?= $jeu->courte_descritption ?></p>
                    <p class="card-text"><?= $jeu->description ?></p>
                    <form action="../PageListeDt.php" method="post">
                        <input type="hidden" name="id" id="id" value="<?= $jeu->id ?>"/>
                        <button type="submit" class="btn btn-secondary">More</button>
                    </form>
                    <div>
                        <br>
                        <form action="pageModifier.php" method="post">
                            <input type="hidden" name="id" id="id" value="<?= $jeu->id ?>"/>
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </form>
                        <br>
                        <form action="pageSupprimer.php" method="post">
                            <input type="hidden" name="id" id="id" value="<?= $jeu->id ?>"/>
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                    </div>                				
                  </div>
                </div>
              </div>
              <?php
              $iteration = 1;
            }
          }
          ?>
          </div>
        
          <form action="pageAjoute.php" >
            <div class="centrer">
                <button type="submit" class="btn btn-success">Add</button>
            </div>                    
          </form>

          <?php
    } else {
      ?>
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Attention !</strong> You're not log in as an administrator, you'll be redirected to the main page in 5 seconds.
      </div>

<?php
    header('Refresh: 5; URL=https://blog.theporfolio.com/en/');

    }
  } else {
    ?>
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Attention !</strong> You're not log in as an administrator, you'll be redirected to the main page in 5 seconds.
      </div>

<?php
    header('Refresh: 5; URL=https://blog.theporfolio.com/en');
  }
 ?>
   
</body>
<?php include '../WebApp/_Layout/_Footer.php'?>
</html>