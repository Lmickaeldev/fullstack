<?php

use App\Autoloader;
use App\Models\CategoriesModel;
use App\Models\PlatsModel;

//require_once"./DB/Db.php";


require_once"./Autoloader.php";
Autoloader::register();

$categoriemodel = new CategoriesModel();

$categorie = $categoriemodel->findall();

var_dump($categorie);

$platmodel = new PlatsModel();

$plat = $platmodel->findby(['']);

var_dump($plat);
// print_r($plat);
?>