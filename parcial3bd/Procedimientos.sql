DELIMITER @@
CREATE PROCEDURE parcial3db.procedimiento1
()
BEGIN
SELECT idpunto,latitud,longitud FROM punto WHERE IB>0 and PSa >0 and PSe >0 and Pa >0;
END @@ 
DELIMITER ;