<?php

if(isset($_POST['action'])){

    if($_POST['action'] = 'cadastro'){
        //teste se açao e igual a cadastro
        echo "\n<p>cadastro</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n</pre>";
    }else if($_POST['action'] = 'login'){
        //senao, teste se açao e login
        echo "\n<p>login</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n</pre>";

    }else if($_POST['action'] = 'senha'){
        //senao, teste se açao e recuperar senha
        echo "\n<p>senha</p>";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n</pre>";
    }else{
        header("location:index.php");

    }
}else{
    // redirecionando para inex.php , negando o acesso 
    // a esse arquivo diretamente
    header("location:index.php");
}