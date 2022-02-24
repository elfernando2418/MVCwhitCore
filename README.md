MODULO ---> LOTE

o	CODIGO LOTE (STRING)
o	NUMERO LOTE (INT)
o	FECHA DE ELABORACION (DATE)
--------------------------------------
MODULO ---> MODULO DE PRODUCTO

o	CODIGO DE PRODUCTO  (STRING)
o	NOMBRE              (STRING)
o	CALIBRE             (INT)
o	GRADO BRIX          (INT)
o	PESO                (DOUBLE)
o	ID DE LOTE (se selecciona de la tabla de lote)
o	FECHA DE INGRESO    (DATE)
o	FECHA CADUCIDAD     (DATE) ---15 dias a partir de la fecha ingresada
-------------------------------------------
MODULO ---> MATERIA PRIMA

o	CODIGO MATEIRA PRIMA        (STRING)
o	ID NOMBRE TIPO MATERIA       (INT)                      
                    (Crear una tabla de opciones, pueden ser 2, hijuelos y abonos)
o	CANTIDAD                    (INT)

--------------------------------------------

MODULO ---> ENVIO DE PRODUCTO

o	CODIGO DE RUTA              (INT)
o	FECHA DE TRANSPORTE          (DATE)
o	EMPRESA DE TRANSPORTE       (STRING)
o	NOMBRE DEL CONDUCTOR        (STRING)
o	PLACA                       (STRING)
o	NUMERO DE ENVIO              (INT)
o	REMITENTE                    (STRING)
o	DESTINATARIO                ( STRING)
o   ID  PRODUCTO         (INT)  (esto es de la tabla producto)
o	PESO (peso del producto )       (NO SE COMO HACER ESTO PERO ALLI ESTA XD)
o	ESTADO (crear 1 tabla con estados PENDIENTE O ENVIADO) (PEOR ESTO)
-----------------------------------------------
MODULO ---> USUARIOS

o	TIPO DE USUARIO (puede ser empleado o administrador)    (INT  1 ADMIN 2 EMPLEADO)
o	NOMBRE                                                  ( STRING )
o	FECHA INGRESO                                           (FECHA INGRESO)
o	TELEFONO                                            (STRING)
o	EMAIL                                               (STRING)

------------------------------------------------------------

