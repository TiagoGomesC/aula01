<?php
echo "===== CALCULADORA =====\n";
echo "1 - Adicao\n";
echo "2 - Subtracao\n";
echo "3 - Multiplicacao\n";
echo "4 - Divisao\n";

$opcao = readline("Escolha uma opcao: ");

$num1 = readline("Digite o primeiro numero: ");
$num2 = readline("Digite o segundo numero: ");

if ($opcao == 1) {
    $resultado = $num1 + $num2;
    echo "Resultado: " . $resultado;
}
elseif ($opcao == 2) {
    $resultado = $num1 - $num2;
    echo "Resultado: " . $resultado;
}
elseif ($opcao == 3) {
    $resultado = $num1 * $num2;
    echo "Resultado: " . $resultado;
}
elseif ($opcao == 4) {
    if ($num2 == 0) {
        echo "Nao e possivel dividir por zero!";
    }
    else {
        $resultado = $num1 / $num2;
        echo "Resultado: " . $resultado;
    }
}
else {
    echo "Opcao invalida!";
}
?>

