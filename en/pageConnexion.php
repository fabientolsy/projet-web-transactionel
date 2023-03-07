<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'WebApp/_Layout/_Header.php' ?>
    
    <title>Log in</title>
  
    <link rel="stylesheet" href="WebApp/_Layout/connexion.css">
    
</head>
<body class="body">
    <form action="https://blog.theporfolio.com/en/" class="bs-component" id="form" method="post">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nom d'utilisateur" name="nom" id="nom">
            <label for="floatingInput">Username</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingInput2" placeholder="Password" name="password" id="password">
            <label for="floatingInput2">Password</label>
        </div>

        <div id="boutons">
            <button class="source-button btn btn-primary btn-xs" type="submit" tabindex="0" id="connexion" pb-role="submit">Log in</button>
            <button class="source-button btn btn-primary btn-xs" type="submit" tabindex="0">Cancel</button>
        </div>

    </form>
</body>

<?php include 'WebApp/_Layout/_Footer.php'?>

</html>