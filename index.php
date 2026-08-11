<?php
// HEADERS 
include __DIR__ . '/password.php';


$validadorDeEntrada = 0;


while ($validadorDeEntrada != 5) {

    $hasNumeric = false;
    $hasUpperStrings = false;
    $hasLowerStrings = false;
    $hasSpecialStrings = false;

    echo "\nOlá, seja bem vindo ao Password-Generator-VPRO!\n";
    echo "1 - Gerador de Senha.\n";
    echo "5 - SAIR.\n";
    $validadorDeEntrada = fgets(STDIN);
    switch ($validadorDeEntrada) {
        case 1:
            echo "\n Marque S para Sim e N para não.\n";

            echo "Letras Maiúsculas ?";
            $letrasMaiusculas = fgets(STDIN);
            if (strtoupper(trim($letrasMaiusculas)) == "S") {
                $hasUpperStrings = true;
            }

            echo "Letras Minúsculas ?";
            $letrasMinusculas = fgets(STDIN);
            if (strtoupper(trim($letrasMinusculas)) == "S") {
                $hasLowerStrings = true;
            }

            echo "Números ? ";
            $numeros = fgets(STDIN);
            if (strtoupper(trim($numeros)) == "S") {
                $hasNumeric = true;
            }

            echo "Caracteres Especiais ?";
            $caracteresEspeciais = fgets(STDIN);
            if (strtoupper(trim($caracteresEspeciais)) == "S") {
                $hasSpecialStrings = true;
            }

            echo "Qual o tamanho da senha desejada ?";
            $sizePassword = (int)fgets(STDIN);

            $password = passowordGenerator(trim($sizePassword), $hasNumeric, $hasLowerStrings, $hasUpperStrings, $hasSpecialStrings);

            sleep(3);
            break;
        case 5:
            echo "Saindo do gerador de senhas...";
            break;
        default:
            echo  "A opção selecionada não é válida!";
            break;
    }
}
