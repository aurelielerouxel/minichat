<?php 
    try {
        $db = new PDO('mysql:host=localhost;dbname=minichat', 'Rakhlur', 'lol');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    // condition & récupérer les données utilisateur du form & les afficher
    if(!empty ($_POST) AND isset($_POST["send_message"])) {
        // var_dump($_POST);
        $query = $db->prepare(
            "INSERT INTO user(user_pseudo, user_message)
            VALUES(:user_pseudo, :user_message)"
        );
        // Par convention on reprend les mêmes noms que les colonnes SQL
        $result = $query->execute([
            "user_pseudo" => $_POST["user_pseudo"],
            "user_message" => $_POST["user_message"]
        ]);
        }
    // Lancer une requête SQL que l'on stock dans une variable
    $table_minichat = $db->query("SELECT * FROM user ORDER BY id DESC");

    // On extrait les données (tableau multidimentionnel) que l'on stock dans une variable (tableau associatif) - (PDO :: la classe)
    $users = $table_minichat->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($users);
?>