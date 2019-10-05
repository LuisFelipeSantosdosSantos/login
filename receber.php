<?php
#back-end
if(isset($_GET['nome'])){
    echo "\n<h1>Envio de dados metodo <em>GET<em></h1>";
    echo "\n<pre>\n";
    print_r($_GET); #Array
    echo "\n</pre>\n";

    print("\n<br><strong>Nome: </strong>");
    print("$_GET[nome]");

    print("\n<br><strong>E-mail:</strong>");
    print("$_GET[email]");

    print("\n<br><strong>Senha:</strong>");
    print("$_GET[senha]");

    print("\n<br><strong>Data de Nascimento:</strong>");
    print("$_GET[data_de_nascimento]"); 
}
//VERIFICA SE O METODO POST ESTA ENVIANDO DADOS

if(isset($_POST['nome'])){
    echo"\n<h1>Envio de dados metodo <em>POST<em></h1>";
    echo "\n<pre>\n";
    print_r($_POST);#Array
    echo "\n</pre>\n";

    print("\n<br><strong>Nome: </strong>");
    print("$_POST[nome]");

    print("\n<br><strong>E-mail:</strong>");
    print("$_POST[email]");

    print("\n<br><strong>Senha:</strong>");
    print("$_POST[senha]");

    print("\n<br><strong>Data de Nascimento:</strong>");
    print("$_POST[data_de_nascimento]"); 
}