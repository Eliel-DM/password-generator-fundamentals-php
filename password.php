<?php

$stringContentNumeric  = "0123456789";
$stringContentLowerCaseStrings = "abcdefghijklmnopqrstuvwxyz";
$stringContentUpperCaseStrings = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$stringContentSpecialCharacters = "!@#$%^&*()-_=+[]{};:'\",.<>/?\\|`~";

function passowordGenerator(bool $includeNumeric, bool $includeLowCaseStrings, bool $includeUpperCaseStrings, bool $includeSpecialCaracteres): string {
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


    // Realizar a tratativa de tamalho, e embaralhar as strings ....

    return $passwordString;
}
