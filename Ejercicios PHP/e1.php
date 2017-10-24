<?php
    $numero1=$_POST['VariableUno'];
    $numero2=$_POST['VariableDos'];
    //SUMAR
    $suma=$numero1+$numero2;
    echo "$numero1+$numero2"."<br>";
    echo "suma =".$suma."<br>";
    //RESTAR
    $resta=$numero1-$numero2;
    echo "$numero1-$numero2"."<br>";
    echo "resta =".$resta."<br>";
    //MULTIPLICAR
    $multiplica=$numero1*$numero2;
    echo "$numero1*$numero2"."<br>";
    echo "multiplica =".$multiplica."<br>";
    //DIVIDIR
    $division=$numero1/$numero2;
    echo "$numero1/$numero2"."<br>";
    echo "division =".$division."<br>";
    ?>