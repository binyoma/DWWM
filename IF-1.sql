IF (NEW.pro_stock > 5)
THEN 
	IF (id IN (SELECT codart FROM commander_article))
    THEN 
		UPDATE ...	       	     
	ELSE
       INSERT INTO
END IF;
END



