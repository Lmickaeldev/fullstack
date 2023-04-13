1."Afficher la liste des commandes ( la liste doit faire apparaitre la date, les informations du client, le plat et le prix )"
SELECT date_commande, nom_client, telephone_client, adresse_client, plat.libelle, plat.prix FROM commande JOIN plat ON commande.id_plat = plat.id;

2."Afficher la liste des plats en spécifiant la catégorie"
SELECT plat.libelle AS nom_plat, categorie.libelle AS nom_categorie FROM plat JOIN categorie ON plat.id = categorie.id;

3."Afficher les catégories et le nombre de plats actifs dans chaque catégorie"
SELECT categorie.libelle, COUNT(plat.id) as nb_plats_actifs FROM categorie LEFT JOIN plat ON categorie.id = plat.id_categorie AND plat.active = "yes" GROUP BY categorie.id;

4."Liste des plats les plus vendus par ordre décroissant"
SELECT plat.libelle, COUNT(*) AS nombre_de_commandes FROM plat INNER JOIN commande ON plat.id = commande.id_plat GROUP BY plat.id, plat.libelle ORDER BY nombre_de_commandes DESC;


5."Le plat le plus rémunérateur"

--demander au formateur ce qui est entendu par plat remunerateur ,
-- si c'est la commande doit etre obligatoirement livré ?
-- si c'est le plat avec le prix le plus grand ? 

-- if condition n'est pas nessecaire je formulerais ma requete
SELECT plat.libelle, SUM(commande.quantite * plat.prix) AS chiffre_affaires FROM plat INNER JOIN commande ON plat.id = commande.id_plat GROUP BY plat.id ORDER BY chiffre_affaires DESC LIMIT 1;

6."Liste des clients et le chiffre d'affaire généré par client (par ordre décroissant)"
SELECT commande.nom_client, SUM(commande.quantite * plat.prix) AS chiffre_affaires FROM plat INNER JOIN commande ON plat.id = commande.id_plat GROUP BY plat.id ORDER BY chiffre_affaires DESC;

--affichage de 6 client alors que je suis cencé en avoir 8,


--Ecrire des requêtes de modification de la base de données

1. "Ecrivez une requête permettant de supprimer les plats non actif de la base de données"
DELETE FROM plat WHERE active = 'No';

2. "Ecrivez une requête permettant de supprimer les commandes avec le statut livré"
DELETE FROM commande WHERE etat = 'livrée';

3. "Ecrivez un script sql permettant d'ajouter une nouvelle catégorie et un plat dans cette nouvelle catégorie."
--pour cette requette j'ai trouver une possibilité cependant je n'est pas reussi a faire q'une seul requette pour les 2 insert 
INSERT INTO categorie (libelle,image,active) VALUES ('Nouvelle catégorie','nouvelle_images.jpeg','yes');
INSERT INTO plat (libelle, description, prix,image, id_categorie, active) 
VALUES ('Nouveau plat', 'ceci est une description pour un nouveaux plat', 10.50,'image_plat.jpeg', LAST_INSERT_ID(), 'yes');

4."Ecrivez une requête permettant d'augmenter de 10% le prix des plats de la catégorie 'Pizza'"
UPDATE plat SET prix = prix * 1.1 WHERE id_categorie = (SELECT id FROM categorie WHERE libelle = 'Pizza');
