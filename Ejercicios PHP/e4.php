<?php
$n1=$_POST['NumeroUno'];
$n2=$_POST['NumeroDos'];

if ($n1>$n2){
    echo "El primer número (".$n1.") es mayor que el segundo (".$n2.")";
}
elseif ($n1==$n2){
    echo "El primer número (".$n1.") es igual al segundo (".$n2.")";
}
else{
    echo "El primer número (".$n1.") es menor que el segundo (".$n2.")";
}
?>