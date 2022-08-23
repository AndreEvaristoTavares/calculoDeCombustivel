<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de combustivel</title>
    <style>
        *{
           
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        body{
            background-color: #000;
            
            background-size: contain;
        }
        body, label{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: 25px;
        }
        input{
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            border: 2px solid #000;
            border-radius: 10px;
            text-align: center;
            font-size: 30px;
        }
        
        h1{
            text-align: center;
            color: gold;
        }
        form{
            width: 360px;
            height: 300px;
            background-color: bisque;
            padding: 50px;
            border-radius: 10px;
            background-image: radial-gradient(circle at 76.38% 50%, #ffffa1 0, #ffff92 12.5%, #fff285 25%, #f1d479 37.5%, #d8b46c 50%, #bc9660 62.5%, #a27d56 75%, #8c694e 87.5%, #785947 100%);
        }
        .botao{
            background-color: #000;
            color: gold;
            width: 300px;
        }
        .botao:hover{
            background-color: #bc9660;
            transition: all .5s;
            color: #000;
            
        }
    </style>
</head>
<body>
    <h1>Calculo de combustivel</h1>

    <form action="calculo.php" method="POST"> 
        <label for="distancia">Distancia percorrida em KM:
            <input type="number" name="distancia" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
        </label>
        <label for="consumo">Consumo do veiculo por Litro: 
            <input type="number" name="consumo" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
        </label>
        <label for="preco">Preço do Combustivél:
            <input type="number" name="preco" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
        </label>
        <label for="calcular">
            <input class="botao" type="submit" value="Calcular">
        </label>
    </form>
    
</body>
</html>