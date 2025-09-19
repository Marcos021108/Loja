<?php
require 'conexao.php';

// Tenta pegar o ID via POST primeiro, depois GET
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
}

if (!$id) {
    header('Location: listar.php');
    exit;
}

$sql = "DELETE FROM produtos WHERE id = :id";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([':id' => $id]);
    header('Location: listar.php?deleted=1');
    exit;
} catch (PDOException $e) {
    echo "Erro ao apagar produto: " . $e->getMessage();
}
