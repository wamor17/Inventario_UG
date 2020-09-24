close all, clear all, clc

% Datos resguardo
% FileInfo = fopen('Datos_resguardo_GHG.csv', 'r');
FileInfo = fopen('sub_division.csv', 'r');

line = fgetl(FileInfo);
line = fgetl(FileInfo);
Sections = strsplit(line, ',');
line = fgetl(FileInfo);

WriteFile = fopen('Insert_subdivision.sql', 'w');
Query = 'USE inventarioUG;';

fprintf(WriteFile, '%s\n\n', Query);
    
i = 1;
for k = 1:224
    line = fgetl(FileInfo);
    Sections = string( strsplit(line, ',') );
    
    % Insert into table 'objeto'
    %Query = 'INSERT INTO objeto(id_categoria, id_empleado, no_inventario, no_activofijo, nombre, marca, modelo, no_serie, descripcion, precio, fecha_compra, foto, observaciones) VALUES ('+Sections(1, 1)+', '+Sections(1, 2)+', '+Sections(1, 3)+', '+Sections(1, 4)+', '''+Sections(1, 5)+''', '''+Sections(1, 6)+''', '''+Sections(1, 7)+''', '''+Sections(1, 8)+''', '''+Sections(1, 9)+''', '+Sections(1, 10)+', '''+Sections(1, 11)+''', '''+Sections(1, 12)+''', '''+Sections(1, 13)+''');';

    % Insert into table 'sub_categoria'
    % Query = 'INSERT INTO sub_categoria(id_categoria, nombre, descripcion) VALUES('+Sections(1, 1)+', '''+Sections(1, 2)+''', '''+Sections(1, 3)+''');';
    
    % Insert into table 'sub_divion'
    Query = 'INSERT INTO sub_division(id_subcategoria, nombre, descripcion) VALUES('+Sections(1, 1)+', '''+Sections(1, 2)+''', '''+Sections(1, 3)+''');';

    fprintf(WriteFile, '%s\n', Query);
    
    i = i + 1;
end

fclose(FileInfo);
fclose(WriteFile);




















