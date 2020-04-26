<?php


public function connexion($pseudo, $password)
        {
        $bdd = $this->bdd;
            if(!empty($username) && !empty($password)) {
     
                // on recupère le password de la table qui correspond au login du visiteur
                $query = "SELECT * FROM `admin` WHERE username= : Sanou";
                $req = $bdd->prepare($query);
                $req->execute(array(':Sanou'=>$username));
        
                
                while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
                    if ($row['password'] != $_POST['password']) {
                        echo 'Mauvais login / password. Merci de recommencer';
                    } else {
                        session_start();
     
                        header('Location: index.php?action=auteur');
                    }
                }
            }
        
        ?>