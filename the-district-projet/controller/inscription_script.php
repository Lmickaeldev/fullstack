<?php
//ont verifie si le formulaire a été envoyer 
if (!empty($_POST)) {
    //le formulaire a été envoyé
    //on verifie que all champs ont bien été remplis,
    if (isset($_POST["nickname"],$_POST["email"],$_POST["pass"])
    && !empty($_POST['nickname'])
    && !empty($_POST['email'])
    && !empty($_POST['pass'])
    ) {
        //le formulaire est complet
        //on protege les données
        //on recuipere les données en les protegeant(xss)
        //striptags enleve toute les balise html
        $pseudo = strip_tags($_POST["nickname"]);

        //ont verfie que l'adresse est bien une adresse eamil 
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            die("l'email est incorrecte");
        }
        //on va hasher le mots de passe
        //password_argon2id permets un criptage aleatoire
        $pass = password_hash($_POST["pass"], PASSWORD_ARGON2ID);
        
        //ont enregistre en bdd
        require"includes/connect.php";

        $sql= "INSERT INTO `user`(`username`,`email`,`pass`,`role`) VALUES(:pseudo,:email,'$pass','[\"ROLE_USER\"]')";
        //preparation de la requete
        $query = $db-> prepare($sql);

        $query->bindValue(":pseudo", $pseudo, PDO::PARAM_STR);
        $query->bindValue(":email",$_POST["email"],PDO::PARAM_STR);
        $query->execute();

        //on connect l'utilisateur
    }else {
        die("le formualaire n'est pas complet");
    }
}
?>