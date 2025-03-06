<?php

$n1 = $_GET['n1'];
$n3 = $_GET['n2'];
$n2 = $_GET['n3'];

$nArr = array($n1, $n2, $n3);
$count = 0;
foreach ($nArr as $n) {
    $count2 = 0;

    foreach ($count + 1 as $i){
        if ($n > $nArr[$count2++]){
            //Terminar !!!!
        };
    };
    
};

?>

<h1>Nota média:</h1>
<p>Sua nota média foi: <?php echo $media; ?></p>