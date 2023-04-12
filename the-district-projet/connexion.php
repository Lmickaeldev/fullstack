<?php
include_once"./controller/connexion_script.php";
include_once"./controller/head_script.php";
include_once"./controller/nav_script.php";
?>
<div class="container formulaire">
            <div id="search">  
                <div class="row">
        <div class="connect">
        <h1>connexion</h1>

        <form method="post">

        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">    
        </div>
        <div>
            <label for="pass">mots de passe</label>
            <input type="password" name="pass" id="pass">
        </div>
        <button type="submit">me connecter</button>

        <p>pas encore inscrit ? / <a href="inscription.php">inscription</a></p>
        <p>mots de passe perdu ? / <a href="inscription.php">ici</a></p>

        </form>
        </div>
    </div>
            </div>   
    
</div>
<?php
include_once"./controller/footer_script.php";
?>