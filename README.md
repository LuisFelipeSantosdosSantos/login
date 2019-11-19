# login
Sistema de Login em PHP e Javascript

 # aula11 -19/11/2019
 Geração de nova senha
 # aula10 - 18/11/2019
 preparação para geração de uma nova senha.
 # aula09 - 22/10/2019
  - auntentição do usuario completa
  - permissão de navegação atraves da SESSÃO
  - lembrar senha e usuario com COOKIES
 # aula08 - 21/10/2019
 - Auntenticação do usuario e permissão de acesso ao perfil.php
 - conceito de sessão
 
 # aula07 - 18/10/2019
 - Inicio da autenticação e entrada no sistema
 # aula06 - 👨🏽‍🏫15/10/2019
- Persistencia de dados no banco de dados👨🏽

 # aula05 - 04/10/2019
  -   Envio de dados no Front-end para o Beck-End,
      métodos GET e POST. 

 # aula04 - 01/10/2019
   - Validação COM HTML5
   - Validação dos campos com jQuerry validate
   
 # aula03 - 30/09/2019
  - formulário de cadastro de novos usuários
  - Formulário de Cadastro de novos usúarios
  - ~Validação dos campos com jQuerry validate~
  - Ocultar e Mostrar os formulários com jQuerry~
 
 # aula02 - 24/09/2019
 Layout Bootsrap para os formulários 
  - formulário de login
  - formulário de Recuperação de senha
  - ~formulário de cadastro de novos usuários~ 

 # aula01 - 23/09/2019
  🌺🌹  começo a primavera⛅️🍂 
  Aula inicial, configuração do projeto no github.
  Ecriação do passo a passo.
 
 ---
 # passo a passo em todo início de aula
 
## Habilitar o Proxy
  Tecla Windows - Abrir a janela Prompt de Comando
  Copie e cole a linha abaixo - selecione e pressione as teclas Ctrl C

  git config --global http.proxy http://10.1.21.254:3128

  Pressione Enter
  
  ## clonar o repositório **login** na pasta **c:\xampp\htdocs**
   - tecla windows - abrir o github desktop
   - clique em *sign in to github.com*
   - digite seu login e senha do github
   - caso necessário , apos o login , digite seu nome e email e clique em continue*
   - selecione o repositorio **login** e logo abaixo aperte no botao azul *clone....*
   - aperte no butao *choose* e encontre no disco local c: a pasta Xampp e dentro dela htdocs
   - selecione  a pasta e confira se o *local path* foi *C:\xampp\htdocs\login*
   - aperte clone
    
   ## Habilitar o servidor web **Apache** e o servidor **MySQL**
   - tecla windows - abrir o xammp control panel
   -clique em start para apache
   -clique em start para MySQL
   - verifique se apareceu porta 80 apache e 3306 MySQL
   - verifique  se ficou verde o apache e MySQL
    
## testar se esta pegando
   -abra o firefox azul e digite http://localhost/login
    
## abrir o visual studio code 
   - *abrir pasta* no VS code escolha C:\xampp\htdocs\login

## Importa o banco de dados
- Acessar no navegador http://localhost/phpmyadmin
- Clicar em Importar
- Selecionar o arquivo 127.0.0.1.sql e clique em executar
- o banco deve ter sido importado corretamente
