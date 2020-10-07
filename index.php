<?php 
    $site_title = "Minichat";
    include "template/header.php";
    include "template/nav.php";
    require "template/minichat_post.php";
?>

<!-- minichat_post -->

<main class="container">
    
    <form action="" method="post">
        <div class="row m-5">
            <div class="col-md-6 mt-3">
                <input class="form-control form-control-lg" type="text" name="user_pseudo" placeholder="pseudo">
            </div>
            <div class="input-group mt-3 col-md-6">
                <textarea class="form-control" name="user_message" aria-label="With textarea" placeholder="message"></textarea>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="send_message">Envoyer</button>
            </div>
        </div>
    </form>

    <?php
        foreach ($users as $key => $users) {
            // echo "<p>" . var_dump($users) . "</p>";
            echo "<div class='row'>" . "<div class='alert alert-danger col-md-1 role='alert'>" . htmlspecialchars($users["user_pseudo"]) . "</div>" . "<div class='alert alert-primary col-md-11' role='alert'>" . htmlspecialchars($users["user_message"]) . "</div>" . "</div>";
        }
    ?>
</main>

<?php 
    include "template/footer.php"
?>