<?php 

function calcularSalario($Renda, $Taxas){
    return $Renda - $Taxas;
}

echo "O funcionário tem um lucro de " . calcularSalario(9000, 1500) . " reais bruto.<br>";

function calcularGastoFuncionarios($QuantidadeFuncionarios, $Salario){
    return $QuantidadeFuncionarios * $Salario;
}

echo "O gasto total com funcionários é de " . calcularGastoFuncionarios(5, 2000) . " reais.";

?>