<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tp4 </title>
</head>
<body>
    
<?php

$matriz = [0 ,2 ,4 ,6 ,8 ,10 ,12 ,14 ,16 ,18];
print "<pre>\n";
print_r($matriz);

$a= ["Pedro","Ana",34, 1];
print_r($a);

$c =["nombre" => "Gabriela", "direccion" => "MND", "telefono" => "034135979", "apellido" => "Torres"];
print_r($c);

$d =["Madrid", "Bcn","Ny","LA","Chicago","Londres"];
Print "La ciudad con el índice 0 tiene el nombre $d[0]";

print "<br>";

$e =[ "MD"=>"madrid","BC"=>"barcelona","NY"=>"New york", "LA"=>"los angeles","LD"=>"londres", "CCH"=>"chicago"];
print"El índice de $e[MD] es MD";
 
 
 ?> 




</body>
</html>