<h1>login</h1>
<?php
    if (isset($_POST['frmlogin'])) {
        $message = "Je viens du formulaire";
        
        $username= htmlentities(trim($_POST['username']));
        

        $erreurs = array();

        if (mb_strlen($username) === 0)
            array_push($erreurs, "Il manque votre username");

        if (mb_strlen($password) === 0)
            array_push($password, "Il manque votre password");

        

        if (count($erreurs)) {
            $messageErreur = "<ul>";

            for($i = 0 ; $i < count($erreurs) ; $i++) {
                $messageErreur .= "<li>";
                $messageErreur .= $erreurs[$i];
                $messageErreur .= "</li>";
            }
    
            $messageErreur .= "</ul>";
    
            echo $messageErreur;

            include './includes/frmlogin.php';
        }

        else {
            displayMessage("Pas d'erreurs");
        }
    }
    
    else {
        $username="";
        include './includes/frmlogin.php';
    }