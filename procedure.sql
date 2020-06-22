

CALL ajoutFournisseur('Dupont', 'FR', '120 rue général leclerc', '80000','Dupont','0666987425','hfdgjjg@ghtr.com')


--Exercice 1 : création d'une procédure stockée sans paramètre



DELIMITER |

CREATE PROCEDURE Lst_fournis()
BEGIN
    SELECT DISTINCT numfou FROM entcom
END |

DELIMITER ;

--Exercice 2 : création d'une procédure stockée avec un paramètre en entrée
DELIMITER |

CREATE PROCEDURE Lst_Commandes()
BEGIN
    SELECT* FROM entcom
    WHERE obscom= "commande urgente";
END |

DELIMITER ;


--Exercice 3 : création d'une procédure stockée avec plusieurs paramètres
DELIMITER $$

DROP PROCEDURE IF EXISTS CA_Fournisseur $$

CREATE PROCEDURE CA_Fournisseur(
                    IN p_numfou VARCHAR(10), 
                    IN p_datcom DATE 
                    )  

BEGIN

   
   DECLARE p_existe varchar(50); 

   SET p_existe = (SELECT numfou FROM fournis WHERE numfou = p_numfou);

   IF ISNULL(p_existe) 
   THEN
       SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Le numéro du fournisseur n\'est pas valide';
   ELSE
    SELECT qtecde*priuni as "CA" 
    FROM ligcom
    INNER JOIN entcom 
    ON ligcom.numcom=entcom.numcom
    WHERE numfou= p_numfou
   END IF;

END $$

DELIMITER ;