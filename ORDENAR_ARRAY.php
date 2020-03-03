<?php

//array a ordenar
$inicio=array(5,9,4,7,3,8,2,1,6);
 

echo "<br><br>Array desordenado<br><br>";
for($i=0;$i<count($inicio);$i++)
    echo $inicio[$i]."\n";
 
$final=met_ordenar($inicio);
 
echo "<br><br>Array Ordenado<br><br>";
for($i=0;$i<count($final);$i++)
    echo $final[$i]."\n";



    function met_ordenar($array)
    {
        for($i=1;$i<count($array);$i++)
        {
            for($j=0;$j<count($array)-$i;$j++)
            {
                if($array[$j]>$array[$j+1])
                {
                    $k=$array[$j+1];
                    $array[$j+1]=$array[$j];
                    $array[$j]=$k;
                }
            }
        }
     
        return $array;
    }



?>