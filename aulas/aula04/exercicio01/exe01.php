<?php

$nome = $_GET['nome'];
$n1 = $_GET['n1'];
$n3 = $_GET['n2'];
$n2 = $_GET['n3'];

$media = ($n1 + $n2 + $n3) / 3

?>

<h1>Nota média:</h1>
<p>Sua nota média foi: <?php echo $media ?></p>