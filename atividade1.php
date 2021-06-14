<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 PHP - Gabriel Kunz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body style="background-color: #f2f2f2;">
    <div class="container pt-3">
        <h1 style="font-weight: bold;">Atividade 1</h1>
        <ul>
            <li>Descreva e explique a diferença dos comandos echo, var_dump, print_r e print que são utilizados para imprimir o conteúdo em uma página.</li>
            <li>Crie um exemplo de cada comando.</li>
        </ul>
        <hr>
    </div>
    <div class="container">
        <div id="echo">
            <h2 style="font-weight: bold;">echo</h2>
            <p style="text-align: justify;">
                O método <code>echo</code> exibe as string informadas na sua sequência. Não é classificado como função,
                e por esse motivo não é obrigatório informar seus parametros entre parenteses, podendo ser apenas entre aspas
                simples ou duplas, após sua declaração.<br>
                Caso seja passado uma variável como parâmetro do <code>echo</code>, o resultado será o valor que a variável
                representa no momento.<br>
                Outra fato importante sobre o <code>echo</code>, é que se passar uma string com estrutura HTML, ao ser exibido
                em tela, o HTML será "interpretado", podendo dessa forma gerar layouts de tela dinâmicos.
                <br>
            </p> 
            <h4 style="font-weight: bold;">Exemplo de <code>echo</code></h4>
            <img src="img/echo.png" alt="Exemplo de Echo"><br><br>
            <h5>Resultado:</h5>
            <code>
                <?php
                    echo 'Uma string qualquer!<br>';
                    $nome = 'Gabriel';
                    echo $nome;
                ?>
            </code>
        </div>
        <hr>
        <div id="var_dump">
            <h2 style="font-weight: bold;">var_dump()</h2>
            <p style="text-align: justify;">
                A função <code>var_dump()</code> mostrará uma representação estruturada sobre uma ou mais expressões, 
                expressões essas que são passadas nos parâmetros da função, incluindo o tipo e o valor dos parâmetros. 
                No caso de arrays e objetos, a função realiza um acesso recursivo com valores identados na estrutura,
                para apresentar toda as informações do parâmetro em questão.
                É amplamente utilizado para verificar se o tipo e valor de determinada variável está de acordo com o esperado.
            </p>
            <h4 style="font-weight: bold;">Exemplo de <code>var_dump()</code></h4>
            <img src="img/var_dump.png" alt="Exemplo de var_dump()"><br><br>
            <h5>Resultado:</h5>
            <code>
                <?php
                    $frutas = ['maça', 'banana', 'bergamota'];
                    $cidade = 'Pinhalzinho';
                    $idade = 20;
                    var_dump($frutas);
                    echo "<br>";
                    var_dump($cidade);
                    echo "<br>";
                    var_dump($idade);
                    echo "<br>";
                ?>
            </code>
        </div>
        <hr>
        <div id="print_r">
            <h2 style="font-weight: bold;">print_r()</h2>
            <p style="text-align: justify;">
                De acordo com a própria documentação do PHP, o <code>print_r()</code> é exibe informações sobre uma
                variável em uma maneira que seja legível para humanos.  Se forem fornecidos string, integer ou float, 
                o próprio valor será impresso. Se for fornecido um array, valores serão representados em um formato que 
                mostra chaves e elementos. Notação similar é utilizada para objetos. A principal diferença do 
                <code>print_r()</code> para o <code>var_dump()</code>, é que no caso do <code>print_r()</code> não são
                exibidos os dados de tipo e tamanho da variável.
            </p>
            <h4 style="font-weight: bold;">Exemplo de <code>print_r()</code></h4>
            <img src="img/print_r.png" alt="Exemplo de print_r()"><br><br>
            <h5>Resultado:</h5>
            <code>
                <?php
                    $carros = ['Celta', 'Palio', 'Uno', 'Corsa'];
                    $banda = 'Calipso';
                    $cotacaoDolar = 5.63;
                    print_r($carros);
                    echo "<br>";
                    print_r($banda);
                    echo "<br>";
                    print_r($cotacaoDolar);
                    echo "<br>";
                ?>
            </code>
        </div>
        <hr>
        <div id="print">
            <h2 style="font-weight: bold;">print</h2>
            <p style="text-align: justify;">
                Assim como o <code>echo</code>, o <code>print</code> na verdade não é uma função real 
                (ela é uma construção da linguagem), dessa forma você não precisa usar parênteses com sua lista de argumentos.
                As principais diferenças para <code>echo</code> são que <code>print</code> aceita apenas um único argumento e sempre retorna 1.
            </p>
            <h4 style="font-weight: bold;">Exemplo de <code>print</code></h4>
            <img src="img/print.png" alt="Exemplo de print"><br><br>
            <h5>Resultado:</h5>
            <code>
                <?php
                    $sobrenome = 'Senna';
                    print "O meu nome é Airton {$sobrenome}!<br>";
                ?>
            </code>
        </div>
        <hr>
        <h4>Fonte das informações</h4>
        <a href="https://www.php.net/manual/pt_BR">Manual do PHP em Português</a>
    </div>
</body>
</html>

