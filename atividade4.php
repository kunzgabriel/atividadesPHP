<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4 PHP - Gabriel Kunz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-3">
        <h1 style="font-weight: bold;">Atividade 4</h1>
        <ul>
            <li>Explique com suas palavras a função do método foreach no PHP, descreva um exemplo fazendo seu uso e mostrando o resultado.</li>
        </ul>
        <hr>
    </div>
    <div class="container">
        <h2 style="font-weight: bold;">foreach</h2>
        <p>
            O método <code>foreach</code> é uma estrutura de repetição do PHP, ou como também conhecido, um laço de repetição. 
            Ele percorre cada um dos elementos de um determinado array e executa o bloco de código inserido nele, para cada elemento percorrido.
            No exemplo abaixo, acessamos o array de números, e para cada número do array ocorre uma operação que duplica o número em questão.
        </p>
        <h4 style="font-weight: bold;">Exemplo de uso de <code>foreach</code></h4>
        <img src="img/foreach.png" alt="Exemplo de uso de foreach"><br><br>
        <h5>Resultado:</h5>
        <code>
            <?php
                $numeros = [3, 8, 11, 16, 20, 26];
                foreach ($numeros as $numero) {
                    $dobro = $numero * 2;
                    echo "O dobro de $numero é $dobro.<br>";
                }
            ?>
        </code>
    </div>
</body>
</html>