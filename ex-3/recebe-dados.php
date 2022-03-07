<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>


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
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-error{
            width: 50%;
            min-height: 50%;
            padding: 10px;
            background-color: #fff;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1:nth-child(1){
            margin-bottom: 30px;
        }

        .total{
            margin-top: 10px;
            color: #777 ;
        }

        .description{
            margin: 5px 0;
            color: #777 ;
        }

        span{
            color: #03A64A;
        }

        hr{
            margin-top: 5px;
        }

        fieldset{
            width: 100%;
            height: 100%;
            padding: 40px;
            border-radius: 5px;
        }

        legend{
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

        .mensagem{
            text-align: center;
        }

  

        
    </style>
</head>

<body>

    <?php

    $valor = $_POST['valor'];
    $valor_reajustado;
    $porcentagem_reajuste;
    $valida_reajuste = ($valor > 0 && $valor <= 300) ? '50' : '30';
    $validador = ($valor !== '' && $valor > 0) ? true : false ;

    if($validador){
        switch ($valida_reajuste){
            case '50':
                $valor_reajustado = $valor * 0.5;
                $porcentagem_reajuste = '50%';
                break;
            case '30':
                $valor_reajustado = $valor * 0.3;
                $porcentagem_reajuste = '30%';
                break;
        }
    }
    
    ?>

    <?php

    if($validador){ ?> 
        <div class="container">
            <div class="resultado">
                <fieldset>
                    <legend>Extrato</legend>
                    <h2 class="description">Salário atual:<span><?= ' R$' . $valor ?></span></h2>
                    <h2 class="description">Porcentagem do reajuste:  <span><?= $porcentagem_reajuste ?></span></h2>
                    <hr>
                    <h1 class="total">Total: <span><?= 'R$' . ($valor + $valor_reajustado) ?></span></h1>
                </fieldset>
            </div>
        </div>
    <?php } else{ ?>
        <div class="container-error">
            <div class="box-resultado">
                <h2 class="mensagem">Erro, o valor precisa ser maior que 0 e não pode estar vazio!</h2>
            </div>
            <div class="box-image">
                <img src="./error.png" alt="">
            </div>
        </div>
    <?php } ?>
    
</body>

</html>