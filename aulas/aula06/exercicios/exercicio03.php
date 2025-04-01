<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $produto = [
            [
                "nome"=>"Pilha",
                "preco"=>"9",
                "categoria"=>"Utilitários"
            ],
            [
                "nome"=>"Caneta",
                "preco"=>"3.50",
                "categoria"=>"Escritório"
            ],
            [
                "nome"=>"Suco",
                "preco"=>"7",
                "categoria"=>"Alimentos"
            ]
        ]
    ?>
    
    <table>
        <tr><th>Nome</th><th>Preço</th><th>Categoria</th></tr>
        <?php
            foreach ($produto as $i => $j) {
                echo "<tr>";
                foreach ($produto[$i] as $k => $l) {
                    echo "<td>".$l."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    

</body>
</html>