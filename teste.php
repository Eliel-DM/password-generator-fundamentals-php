<?php

// Vou utilizar esse arquivo para chamar algumas funções de teste e validar alguns comportamentos.

include __DIR__ . "/password.php";

$counter = passwordValidator("oA1i1231aa12312312aa");
echo $counter;
