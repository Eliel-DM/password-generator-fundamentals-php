<?php

$stringContentNumeric  = "0123456789";
$stringContentLowerCaseStrings = "abcdefghijklmnopqrstuvwxyz";
$stringContentUpperCaseStrings = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$stringContentSpecialCharacters = "!@#$%^&*()-_=+[]{};:'\",.<>/?\\|`~";

function passowordGenerator(int $passwordSize, bool $includeNumeric, bool $includeLowCaseStrings, bool $includeUpperCaseStrings, bool $includeSpecialCaracteres): string {
    global $stringContentNumeric, $stringContentLowerCaseStrings, $stringContentUpperCaseStrings, $stringContentSpecialCharacters;

    $passwordString = "";

    // Verificar uma forma melhor de realizar essas validações ...
    if ($includeNumeric) {
        $passwordString .= $stringContentNumeric;
    }
    if ($includeLowCaseStrings) {
        $passwordString .= $stringContentLowerCaseStrings;
    }
    if ($includeUpperCaseStrings) {
        $passwordString .= $stringContentUpperCaseStrings;
    }
    if ($includeSpecialCaracteres) {
        $passwordString .= $stringContentSpecialCharacters;
    }
    $passwordString = str_repeat($passwordString, $passwordSize); // Vai repetir os caracteres ate que tenha o tamanho desejado. 
    $passwordString = str_shuffle($passwordString); // Vai embaralhar a ordem dos caracteres
    $passwordString = substr($passwordString, 0, $passwordSize); // Vai cortar a string apatir do caracere 0 até o tamanho inserido no passwordSize;


    return $passwordString;
}



function passwordValidator(string $password): string {
    $sizePassword = strlen($password);

    return "12312";
}

// Função para validar se a senha tem os  caracteres desejáveis 
function checkCaractere(string $password): int {
    global $stringContentNumeric, $stringContentLowerCaseStrings, $stringContentUpperCaseStrings, $stringContentSpecialCharacters;
    $countCaractereClass = 0;
    $passwordArray = str_split($password);

    foreach ($passwordArray as $letraOfPassoword) {
        $stringContentNumericArray = str_split($stringContentNumeric);
        // var_dump($passwordArray);
        foreach ($stringContentNumericArray as $caractereNumeric) {
            if ($letraOfPassoword == $caractereNumeric) {
                $countCaractereClass += 1;
                break;
            } else {
            }
        }
    }

    return $countCaractereClass;
}
