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
    $qualityPassoword = checkCaractere($password);
    $sizePassword = strlen($password);

    if ($sizePassword >= 14 && $qualityPassoword >= 3) {
        return "A senha informada é uma senha de forte!\n";
    } elseif (($sizePassword >= 8 && $sizePassword < 13) && $qualityPassoword >= 3) {
        return "A senha informada é uma senha  média!\n";
    } else {
        return "A senha informada é uma senha Fraca!\n";
    }
}

/*
    ---------------------Função para validar quais tipos de caracteres presentes na senha---------------------
    Não sei se foi a melhor maneira de implementar, mas foi a forma que veio na mente, validar depois.
*/
function checkCaractere(string $password): int {
    global $stringContentNumeric, $stringContentLowerCaseStrings, $stringContentUpperCaseStrings, $stringContentSpecialCharacters;

    $countCaractereClass = 0;

    // Convertendo as Strings em Arrays para validar caractere por caractere.
    $passwordArray = str_split($password);
    $stringContentNumericArray = str_split($stringContentNumeric);
    $stringContentLowerCaseStringsArray = str_split($stringContentLowerCaseStrings);
    $stringContentUpperCaseStringsArray = str_split($stringContentUpperCaseStrings);
    $stringContentSpecialCharactersArray = str_split($stringContentSpecialCharacters);

    foreach ($passwordArray as $letraOfPassoword) {
        foreach ($stringContentNumericArray as $caractereNumeric) {
            if ($letraOfPassoword == $caractereNumeric) {
                $countCaractereClass += 1;
                break 2;
            }
        }
    }

    foreach ($passwordArray as $letraOfPassoword) {
        foreach ($stringContentLowerCaseStringsArray as $caractereLower) {
            if ($letraOfPassoword == $caractereLower) {
                $countCaractereClass += 1;
                break 2;
            }
        }
    }

    foreach ($passwordArray as $letraOfPassoword) {
        foreach ($stringContentUpperCaseStringsArray as $caractereUpper) {
            if ($letraOfPassoword == $caractereUpper) {
                $countCaractereClass += 1;
                break 2;
            }
        }
    }
    foreach ($passwordArray as $letraOfPassoword) {
        foreach ($stringContentSpecialCharactersArray as $caractereSpecial) {
            if ($letraOfPassoword == $caractereSpecial) {
                $countCaractereClass += 1;
                break 2;
            }
        }
    }

    return $countCaractereClass;
}
