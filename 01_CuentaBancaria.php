<?php
class Cuentabancaria{
public $id;
public $tipo_de_cuenta;
public $saldo;
public $movimientos;
public $fecha_movimiento;
public $password;
public $email;
public $vr_saldo;

//Metodo ´principal

function __construct($vr_id, string $vr_tipo_de_cuenta, float $vr_saldo, $vr_movimientos,string $vr_email){
 $this->id=$vr_id;
    $this->tipo_de_cuenta = $vr_tipo_de_cuenta;
    $this->saldo = $vr_saldo;
    $this->movimientos= $vr_movimientos;
    $this->fecha_movimiento= date ('Y-m-d');
    $this->password=rand();
    $this->email=$vr_email;

}

//Metodos secundarios, mostrar informacion de la cuenta
public function getCuentabancaria(){
    $arrayCuentabancaria =Array (
        'No. de cuenta: ' => $this->id,
        'Tipo de cuenta: ' => $this->tipo_de_cuenta,
        'Saldo: ' => $this->saldo,
        'Movimientos: ' => $this->movimientos,
        'Fecha' => $this->fecha_movimiento,
    );
    return $arrayCuentabancaria;
}



public function consignar_dinero(float $consignar){
 if ($consignar>500000){
     $vr_saldo=$this -> saldo;
     $vr_saldo=$vr_saldo+$consignar;
     $this->saldo=$vr_saldo;
 }
    else 
        echo"El valor es insuficiente para consignar ". "<br>";
}

public function getTipodecuenta(){

  return $this->tipo_de_cuenta;
  
}

public function setTipodecuenta($cuenta){
 $this->tipo_de_cuenta= $cuenta;
}


}// end clase


?>