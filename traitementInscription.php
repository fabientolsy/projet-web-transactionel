<?php 
    print_r($_POST);

    include_once("Donnee/UtilisateurDAO.php");
    include_once("modele/Utilisateur.php");
	
    $utilisateur = new Utilisateur($_POST);

    UtilisateurDAO::ajouterUtilisateur($utilisateur);

    $to      = $_POST['email'];
    $subject = 'Inscription';
    $message = 'Bienvenue ches nous ! On espere de tout coeur que vous allez prendre du plaisir sur le site!';
    $headers = 'From: 2031900@cgmatane.qc.ca' . "\r\n" .
        'Reply-To: 2031900@cgmatane.qc.ca' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers);

    header('Location: https://blog.theporfolio.com/');
    exit;
    
?>