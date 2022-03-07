<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>


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
            width: 50vw;
            min-height: 50vh;
            max-height: 60vh;
            padding: 10px;
            background-color: #fff;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .container-error {
            width: 50%;
            min-height: 50%;
            padding: 10px;
            background-color: #fff;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1:nth-child(1) {
            margin-bottom: 30px;
        }

        .total {
            margin-top: 10px;
            color: #777;
        }

        .description {
            display: inline-block;
            margin: 5px 10px;
            color: #777;
            font-size: 1.5rem;
            text-decoration: underline dotted;
        }

        span {
            color: #03A64A;
        }

        hr {
            margin-top: 5px;
        }

        fieldset {
            width: 100%;
            height: 100%;
            padding: 40px;
            border-radius: 5px;
        }

        legend {
            font-size: 2rem;
            margin: 0 auto;
        }

        .box-image img {
            max-width: 100%;
        }

        .box-image {
            margin-top: 15px;
            display: flex;
            justify-content: center;
        }

        .mensagem {
            text-align: center;
        }

        .resultado {
            width: 80%;
            max-height: 200px;
            margin: 0 auto;
            text-align: justify;
            overflow-y: auto;
        }
    </style>
</head>

<body>

    <?php

    $valor = $_POST['valor'];
    $valor = trim($valor); //remove espacoes em branco antes e depois da string
    $qnt_caracter = strlen($valor); // retorna a quantidade de caracteres da string
    $validador = ($valor !== '') ? true : false;

    ?>

    <?php

    if ($validador) {  ?>

            <div class="container">
                <div class="resultado">
                    <h2>String: <span class="description"><?= $valor ?></span></h2>
                    <h2>Total de caracteres: <span class="description"><?= $qnt_caracter ?></span></h2>
                    <?php
                    for ($i = 1; $i < $qnt_caracter; $i++) { ?>
                        <span class="description">
                            <?= $i ?>
                        </span>
                    <?php } ?>
                </div>
            </div>

    <?php } else { ?>

        <div class="container-error">
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