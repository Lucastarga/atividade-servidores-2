<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }

        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #21D4FD;
            background-color: #21D4FD;
            background-color: #8BC6EC;
            background-color: #8BC6EC;
            background-color: #0093E9;
            background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
        }


        .container {
            width: 50%;
            min-height: 50%;
            padding: 10px;
            background-color: #fff;
            border-radius: 10px;
            display: grid;
            align-content: center;
            gap: 20px;
        }

        .mensagem,
        .resultado {
            text-align: center;
        }

        .resultado {
            font-size: 5rem;
        }


        .box-image img {
            max-width: 100%;
        }

        .box-image {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>

    <?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operador = $_POST['operator'];
    $resultado;
    $mensagem;
    $image;
    $validacao = ($num1 !== '' && $num2 !== '') ? true : false;

    if ($num2 == '0' && $operador == '/') {
        $operador = 'erro';
    }

    if ($num1 !== '' && $num2 !== '') {
        switch ($operador) {
            case '+':
                $resultado = $num1 + $num2;
                $mensagem = "O resultado da soma entre $num1 e $num2 é:";
                break;
            case '-':
                $resultado = $num1 - $num2;
                $mensagem = "O resultado da subtração entre $num1 e $num2 é:";
                break;
            case '*':
                $resultado = $num1 * $num2;
                $mensagem = "O resultado da multiplicação entre $num1 e $num2 é:";
                break;
            case '/':
                $resultado = $num1 / $num2;
                $mensagem = "O resultado da divisão entre $num1 e $num2 é:";
                break;

            case 'erro':
                $resultado = null;
                $mensagem = "Erro, não é possivel dividir por 0";
                $image = './error.png';
                break;
        }
    }

    ?>


    <?php
    if ($validacao) { ?>
        <div class="container">
            <div class="box-resultado">
                <h2 class="mensagem"><?= $mensagem ?></h2>
                <h1 class="resultado"><?= $resultado ?></h1>
            </div>
            <div class="box-image">
                <img src="<?= $image ?>" alt="">
            </div>
        </div>

    <?php } else { ?>
        <div class="container">
            <div class="box-resultado">
                <h2 class="mensagem">Erro, os campos não podem estar vazios!</h2>
            </div>
            <div class="box-image">
                <img src="./error.png" alt="">
            </div>
        </div>
    <?php } ?>

</body>

</html>