<?php
    require 'conexao.php';
    $id_livro = 1;
    $novoGenero = "Aventura";
    $sql = "UPDATE livro SET genero = :genero WHERE id_livro = :id_livro";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':genero', $novoGenero);
    $stmt->bindParam(':id_livro', $id_livro);
    if ($stmt->execute()) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar produto.";
    }
 ?>
