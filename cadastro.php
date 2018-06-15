<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Tela de Cadastro</title>
   
      <link rel="stylesheet" href="cadastro.css">

  
</head>

<body>

  <div class="login">
  <h2 align="center">Cadastro</h2>
  <form id="cadastro" name="cadastro" method="post" action="cadastrando.php">
  <fieldset>
      <input type="text" name="nome" style="color:#61e5ab" placeholder="Nome" required /><br>
      <input type="text" name="sbnome" style="color:#61e5ab" placeholder="Sobrenome" required /><br>
      <input type="email" name="email" style="color:#61e5ab" placeholder="E-mail" required /><br>
      <input type="password" name="senha" style="color:#61e5ab" placeholder="Senha" required /><br>
      <input type="password" name="consenha" style="color:#61e5ab" placeholder="Confirme a senha" required />
  </fieldset>
  <input type="submit" value="Cadastrar"/>
  </form>
  <div class="utilities">
    <a  href="login.php" >Voltar ao login&rarr;</a>
  </div>

</body>

</html>
