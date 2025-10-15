<?php
function contagemRegressiva($numero) {
    while ($numero >= 0) {
        echo $numero . "<br>";
        $numero--;
    }
}

contagemRegressiva(10);
?>
