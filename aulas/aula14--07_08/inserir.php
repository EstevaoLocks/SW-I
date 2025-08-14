<?php
    require 'conexao.php';
    $titulo = "Harry Potter e a Pedra Filosofal";
    $genero = "fantasia";
    $ano = 1974;
    $autor = "J. K. Rowlling";
    $paginas = 234;
    $sql = "INSERT INTO livro (titulo, genero, ano, autor, paginas) VALUES (:titulo, :genero, :ano, :autor, :paginas)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':paginas', $paginas);
    if ($stmt->execute()) {
    echo "Produto inserido com sucesso!";
    } else {
    echo "Erro ao inserir produto.";
    }
 ?>
