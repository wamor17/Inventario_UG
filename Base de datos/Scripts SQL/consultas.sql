select * from empleado;

SELECT o.id_objeto, o.no_inventario as No_Inventario, o.no_serie as No_Serie, c.nombre as Categoria, sc.nombre as Subcategoria, 
sd.nombre as Especificación, o.marca as Marca, o.modelo as Modelo, CONCAT(e.nombre,' ',e.ape_paterno,' ',e.ape_materno) as Responsable    
FROM objeto o 
INNER JOIN categoria c         
ON o.id_categoria=c.id_categoria
INNER JOIN sub_categoria sc         
ON o.id_subcategoria=sc.id_subcategoria
INNER JOIN sub_division sd         
ON o.id_subdivision=sd.id_subdivision
INNER JOIN empleado e        
ON o.id_empleado=e.id_empleado
order by o.id_objeto; 