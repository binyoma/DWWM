--Exercice 1 : base hotel

--1)Afficher la liste des hôtels avec leur station. 

CREATE VIEW v_hotel_station
AS
SELECT hot_nom as "hôtel",
sta_nom as "Station" FROM hotel
INNER JOIN station 
on hotel.hot_sta_id = station.sta_id

--2) Afficher la liste des chambres et leur hôtel

CREATE VIEW v_chambre_Hotel
AS
SELECT cha_numero as  "Chambre",
hot_nom as "Hôtel" FROM chambre
INNER JOIN hotel
on chambre.cha_hot_id = hotel.hot_id

--3 Afficher la liste des réservations avec le nom des clients

CREATE VIEW v_reservations_clients
AS
SELECT res_date as  "Date de reservation",
res_date_debut as  "Date de début",
res_date_fin as  "Date de fin",
CONCAT(cli_nom," ", cli_prenom) as "Client" FROM reservation
INNER JOIN client
on reservation.res_cli_id = client.cli_id

--4 Afficher la liste des chambres avec le nom de l'hôtel et le nom de la station

CREATE VIEW v_chambre_hotel_station
AS
SELECT cha_numero as  "Chambre",
hot_nom as "Hôtel" ,
sta_nom as "Station"
FROM chambre 
INNER JOIN hotel 
ON chambre.cha_hot_id = hotel.hot_id
INNER JOIN station 
on hotel.hot_sta_id = station.sta_id

--5 Afficher les réservations avec le nom du client et le nom de l'hôtel

CREATE VIEW v_reservations_clients_hotel
AS
SELECT res_date as  "Date de reservation",
res_date_debut as  "Date de début",
res_date_fin as  "Date de fin",
CONCAT(cli_nom," ", cli_prenom) as "Client",
hot_nom as "Hôtel"
FROM reservation
INNER JOIN client
on reservation.res_cli_id = client.cli_id
INNER JOIN chambre
ON reservation.res_cha_id = chambre.cha_hot_id
INNER JOIN hotel
ON chambre.cha_hot_id = hotel.hot_id 




--Exercice 2 : base papyrus

/*v_GlobalCde correspondant à la requête : A partir de la table Ligcom, afficher par code produit,
 la somme des quantités commandées et le prix total correspondant :
  on nommera la colonne correspondant à la somme des quantités commandées, QteTot et le prix total, PrixTot. */

CREATE VIEW v_GlobalCde
AS 
SELECT codart,
qtecde as "QteTot",
priuni*qtecde as "PrixToT"
FROM ligcom
GROUP BY codart 

/*v_VentesI100 correspondant à la requête : Afficher les ventes dont le code produit est le I100 
(affichage de toutes les colonnes de la table Vente). */


CREATE VIEW v_VentesI100
AS 
SELECT *
FROM vente
WHERE codart ="I100"

/*A partir de la vue précédente, créez v_VentesI100Grobrigan 
remontant toutes les ventes concernant le produit I100 et le fournisseur 00120. */

CREATE VIEW v_VentesI100Grobrigan
AS 
SELECT *
FROM v_VentesI100
WHERE numfou="120"