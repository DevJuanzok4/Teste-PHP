<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    background-color: #1b1E23;
    justify-content: center;
    align-items: center;
   
}
.calculadora{
    align-items: center;
    border-radius: 8px;
}
input{
    font-size: 50px;
}
h1{
    color: #4765ff;
    font-weight: 800;
    text-align: center;
    letter-spacing: 0.1em;
}

p{
    font-size: 40;
    color: #4765ff;
}

    </style>
</head>
<body>
    <h1>Calculadora</h1>
<center>
    <div class="calculadora">
        <div class="box">
            <div class="inputs">
                <form action="calcular.php" method="post">
                  <input type="text"  name="nome" placeholder="Digite o nome"  >
                  <input type="number" name="numero1" placeholder="Primeiro numero"  id="">
                  <input type="number" name="numero2" placeholder="Segundo numero" id="">
                  <br> <br>
                  <input type="submit" value="Calcular">
                </form>
            </div>
        </div>
    </div>
    </center>
</body>
</html>