<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="css/estilo.css" type="text/css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<title>Página de Login</title>
  </head>

  <body>

 <h3 class="login"> <label for="login">Registro de usuário</label></h3>
 <form name="formLogin" method="post" action="../arquivos/usuario/insert_usuario.php">

<h3 class="usuario"> <label for="usuario">Usuário:</label></h3>
<input class="form-control" type="text" name="usuario" placeholder="insira seu nome">
      <br></br>
<h3 class="senha"> <label for="senha">Senha:</label></h3>
<input class="form-control" type="password" name="senha" placeholder="insira sua senha">
  
   <input class="btn btn-success" type="submit" value="Entrar">
    
    <h3 class="senha"><?php ;if(isset($_GET['erro'])) {
          echo $_GET['erro'];
        }?></h3>;
        
</body>
</html>
