--1
CREATE TRIGGER `maj_total` 
AFTER INSERT ON `lignedecommande`
 FOR EACH ROW 
 BEGIN DECLARE id_c INT; 
 DECLARE tot DOUBLE;
  SET id_c = NEW.id_commande;
   SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); 
   UPDATE commande SET total=tot WHERE id=id_c; END


--2
CREATE TRIGGER `modif_total` 
AFTER UPDATE ON `lignedecommande`
 FOR EACH ROW 
 BEGIN DECLARE id_c INT; 
 DECLARE tot DOUBLE;
  SET id_c = OLD.id_commande;
   SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); 
   UPDATE commande SET total=tot WHERE id=id_c; END

CREATE TRIGGER `suppr_total` 
AFTER DELETE ON `lignedecommande`
 FOR EACH ROW 
 BEGIN DECLARE id_c INT; 
 DECLARE tot DOUBLE;
  SET id_c = OLD.id_commande;
   SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); 
   UPDATE commande SET total=tot WHERE id=id_c; END


   UPDATE lignedecommande
   SET quantite=0
   WHERE id_commande=2 AND id_produit=3

   --3
CREATE TRIGGER `maj_total` 
AFTER INSERT ON `lignedecommande`
 FOR EACH ROW 
 BEGIN DECLARE id_c INT; 
 DECLARE tot DOUBLE;
  SET id_c = NEW.id_commande;
   SET tot = (SELECT sum(prix*quantite -remise*prix*quantite) FROM lignedecommande WHERE id_commande=id_c); 
   UPDATE commande SET total=tot WHERE id=id_c; END



CREATE TRIGGER `modif_total` 
AFTER UPDATE ON `lignedecommande`
 FOR EACH ROW 
 BEGIN DECLARE id_c INT; 
 DECLARE tot DOUBLE;
  SET id_c = OLD.id_commande;
   SET tot = (SELECT sum(prix*quantite -remise*prix*quantite) FROM lignedecommande WHERE id_commande=id_c); 
   UPDATE commande SET total=tot WHERE id=id_c; END

CREATE TRIGGER `suppr_total` 
AFTER DELETE ON `lignedecommande`
 FOR EACH ROW 
 BEGIN DECLARE id_c INT; 
 DECLARE tot DOUBLE;
  SET id_c = OLD.id_commande;
   SET tot = (SELECT sum(prix*quantite -remise*prix*quantite) FROM lignedecommande WHERE id_commande=id_c); 
   UPDATE commande SET total=tot WHERE id=id_c; END


--gescom
CREATE TABLE commander_articles(
    codart INT,
    qte INT,
    dte TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

CREATE TRIGGER `after_produit_update` 
AFTER UPDATE ON `products` 
FOR EACH ROW BEGIN 
DECLARE id INT;
DECLARE Diff INT; 
SET id=OLD.pro_id; 
IF NEW.pro_stock >5 THEN 
SET Diff=(NEW.pro_stock-5 );
ELSE 
SET Diff=( 5-NEW.pro_stock) ;
END IF;
IF (NEW.pro_stock < 5) 
THEN
   IF (id IN (SELECT codart FROM commander_articles )) 
   THEN
      UPDATE commander_articles
      SET qte= Diff, dte= CURRENT_TIMESTAMP
      WHERE codart=id;
   ELSE
      INSERT INTO `commander_articles`(`codart`,`qte`) VALUES (id,Diff); 
   END IF; 
END IF;
END

 --1er cas
 UPDATE products
 SET pro_stock =6 WHERE pro_id =8;