<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3 PHP - Gabriel Kunz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-3">
        <h1 style="font-weight: bold;">Atividade 3</h1>
        <ul>
            <li>Pesquise e descreva qual o uso das seguintes funções PHP ou quais as funções utilizadas para as situação relatadas:</li>
        </ul>
        <hr>
    </div>
    <div class="container">
        <div id="questao1">
            <h2 style="font-weight: bold;">Como realiza conversão de dados de string para int?</h2>
            <p>
                A conversão de <code>string</code> para <code>int</code> pode ser realizada utilizando algumas funções do PHP: 
                <ul>
                    <li><a href="#cast">cast</a></li>
                    <li><a href="#intval">intval</a></li>
                </ul>
            </p>
            <h4 style="font-weight: bold;" id="cast">cast</h4>
            <p>
                O uso do <code>cast</code> ocorre quando se deseja "forçar" que determinada variável seja receba um determinado 
                tipo de dado. No PHP, o tipo da variável depende do tipo do dado atribuído à ela, e nesse momento o <code>cast</code>
                pode ser utilizado. No PHP, o <code>cast</code> é identificado por um par de parênteses com o tipo de dado desejado, antes da 
                variável ou do dado em questão. Abaixo, pode se verificar um exemplo de uso do cast, identificando com o <code>var_dump()</code>
                o tipo das variáveis.
            </p>
            <h5 style="font-weight: bold;">Exemplo de <code>cast</code></h5>
            <img src="img/cast.png" alt="Exemplo de uso do cast"><br><br>
            <h5>Resultado:</h5>
            <code>
                <?php
                    $string = '23658';
                    var_dump($string);
                    echo "<br>";
                    $integer = (int) $string;
                    var_dump($integer) 
                ?>
            </code>
            <br><br><br>
            <h4 style="font-weight: bold;" id="intval">intval()</h4>
            <p>
                A função <code>intval()</code> do PHP retorna o valor em <i>integer</i> de determinada variável, conforme 
                os parâmetros passados para a função. O primeiro parâmetro, obrigatório, é o valor ou variável que deverá
                ser convertido. O segundo parâmetro, não obrigatório, é base de conversão que será aplicada. Por padrão, caso 
                não informado, o valor é convertido em base decimal. O exemplo de uso da função <code>intval()</code> pode ser 
                vista abaixo:
            </p>
            <h5 style="font-weight: bold;">Exemplo de <code>intval</code></h5>
            <img src="img/intval.png" alt="Exemplo de uso do intval()"><br><br>
            <h5>Resultado:</h5>
            <code>
                <?php
                    $string = '287592';
                    var_dump($string);
                    echo "<br>";
                    $integer = intval($string);
                    var_dump($integer)
                ?>
            </code>
        </div>
        <hr>
        <div id="questao2">
            <h2 style="font-weight: bold;">O que faz os comandos PHP unlink, fwrite e fclose?</h2>
            <h4 style="font-weight: bold;" id="unlink">unlink()</h4>
            <p>
                A função <code>unlink()</code> faz a deleção do arquivo passado em seus parâmetros.
            </p>
            <h5 style="font-weight: bold;">Exemplo de <code>unlink()</code></h5>
            <img src="img/unlink.png" alt="Exemplo de uso de unlink()">
            <code>
                <?php
                    $arquivo = '../diretorio/arquivo.txt';
                    unlink($arquivo);
                ?>
            </code>
            <br><br><br>
            <h4 style="font-weight: bold;" id="fwrite">fwrite()</h4>
            <p>
                A função <code>fwrite()</code> escreve determinado texto no arquivo selecionado nos parâmetros do arquivo.
                É utilizada após o uso da função <code>fopen()</code>, que abre o arquivo para leituras e escritas.
                O primeiro parâmetro da função é o arquivo que será modificado, o segundo parâmetro é a string que será 
                escrita no arquivo, e o terceiro parâmetro (não obrigatório) é o tamanho, ou seja, quando atingido esse tamanho
                a escrita será interrompida.
            </p>
            <h5 style="font-weight: bold;">Exemplo de <code>fwrite()</code></h5>
            <img src="img/fwrite.png" alt="Exemplo de uso de fwrite()">
            <code>
                <?php
                    $string = 'Essa é uma string que será escrita em um arquivo .txt, utilizando o fwrite()';
                    $arquivo = '../diretorio/arquivo.txt';
                    //fwrite($arquivo, $string);
                ?>
            </code>
            <br><br><br>
            <h4 style="font-weight: bold;" id="fclose">fclose()</h4>
            <p>
                A função <code>fclose()</code> fecha determinado arquivo, previamente aberto por <code>fopen()</code>.
                Após fechado, um arquivo não consegue mais ser acessado e editado por <code>fwrite()</code>, a menos que
                seja novamente aberto.
            </p>
            <h5 style="font-weight: bold;">Exemplo de <code>fclose()</code></h5>
            <img src="img/fclose.png" alt="Exemplo de uso de fclose()">
            <code>
                <?php
                    $arquivo = '../diretorio/arquivo.txt';
                    //fclose($arquivo);
                ?>
            </code>
        </div>
        <hr>
        <div id="questao3">
            <h2 style="font-weight: bold;">
                Converta a string: "produto1; produto2; produto3; produto4; produto5;
                produto6"; para um array, este array terá um limite máximo de 4 valores,
                após mostre o resultado, utilizando o comando adequado que permite
                visualizar que aquele valor string passou a ser do tipo array, conforme as
                diferenças levantadas na atividade 01.
            </h2>
            <h5 style="font-weight: bold;">Solução:</h5>
            <img src="img/explodeSlice.png" alt="String para array">
            <h5>Resultado:</h5>
            <code>
                <?php
                    $string = "produto1; produto2; produto3; produto4; produto5; produto6";
                    var_dump($string);
                    echo "<br>";
                    $array = array_slice(explode(';', $string), 0, 4);
                    var_dump($array);
                ?>
            </code>
        </div>
        <hr>
        <div id="questao4">
            <h2 style="font-weight: bold;">
                Faça um exemplo utilizando o try, catch e finally. Force uma exceção e
                mostre uma mensagem com a determinada exceção capturada.
            </h2>
            <h5 style="font-weight: bold;">Solução:</h5>
            <img src="img/tryCatchFinally.png" alt="Try, Catch e Finally">
            <h5>Resultado:</h5>
            <code>
                <?php
                    function dividir($dividendo, $divisor) {
                        if ($divisor == 0) {
                            throw new Exception('é uma divisão por zero');
                        }
                        $resultado = $dividendo / $divisor;
                        return $resultado;
                    };

                    try {
                        $dividendo = 5;
                        $divisor = 0;
                        echo "A conta a ser realizada é $dividendo / $divisor...<br>";
                        echo dividir(5,0)."<br/>";    
                    } catch (Exception $e) {
                        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
                    } finally {
                        echo "<br> Finalizado.";
                    }
                ?>
            </code>
        </div>
    </div>  
</body>
</html>