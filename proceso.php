<?php
$produc = $_POST['producto'];
$cantidad = $_POST['txtcantidad'];
$precio = "";
$iva = 0.13;
$cesc = 0.05;



if($produc==1){
   echo "<center> El producto escogido es Laptop y llevas $cantidad  a un precio de $525.00 + IVA <br><br>";
   $precio= $cantidad * 525.00;
   echo  "Sub-total =$$precio <br>";
   $calIVA= $precio * $iva;
   echo "IVA =      $$calIVA <br>";
   $calCESC = $precio * $cesc;
   echo "CESC =$$calCESC  <br> <br>";
   $total = $precio + $calIVA + $calCESC;
   echo "El total a pagar es de $$total </center>";

}
else if($produc==2){
    echo  "<center>El producto escogido es Memoria RAM y llevas $cantidad  a un precio de $15.00 + IVA <br><br>";
    $precio= $cantidad * 15.00;
    echo  "Sub-total =$$precio <br>";
    $calIVA= $precio * $iva;
    echo "IVA =      $$calIVA <br>";
    $calCESC = $precio * $cesc;
    echo "CESC =$$calCESC  <br> <br>";
    $total = $precio + $calIVA + $calCESC;
    echo "El total a pagar es de $$total</center>";
}

else if($produc==3){
    echo  "<center>El producto escogido es Audifonos y llevas $cantidad  a un precio de $10.00 + IVA <br><br>";
    $precio= $cantidad * 10.00;
    echo  "Sub-total =$$precio <br>";
    $calIVA= $precio * $iva;
    echo "IVA =      $$calIVA <br>";
    $calCESC = $precio * $cesc;
    echo "CESC =$$calCESC  <br> <br>";
    $total = $precio + $calIVA + $calCESC;
    echo "El total a pagar es de $$total</center>";
}



?>