<!doctype html>
<html lang="pt-br">
<!-- para acessar o projeto, habilite o Apache no XAMPP 
    Abra a URL http://localhost/login/ no navegador firefox azul-->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sistema de Login</title>
    <style>
        #alerta,
        #caixaSenha,
        #caixaRegistro {
            display: none;
        }
    </style>
</head>

<body class="bg-dark">
    <!-- Fundo escuro -->

    <main class="container mt-4">
        <section class="row">
            <div class="col-lg-4 offset-lg-4 " id="alerta">
                <div class="alert alert-success text-center">
                    <strong class="resultado">
                        seguraaa o tchannn
                    </strong>
                </div>
            </div>
        </section>
        <!-- Formulario de login -->
        <section class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaLogin">
                <h2 class="text-center mt-2">
                    Entrar no Sistema
                </h2>
                <form action="#" method="post" class="p-2" id="formLogin">
                    <div class="form-group">
                        <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome de Usuário" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="password" name="senhaUsuario" id="senhaUsuario" placeholder="Senha" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom checkbox">

                            <input type="checkbox" nome="lembrar" id="lembrar" class="custom-control-input">

                            <label for="lembrar" class="custom-control-label">
                                Lembrar de Mim
                            </label>

                            <a href="#" class="float-right" id="btnEsqueci">
                                Esqueci a Senha!
                            </a>

                        </div>

                    </div>

                    <div class="form-group">
                        <input type="submit" value=":::ENTRAR:::" name="btnEntrar" class="btn btn-info btn-block">
                    </div>

                    <div class="form-group">
                        <p class="text-center">
                            Novo Usuário? <a href="#" id="btnRegistrarNovo">
                                Registre-se aqui!
                            </a>
                        </p>
                    </div>

                </form>
            </div>
        </section>
        <!-- final da Seção de Login-->

        <!-- Formuário de Recuperação de Senha -->
        <section class="row mt-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaSenha">
                <h2 class="text-center mt-2">
                    Gerar Nova Senha
                </h2>

                <form action="#" method="post" id="formSenha" class="p-2">
                    <div class="form-group">
                        <small class="text-muted">
                            Para gerar uma nova senha, digite o seu e-mail. Clique no link gerado.
                        </small>
                    </div>

                    <div class="form-group">
                        <input type="email" nome="emailGerarSenha" id="emailGerarSenha" class="form-control" placeholder="E-mail de Recuperação de Senha">
                    </div>

                    <div class="form-group">
                        <input type="submit" value=":::Gerar:::" name="btnGerar" id="btnGerar" class="btn btn-info btn-block">
                    </div>

                    <div class="form-group">
                        <p class="text-center">
                            já registrado?
                            <a href="#" id="btnJaRegistrado">
                                Entrar por aqui.
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </section>
        <!--Fim da Seção de Recuperação de Senha--->
        <!-- Inicio do formulário de cadastro de novos usuários -->

        <section class="row mt-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaRegistro">
                <h2 class="text-center mt-2">Registra-se</h2>
                <form action="#" method="post" class="p-2" id="formRegistro">
                    <div class="form-group">
                        <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control" placeholder="Nome Completo">
                    </div>
                    <!-- nome -->
                    <div class="form-group">
                        <input type="text" nome="nomeUsuario" id="nomeUsuario" class="form-control" placeholder="Nome Usuario">
                    </div>
                    <!-- email -->
                    <div class="form-group">
                        <input type="text" nome="emailUsuario" id="emailUsuario" class="form-control" placeholder="E-mail">
                    </div>
                    <!-- senha -->
                    <div class="form-group">
                        <input type="password" nome="senhaUsuario" id="senhaUsuario" class="form-control" placeholder="Senha">
                    </div>
                    <!-- confirmar -->
                    <div class="form-group">
                        <input type="password" nome="senhaUsuarioConfirmar" id="senhaUsuarioConfirmar" class="form-control" placeholder="Senha Confirmação">
                    </div>
                    <!-- butaozin -->
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="concordar" id="concordar" class="custom-control-input">
                            <label for="concordar" class="custom-control-label">Eu concordo com<a href="#"> os termos e condições.</a></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value=":::Registrar:::" name="btnRegistrar" id="btnRegistrar" class="btn btn-info btn-block">
                    </div>

                    <div class="form-group">
                        <p class="text-center">
                            já registrado?
                            <a href="#" id="btnJaRegistrado2">
                                Entrar por aqui.
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </section>

        <!-- Final do formulário de cadastro de novos usuários -->





    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        //código jQuery para mstrar e tirar os formulários
        $(function() {
            $("#btnEsqueci").click(function() {
                $("#caixaLogin").hide(); //Ocultar login
                $("#caixaSenha").show(); //Mostrar nova senha
            });

            $("#btnJaRegistrado").click(function() {
                $("#caixaSenha").hide(); // ocultar gerar nova senha
                $("#caixaLogin").show(); //mostrar login
            });

            $("#btnRegistrarNovo").click(function() {
                $("#caixaLogin").hide(); //Ocultar
                $("#caixaRegistro").show();
            });

            $("#btnJaRegistrado2").click(function() {
                $("#caixaLogin").show(); //Ocultar
                $("#caixaRegistro").hide();
            });


        });
    </script>
</body>

</html>