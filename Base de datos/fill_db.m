close all, clear all, clc

FileInfo = fopen('Datos_resguardo_GHG.csv', 'r');

i = 1;
% while ~feof(FileInfo)
for k = 1:227
    line = fgetl(FileInfo);
    Sections = strsplit(line, ',');
    Data(i, :) = [Sections(1, 1), Sections(1, 2), Sections(1, 3), Sections(1, 4), Sections(1, 5), Sections(1, 6), Sections(1, 7), Sections(1, 8), Sections(1, 9), Sections(1, 10), Sections(1, 11)];
    
    i = i + 1;
end

Data

fclose(FileInfo);
























