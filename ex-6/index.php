<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300;400;700&family=M+PLUS+1+Code:wght@300;400;700&family=Montserrat:wght@200;400;500;700&family=Nunito:wght@200;400;600;800&family=Poppins:wght@300;400;500;600;900&display=swap" rel="stylesheet">


    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
        }

        body{
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


        .container{
            width: 50%;
            min-height: max-content;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            display: grid;
            align-content: center;
            gap: 25px;
        }

        .form{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .form button{
            min-height: 30px;

        }

        .title{
            text-align: center;
        }

        .input-valor,
        .input-submit{
            min-height: 30px;
            padding: 5px;
            border: 1px solid #B2BEBF;
            border-radius: 3px;
            outline: none;
        }

        .input-valor{
            width: 100%;
        }

        .input-submit{
            background-color: #65BDE6;
            color: #fff;
        }

        .submit{
            display: flex;
            align-items: end;
            height: 100%;
        }

        



    </style>
</head>
<body>

<main class="container">
    <h1 class="title">Imprimindo sequência</h1>
    <form class="form" action="./recebe-dados.php" method="POST">
        <div>
            <label for="num1">Número inicial:</label><br>
            <input class="input-valor" type="number" name="num1" id="num1" placeholder="Digite aqui" required>
        </div>

        <div>
            <label for="num2">Número final:</label><br>
            <input class="input-valor" type="number" name="num2" id="num2" placeholder="Digite aqui" required >
        </div>

        <div class="submit">
            <input class="input-submit" type="submit" value="Imprimir">
        </div>
    </form>

   
    

    
</main>


    
</body>
</html>