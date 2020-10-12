USE inventarioUG;

SELECT *FROM sub_categoria;
SELECT categoria.nombre AS categoria_nombre, sub_categoria.nombre AS subcategoria_nombre, sub_division.nombre AS subdivision_nombre,
	   empleado.nombre AS nombre_empleado, empleado.ape_paterno AS empleado_apaterno, empleado.ape_materno AS empleado_amaterno,
	   objeto.no_inventario, objeto.no_activofijo, objeto.no_serie, objeto.marca, objeto.modelo,
       objeto.descripcion, objeto.precio, objeto.fecha_compra, objeto.foto, objeto.observaciones
FROM ((((objeto
INNER JOIN categoria ON categoria.id_categoria = objeto.id_categoria)
INNER JOIN sub_categoria ON sub_categoria.id_subcategoria = objeto.id_subcategoria)
INNER JOIN sub_division ON sub_division.id_subdivision = objeto.id_subdivision)
INNER JOIN empleado ON empleado.id_empleado = objeto.id_empleado)
WHERE objeto.id_empleado = 1;

SELECT *FROM sub_division;
SELECT *FROM sub_categoria;
SELECT *FROM categoria;
SELECT *FROM objeto;
DESCRIBE objeto;

SELECT * FROM objeto 
INTO OUTFILE
        '/var/lib/mysql-files/objeto.csv'
        FIELDS TERMINATED BY ','
        OPTIONALLY ENCLOSED BY '\"'
        LINES TERMINATED BY '\n';

SHOW VARIABLES LIKE "secure_file_priv";

