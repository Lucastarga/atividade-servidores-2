<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
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
            height: 50%;
            padding: 10px;
            background-color: #fff;
            border-radius: 10px;
            display: grid;
            align-content: center;
            gap: 25px;
        }

        .form-container{
            display: flex;
            width: max-content;
            margin: 0 auto;
            gap: 15px;
            padding: 10px;
        }

        .input-form{
            width: 100px;
            height: 100px;
            border-radius: 5px;
            font-size: 3rem;
            text-align: center;
            border: 1px solid #CACACA;
            outline: none;
        }

        .input-form::placeholder{
            color: #CACACA;
        }


        .description-form{
            text-align: center;
            display: inline-block;
            width: 100%;
        }

        .input-operator{
            width: 100px;
            height: 100px;
            font-size: 3rem;
            text-align: center;
            border-radius: 5px;
            border: 1px solid #CACACA;
            outline: none;
        }

        .description{
            text-align: center;
            
        }

        .submit{
            display: block;
            width: 55%;
            min-height: 35px;
            border-radius:5px;
            margin: 0 auto;
            background-color: #65BDE6;
            color: #fff;
            font-size: 1.125rem;
            border: none;
            transition: all .2s;
        }

        .submit:hover{
            transform: scale(1.01);
        }




    </style>
</head>
<body>

<main class="container">
    <div class="description">
        <h2>Calculando de acordo com a operação</h2>

    </div>
    <form id="form" class="form-container" action="./recebe-dados.php" method="POST">
        <div>
            <label class="description-form" for="num1">Primeiro valor:</label><br>
            <input class="input-form" type="text" id="num1" name="num1" placeholder="0" required>
        </div>
        <div>
            <label class="description-form" for="operator">Operação</label><br>
            <select class="input-operator" name="operator" id="operator" >
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>

        </div>
        <div>
            <label class="description-form" for="num2">Segundo valor:</label><br>
            <input class="input-form" type="text" id="num2" placeholder="0" name="num2" required>
        </div>
    </form>

    <div >
        <button form="form" class="submit" type="submit" >Calcular</button>
    </div>
</main>


    
</body>
</html>