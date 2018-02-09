<?php

        $bdd = new PDO($_SESSION['host'], $_SESSION['ndcSQL'], $_SESSION['mdpSQL']);



        $form = '
        <form method="post" action ="#">
            Titre : <input type="text" name="titre"> <br>
            Realisateur : <input type="text" name="realisateur"> <br>
            Acteurs : <input type="text" name="acteurs"> <br>
            Producteur : <input type="text" name="producteur"> <br>
            Synopsis : <input type="text" name="synopsis"> <br>
            <input type="submit" id="submit" value="Envoyer">
        </form>
        ';

        $messageSuccess = '
        <h2> Felicitation </h2>
        ';


        if(!testExist('titre')) {
            if (test5char($_POST)) {
                $req = $bdd->prepare('INSERT INTO movies(titre, realisateur, acteurs, producteur, synopsis) VALUES(:titre, :realisateur, :acteurs, :producteur, :synopsis)');
                $req->execute(array(
                    'titre' => $_POST['titre'],
                    'realisateur' => $_POST['realisateur'],
                    'acteurs' => $_POST['acteurs'],
                    'producteur' => $_POST['producteur'],
                    'synopsis' => $_POST['synopsis']
                ));

                echo $messageSuccess;
            }
        } else {
            echo $form;
        }





        // FONCTION TEST
    function testExist($var) {
        if(isset($_POST[$var])) {
            $bdd = new PDO($_SESSION['host'], $_SESSION['ndcSQL'], $_SESSION['mdpSQL']);
            $data = $bdd->query('SELECT * FROM movies WHERE titre ="'. $movie[$var] .'"');
            return $data;
        }
        return true;
    }

    function test5char($post = []) {
        foreach($post as $info) {
            if(strlen($info) < 4) return false;
            return true;
        }
    }


