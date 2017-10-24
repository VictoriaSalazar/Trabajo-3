<?php
$n1=$_POST['NumeroUno'];
$n2=$_POST['NumeroDos'];
$n3=$_POST['NumeroTres'];

if ($n1>$n2){
    echo "El primer número (".$n1.") es mayor que el segundo (".$n2.")";
}
elseif ($n1==$n2){
    echo "El primer número (".$n1.") es igual al segundo (".$n2.")";
}
else{
    echo "El primer número (".$n1.") es menor que el segundo (".$n2.")";
}
if ($n2>$n3){
    echo "El segundo número (".$n2.") es mayor que el tercero (".$n3.")";
}
else if ($n2==$n3){
    echo "El segundo número (".$n2.") es igual al segundo (".$n3.")";
}
else{
    echo "El segundo número (".$n2.") es menor que el tercero (".$n3.")";
}
?>