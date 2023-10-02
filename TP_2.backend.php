<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Ejercicios 1</h1>
    
    <?php
 $a = 1;
 $b = 3;
if ($a >=0  && $b >=0 ) {

    print "La variable a y la variable b son pares";

}  
    ?>

    <h2> Ejercicio 2</h2>

      <?php  
    $a= 2;
    $b= 3;
if ($a >1 && $a<10) {
       print "la variable a es mayor a 1 y menor a 10";
    }
      ?>

      <h3> Ejercicio 3</h3>

      <?php  
    $a= 2;
    $b= 3;
if ($a >1 || $a<10) {
       print "la variable a es mayor a 1 o menor a 10";
    }
    
     ?>

     <h4> Ejercicio 4 </h4>

     <?php  
    $a= 2;
    $b= 3;
if ($a > $b) {
      print ($a + $b); 
      print "<br>";
      print ($a -$b);
    }
elseif ($b > $a) {   
    print ($b * $a);
    print  "<br>";
    print ($a / $b);
    print  "<br>";
    print ($a % $b);
  
}
    
     ?>
             
    
    

</body>
</html>