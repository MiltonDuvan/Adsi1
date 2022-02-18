<?php
//llamando al archivo cuentabancaria.
require_once("01_CuentaBancaria.php");
//crear una instancia de la cuenta bancaria
$objCuentabancaria= new Cuentabancaria(1001,"Ahorro", 1050000.55, "Retiro","Milton@mise.edu.xo");
$objCuentabancaria->getCuentabancaria();
print_r('<pre>');
print_r($objCuentabancaria);
print_r('</pre>');
$objCuentabancaria-> consignar_dinero(6000.00). "<br>";
echo $objCuentabancaria->saldo;

$objCuentabancaria->getTipodecuenta();
//echo "<br>" . $objCuentabancaria->tipo_de_cuenta ;

//Metodo set
$objCuentabancaria->setTipodecuenta("'Cuenta Corriente'");
//llamar de nuevo al metodo get para completar el metodo set.
echo "<br>";
echo "Tipo de cuenta: " . $objCuentabancaria->getTipodecuenta();

?>