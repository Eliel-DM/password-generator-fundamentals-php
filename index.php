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
    echo "2 - Validador de Senha.\n";
    echo "5 - SAIR.\n";
    $validadorDeEntrada = fgets(STDIN);
    switch ($validadorDeEntrada) {
        case 1:
            echo "\n Marque S para Sim e N para não.\n";

            echo "Letras Maiúsculas ?";
            $letrasMaiusculas = fgets(STDIN);
            if (strtoupper($letrasMaiusculas) == "S") {
                $hasUpperStrings = true;
            }

            echo "Letras Minúsculas ?";
            $letrasMinusculas = trim(fgets(STDIN));
            if (strtoupper($letrasMinusculas) == "S") {
                $hasLowerStrings = true;
            }

            echo "Números ? ";
            $numeros = trim(fgets(STDIN));
            if (strtoupper($numeros) == "S") {
                $hasNumeric = true;
            }

            echo "Caracteres Especiais ?";
            $caracteresEspeciais = trim(fgets(STDIN));
            if (strtoupper($caracteresEspeciais) == "S") {
                $hasSpecialStrings = true;
            }

            echo "Qual o tamanho da senha desejada ?";
            $sizePassword = (int) trim(fgets(STDIN));

            $password = passowordGenerator($sizePassword, $hasNumeric, $hasLowerStrings, $hasUpperStrings, $hasSpecialStrings);
            echo $password . "\n";
            sleep(3);
            break;
        case 2:
            echo "Insira a senha que deseja validar: ";
            $password = fgets(STDIN);
            $resultValidacaoSenha = passwordValidator($password);
            echo $resultValidacaoSenha;
            sleep(3);
            break;
        case 5:
            echo "Saindo do gerador de senhas...\n";
            break;
        default:
            echo  "A opção selecionada não é válida!\n";
            break;
    }
}
