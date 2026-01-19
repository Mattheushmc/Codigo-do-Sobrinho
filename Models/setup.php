<?php

require 'db.php';

try {
    $pdo = new PDO("mysql:host=$host", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado ao MySQL...\n";

    $pdo->exec("CREATE DATABASE IF NOT EXISTS $banco CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    echo "Banco '$banco' verificado.\n";

    $pdo->exec("USE $banco");

    $sql = file_get_contents(__DIR__ . '/schema.sql');
    $comandos = array_filter(array_map('trim', explode(';', $sql)));

    foreach ($comandos as $cmd) {
        if (!empty($cmd)) {
            $pdo->exec($cmd);
        }
    }
    
    echo "Tabelas (em Português!) criadas com sucesso.\n";

} catch (PDOException $e) {
    echo "Erro no setup: " . $e->getMessage() . "\n";
}
?>
