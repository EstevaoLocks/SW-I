<?php

$n1 = $_GET['n1'];
$n3 = $_GET['n2'];
$n2 = $_GET['n3'];

if ($n1 > $n2 && $n2 > $n3){
    $nmaior = $n1;
    $nmedio = $n2;
    $nmenor = $n3;
}elseif ($n2 > $n3 && $n3 > $n1){
    $nmaior = $n2;
    $nmedio = $n3;
    $nmenor = $n1;
}else{
    $nmaior = $n3;
    $nmedio = $n1;
    $nmenor = $n2;
}

?>

<h1>Maior número:</h1>
<p>O maior número inserido foi: <?php echo $nmaior ?></p>
<p>A ordem crescente dos números inseridos foi: <?php echo "$nmaior, $nmedio, $nmenor" ?></p>