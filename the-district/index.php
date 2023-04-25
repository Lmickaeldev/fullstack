<?php
use App\Autoloader;
use App\models\CategoriesModel;
use App\models\UtilisateurModel;

require_once"./Autoloader.php";
Autoloader::register();

// $model = new CategoriesModel;
// //afficher les categories active
// $categorie = $model->findBy(['active' => 1]);
// //afficher un seul id
// $categorie2 = $model->find(4);
// //nouvelle categorie
// $ncategorie = $model
//     ->setLibelle('new categorie')
//     ->setImage('newimage.jpeg')
//     ->setActive(1);

//$model->create($ncategorie);

// $donnees = [
//     'libelle'=>'libelle modifier',
//     'image'=>'image_modifier.png',
//     'active'=>1,
// ];
// $n1categorie =$model->hydrate($donnees);

// $model->delete(19);

// var_dump($n1categorie);

$model = new UtilisateurModel;

$user =$model
->setEmail("untest@gmail.fr")
->setNom_prenom("nom premon")
->setPass(password_hash('azerty', PASSWORD_ARGON2I));

$model->create($user)
// var_dump($model);die;
?>