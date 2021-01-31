/*08-07-2019*/

//trigger que actualiza el stock de la tabla articulo al realizar una compra
DELIMITER //
CREATE TRIGGER tr_updStockIngreso AFTER INSERT ON detalle_ingreso
 FOR EACH ROW BEGIN
 UPDATE articulo SET stock = stock + NEW.cantidad 
 WHERE articulo.idarticulo = NEW.idarticulo;
END
//
DELIMITER ;


//trigger  que actualiza el stock la tabla articulo al realizar una venta
DELIMITER //
CREATE TRIGGER tr_updStockVenta AFTER  INSERT ON detalle_venta
 FOR EACH ROW BEGIN
 UPDATE articulo SET stock = stock - NEW.cantidad
 WHERE articulo.idarticulo = NEW.idarticulo;
END
//
DELIMITER ;