<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>


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
    $validador = ($valor !== '') ? true : false;
    $tipo_comprador = $_POST['comprador'];
    $descricao_comprador;
    $valor_desconto;
    $porcentagem_desconto;


    if($validador){
        switch ($tipo_comprador) {
            case '1':
                $descricao_comprador = 'Cliente Comum';
                $valor_desconto = 0;
                $porcentagem_desconto = "0%";
                break;
    
            case '2':
                $descricao_comprador = 'Funcionário';
                $valor_desconto = $valor * 0.1;
                $porcentagem_desconto = "10%";
    
                break;
            case '3':
                $descricao_comprador = 'Cliente Vip';
                $valor_desconto = $valor * 0.05;
                $porcentagem_desconto = "5%";
    
                break;
        }
    }

    ?>

    <?php

    if($validador){ ?>
    <div class="container">
        <div class="resultado">
            <fieldset>
                <legend>Resumo da compra</legend>
                <h2 class="description">Valor da Compra:<span><?= ' R$' . $valor ?></span></h2>
                <h2 class="description">Tipo de Comprador:  <span><?= $descricao_comprador ?></span></h2>
                <h2 class="description">Valor do desconto:<span><?= ' R$' . $valor_desconto ?></span></h2>
                <hr>
                <h1 class="total">Total: <span><?= 'R$' . ($valor - $valor_desconto) ?></span></h1>
                <small>Aplicado desconto de <?= $porcentagem_desconto ?> para <?= $descricao_comprador ?> </small>
            </fieldset>
        </div>
    </div>

    <?php } else{ ?>
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