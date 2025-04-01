<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        $qntcol = @$_POST['qntcol'];
        $qntrows = @$_POST['qntrows'];

    ?>

</head>
<body>
    <form action="exercicio02.php" method="post">
        <label for="qntcol">Quantas colunas você quer em sua tabela?</label><br>
        <input type="number" id="qntcol" name="qntcol"><br>

        <label for="qntrows">Quantas linhas você quer em sua tabela?</label><br>
        <input type="number" id="qntrows" name="qntrows"> 

        <input type="submit" value="Ir">
    </form>

    <?php

        // Condicional para não ser apresentada tabela se forms não tiver sido respondido
        if ($qntcol != '' and $qntrows != '') {

            //Começo Tabela
            echo "<table>";
            //Contador
            $i = 1;
            //While gerador de linhas
            while ($i <= $qntrows) {
                
                echo "<tr>";
                //Contador
                $j = 1;
                //While gerador de colunas em cada linha
                while ($j <= $qntcol) {
                    
                    //Switch caso seja o cabeçalho
                    switch ($i){
                        case 1:
                            echo "<th> Título $j </th>";
                            break;
                        default:
                            echo "<td> cel ".$i."x".$j." </td>";
                            break;
                    }

                    $j++;
                }
                echo "</tr>";
                $i++;

            }
            echo "</table>";
        }
        //------/------//

    ?>

</body>
</html>