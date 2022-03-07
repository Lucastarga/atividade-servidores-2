<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>


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
            padding: 10px;
            width: 100%;
            min-height: 200px;
            overflow-x: auto;
            display: grid;
            align-content: center;
            text-align: center;
            white-space: normal;
        }
        
    </style>
</head>

<body>

    <?php

    $valor = $_POST['valor'];
    $validador = ($valor !== '' && $valor >= 0) ? true : false;
    $sequencia = array();

    for ($i = $valor; $i >= 1; $i--) {
        array_push($sequencia, $i);
    }

    $resultado = array_product($sequencia);

    ?>

    <?php
    if ($validador) { ?>

        <div class="container">
            <div class="resultado">
                <h2>
                    <?= $valor . '! 🠖 ' ?>
                    <span id="result">
                        <?php
                        foreach ($sequencia as $value) {
                            echo $value . 'x';
                        }
                        ?>
                    </span>
                    = <?= number_format($resultado, 0 , ',','.');?>
                </h2>
            </div>
        </div>

    <?php } else { ?>

        <div class="container-error">
            <div class="box-resultado">
                <h2 class="mensagem">Erro, os campos não podem estar vazios ou ser menor que 0!</h2>
            </div>
            <div class="box-image">
                <img src="./error.png" alt="">
            </div>
        </div>

    <?php } ?>

    <script>
        const result = document.querySelector('#result');
        result.textContent = result.textContent.trim().slice(0, -1);
    </script>
</body>

</html>