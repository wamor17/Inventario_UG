close all, clear all, clc

% Datos resguardo
FileInfo = fopen('objeto.csv', 'r');
% FileInfo = fopen('Datos_resguardo_GHG.csv', 'r');
% FileInfo = fopen('Subdivision_data.csv', 'r');
% FileInfo = fopen('Subcategories_data.csv', 'r');

line = fgetl(FileInfo);

% WriteFile = fopen('../Scripts SQL/Insert_subcategories.sql', 'w');
% WriteFile = fopen('../Scripts SQL/Insert_subdivision.sql', 'w');
WriteFile = fopen('../Scripts SQL/Insert_objeto.sql', 'w');
Query = 'USE inventarioUG;';

fprintf(WriteFile, '%s\n\n', Query);

num = 226; % Object
% num = 58;  % Subdivision
%num = 30;  % Subcategories

for k = 1:num
    line = fgetl(FileInfo);
    Sections = string( strsplit(line, ',') );
    
    % Insert into table 'objeto' from Datos_resguardo_GHG.csv file
    % Query = 'INSERT INTO objeto(id_categoria, id_subcategoria, id_subdivision, id_empleado, no_inventario, no_activofijo, marca, modelo, no_serie, descripcion, precio, fecha_compra, foto, observaciones) VALUES ('+Sections(1, 1)+', '+Sections(1, 2)+', '+Sections(1, 3)+', '+Sections(1, 4)+', '''+Sections(1, 5)+''', '''+Sections(1, 6)+''', '''+Sections(1, 8)+''', '''+Sections(1, 9)+''', '''+Sections(1, 10)+''', '''+Sections(1, 11)+''', '+Sections(1, 12)+', '''+Sections(1, 13)+''', '''+Sections(1, 14)+''', '''+Sections(1, 15)+''');';
    
    % Insert into table 'objeto' from objeto.csv file
    Query = 'INSERT INTO objeto(id_categoria, id_subcategoria, id_subdivision, id_empleado, no_inventario, no_activofijo, marca, modelo, no_serie, descripcion, precio, fecha_compra, foto, observaciones) VALUES ('+Sections(1, 1)+', '+Sections(1, 2)+', '+Sections(1, 3)+', '+Sections(1, 4)+', '''+Sections(1, 5)+''', '''+Sections(1, 6)+''', '''+Sections(1, 7)+''', '''+Sections(1, 8)+''', '''+Sections(1, 9)+''', '''+Sections(1, 10)+''', '+Sections(1, 11)+', '''+Sections(1, 12)+''', '''+Sections(1, 13)+''', '''+Sections(1, 14)+''');';
    
    % Insert into table 'sub_categoria'
    % Query = 'INSERT INTO sub_categoria(id_categoria, nombre, descripcion) VALUES('+Sections(1, 1)+', '''+Sections(1, 2)+''', '''+Sections(1, 3)+''');';
    
    % Insert into table 'sub_divion'
    % Query = 'INSERT INTO sub_division(id_subcategoria, nombre, descripcion) VALUES('+Sections(1, 2)+', '''+Sections(1, 3)+''', '''+Sections(1, 4)+''');';

    fprintf(WriteFile, '%s\n', Query);
end

fclose(FileInfo);
fclose(WriteFile);




















