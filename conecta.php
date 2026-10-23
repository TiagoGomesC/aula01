<?php 
$host = "192.168.10.71";
$dbname = "mesacinema";
$user = "mesacinema";
$pass = "mesacinema1234";
try {
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass
    );
    echo "Oii mesaria(o)!";
    return $conexao;
} catch (PDOException $e){
    echo "Erro: ". $e->getMessage();
}
?>