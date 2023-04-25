<?php

use App\Autoloader;

require_once"./Classes/Autoloader.php";
Autoloader::register();

























//on modifie le titre
$title="accueil";
//on inclut le head
include_once"./controller/head_script.php";
//connexion a la base de données 
require_once "./controller/connect.php";
?>
    <div class="container-fluid">
        <?php
        //on inclut la nav
        include_once"./controller/nav_script.php";
        ?>
        <div class="row">
            <div id="search">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="je cherche..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">rechercher</button>
                </form>
            </div>
        </div>
        <div class="container Categories">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="img-thumbnail">
                        <img src="/assets/images/category/pasta_cat.jpg" class="img-fluid" alt="...">
                        <div class="caption">
                            <h4>Pattes</h4>
                            <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span>
                                Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="img-thumbnail">
                        <img src="/assets/images/category/burger_cat.jpg" class="img-fluid" alt="...">
                        <div class="caption">
                            <h4>Burgers</h4>
                            <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span>
                                Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="img-thumbnail">
                        <img src="/assets/images/category/asian_cat.jpg" class="img-fluid" alt="...">
                        <div class="caption">
                            <h4> asiatique</h4>
                            <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span>
                                Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="img-thumbnail">
                        <img src="/assets/images/category/pizza_cat.jpg" class="img-fluid" alt="...">
                        <div class="caption">
                            <h4>Pizza</h4>
                            <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span>
                                Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="img-thumbnail">
                        <img src="/assets/images/category/salade_cat.jpg" class="img-fluid" alt="...">
                        <div class="caption">
                            <h4>Salade</h4>
                            <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span>
                                Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="img-thumbnail">
                        <img src="/assets/images/category/veggie_cat.jpg" class="img-fluid" alt="...">
                        <div class="caption">
                            <h4>veggie</h4>
                            <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span>
                                Consulter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container selection">
            <h1>nos meilleurs demandes</h1>
            <div class="divider"><hr></div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="img-thumbnail">
                        <img src="/assets/images/category/pasta_cat.jpg" class="img-fluid" alt="...">
                        <div class="caption">
                            <h4>Pattes</h4>
                            <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span>
                                Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="img-thumbnail">
                        <img src="/assets/images/category/pasta_cat.jpg" class="img-fluid" alt="...">
                        <div class="caption">
                            <h4>Pattes</h4>
                            <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span>
                                Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="img-thumbnail">
                        <img src="/assets/images/category/pasta_cat.jpg" class="img-fluid" alt="...">
                        <div class="caption">
                            <h4>Pattes</h4>
                            <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span>
                                Consulter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
//on inclut le footer
include_once"./controller/footer_script.php";
?>