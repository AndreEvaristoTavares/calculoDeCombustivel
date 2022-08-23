<?php
$distancia = $_POST["distancia"];
$consumo = $_POST["consumo"];
$preco = $_POST["preco"];

$mensagem = "";
if((is_numeric($preco)) && (is_numeric($consumo) && (is_numeric($distancia)))){
    if(($preco > 0) && ($distancia > 0) && ($consumo > 0)){
        $resultado = ($distancia / $consumo) * $preco;
        $resultado_final = number_format($resultado,2);
        $mensagem.= "<h3>R$ ".$resultado_final."</h3>";
    } else {
            $erro = "ERRO: Os numeros tem que ser maior que 0...";
            $mensagem.= "<h2>".$erro."</h2>";
    }
} else {
        $erro = "ERRO: Algum dos dados digitados nao sao numericos!";
        $mensagem.= "<h2>".$erro."</h2>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #000;
        }
        h1{
            color: gold;
        }
        h2{
            font-size: 50px;
            color: red;
            
        }
        h3{
            color: #000;
            font-size: 50px;
        }
        div{
            width: 360px;
            height: 256px;
            background-image: radial-gradient(circle at 76.38% 50%, #ffffa1 0, #ffff92 12.5%, #fff285 25%, #f1d479 37.5%, #d8b46c 50%, #bc9660 62.5%, #a27d56 75%, #8c694e 87.5%, #785947 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 50px;
            border-radius: 10px;
        }
    </style>
    <title>resultado</title>
</head>
<body>
<h1>Resultado do calculo</h1>
    <div>        
        <?php
        echo $mensagem;
        ?>
    </div>
</body>
</html>