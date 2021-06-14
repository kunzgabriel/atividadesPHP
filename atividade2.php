<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2 PHP - Gabriel Kunz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-3">
        <h1 style="font-weight: bold;">Atividade 2</h1>
        <ul>
            <li>Descreva e explique a diferença do uso de aspas simples ('') e duplas ("") no PHP.</li>
            <li>Crie um exemplo de cada demonstrando a diferença.</li>
        </ul>
        <hr>
    </div>
    <div class="container">
        <div id="aspas_simples">
            <h2 style="font-weight: bold;">Aspas simples</h2>
            <p>
                As aspas simples, no PHP são usadas para guardar ou imprimir exclusivamente strings. Nesse caso, tudo o que
                for colocado entre elas, será interpretado pelo PHP apenas como uma string. Não é possível imprimir o valor
                de variáveis utilizando aspas simples, pois o PHP entenderá apenas a string e não o valor contido na variável 
                questão. Mesmo assim, caso utilizado em um comando <code>echo</code>, o PHP interpreta as tags HTML informadas, 
                conforme exemplificado abaixo:
            </p>
            <h4 style="font-weight: bold;">Exemplo de uso das <code>aspas simples ('')</code></h4>
            <img src="img/aspas_simples.png" alt="Exemplo de uso das aspas simples"><br><br>
            <h5>Resultado:</h5>
            <code>
                <?php
                    echo 'Esse texto está entre aspas simples<br>';
                    $nome = 'Gabriel';
                    echo 'Meu nome é $nome';
                ?>
            </code>
        </div>
        <hr>
        <div id="aspas_duplas">
            <h2 style="font-weight: bold;">Aspas simples</h2>
            <p>
                Diferentente das aspas simples, as informações colocadas entre aspas duplas são interpretadas de forma
                "especial", isso por que caso seja colocada alguma variável, seu valor será impresso, ao invés do nome
                que identifica a variável, como ocorre com as aspas simples. O uso das aspas simples pode ser visto
                no exemplo abaixo.
            </p>
            <h4 style="font-weight: bold;">Exemplo de uso das <code>aspas duplas ("")</code></h4>
            <img src="img/aspas_duplas.png" alt="Exemplo de uso das aspas duplas"><br><br>
            <h5>Resultado:</h5>
            <code>
                <?php
                    $nome = "Gabriel";
                    $idade = 20;
                    echo "Meu nome é $nome e eu tenho $idade anos de idade";
                ?>
            </code>
        </div>
    </div>
</body>
</html>