<?php

function transformar($dato){//paso de argumento por valor
    return $dato . "transformado";
}

function calcularTotal($unidades, $precio, $iva){
    $subtotal=$unidades*$precio;
    $cuotaiva=$subtotal*$iva;
    $total=$subtotal+$cuotaiva;
    return $total;
}

function calcularTotal2($unidades, $precio, $tipooperacion){
    $subtotal=$unidades*$precio;
    $cuotaiva=0;
    if($tipooperacion=="normal"){
        $cuotaiva=$subtotal*0.21;
    } 
    elseif($tipooperacion=="reducido"){
        $cuotaiva=$subtotal*0.1;
    }
    else{
        $cuotaiva=$subtotal*0.04;
    }
    $total=$subtotal+$cuotaiva;
    return $total;
}

function manipularString($mensaje){
    return "En mayuscula " . strtoupper($mensaje);
}

function primeraMayuscula($datos){
    //retorna el dato con la primera letra en mayuscula
    return $datos . ucfirst("hola");
    
}

function reemplazar($valorBuscado, $valorReemplazar){
    //le das que buscas una a, y que muestre una e
    
}

function mostrarMes($fecha){
    //envias la fecha y retornas el mes en castellano
}

function info(){
    //muestra la version de php y verion del servidor
}

function numeroPrimo($numero){
    //retorna si es primo o no
}

function bisiesto($año){
    //retorna si el año es bisiesto o no
}