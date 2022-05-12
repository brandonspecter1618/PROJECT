<?php

/*

A função strip_tags() é uma função embutida em PHP 
que é usada para retirar uma string de HTML e tags PHP. 
Esta função retorna uma string com todos os bytes NULL, HTML e 
tags PHP retirados de um $str dado.

*/

/*

função trim () remove ambos os lados de uma seqüência de caracteres 
em branco ou outros caracteres predefinidos. funções relacionadas: 
LTRIM () - Remova o lado esquerdo de uma seqüência de caracteres em 
branco ou outros caracteres predefinidos.

echo trim('     Removendo Espaços     '); //Resultado: 'Removendo Espaços'


*/

/*Filter var é basicamente um meio para saber se a entrada é verdadeira
um exemplo


<?php
var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));
var_dump(filter_var('http://example.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
?>


*/


/*

Variável Dinâmica $$chave 

Com o PHP podemos criar novas variáveis definindo como o nome dessas 
o conteúdo de outra. Para isso devemos utilizar o símbolo $$ seguido 
do nome da variável que contém o nome para atribuição.

$nome = "variable";

$$nome = "Brandon Specter";

echo("<br> $variable");


*/

$erro = false;

    if(empty($_POST)){
        $erro = "Nada foi postado";
    }

    foreach($_POST as $chave => $valor){
        $$chave = trim(strip_tags($valor));
            if(empty($valor)){
                $erro = 'Existem campos em branco <br>';
            }
    }

    if(is_numeric($name) || is_numeric($lname)){
        $erro = "Não é aceito números nesse <br> campo <br>";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !$erro){
        $erro = "Envie um email válido <br>";
    }

    if( !is_numeric($phone) && !$erro){
        $erro = "O campo telefone está inválido <br>";
    }



     
echo("<p> $erro </p>");

echo("Nome: $name <br> 
Sobrenome: $lname <br> 
Birthday: $birthday <br>
Gender: $gender <br>
Email: $email <br> 
Telefone: $phone <br><br>");


?>



