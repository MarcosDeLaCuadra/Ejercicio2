<?php

echo "hola mundo";

 $array= array();

for ($i=0; $i <5 ; $i++) { 
    # code...
    $array[$i]= rand(1, 10);
}


var_dump($array);

 $promedio =0;

for ($i=0; $i <5 ; $i++) { 
    # code...
   
    $promedio= $promedio+$array[$i];
}

echo $promedio;

echo "<br>";

$promedio= $promedio / 6;

echo "<br>";

echo $promedio;

if($promedio <6)
{
    echo "el promedio es menor a 6   :   ". $promedio;

}
if($promedio ==6)
{
     echo "el promedio es  6   :   ". $promedio;
}
else
{

    echo "el promedio es mayor a 6    :    ". $promedio;
}

 

/*$array2 = array(0=> rand(), 1=> rand(), 2=> "carlos");

echo "<br>";

var_dump($array2);
echo "<br>";

print_r( $array2[2] );
echo "<br>";

echo $array2[2];*/

?>