<?php
    require 'conexao.php';
    $sql = "SELECT * FROM livro";
    $stmt = $pdo->query($sql);
    while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // echo "<pre>";
        // print_r($produto);
        echo "ID: " . $livro['id_livro'] . "<br>";
        echo "titulo: " . $livro['titulo'] . "<br>";
        echo "Gênero: " . $livro['genero'] . "<br>";
        echo "Ano: " . $livro['ano'] . "<br>";
        echo "Autor: " . $livro['autor'] . "<br>";
        echo "Páginas: " . $livro['paginas'] . "<br><br>";
    }
 ?>
