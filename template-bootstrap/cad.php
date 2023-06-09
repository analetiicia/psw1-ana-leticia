<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="cad.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #EBEDEF;">

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="http://localhost/psw/aula-11-04/home.php">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">SOBRE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">CONTATO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/psw/aula-11-04/cad.php">CADASTRE-SE</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="">
              <button class="btn btn-secondary" type="button">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
   
      
<div class="container mt-3" style="background-color:#fff; width:700px; height: 500px; border-radius: 10px;" >
    <h3 style=" margin-top:130px; margin-bottom:60px; text-align: center; font-family: Arial, Helvetica, sans-serif; padding-top: 40px;">REALIZE SEU CADASTRO ABAIXO:</h3>
    <form action="cad.php" method="get" style="width:500px; margin-left:90px;">
      
      <div class="row">
    <input type="email" class="form-control" placeholder="Digite seu Email" name="email" style="margin-bottom:10px">
    <input type="password" class="form-control" placeholder="Digite sua Senha" name="pswrd" style="margin-bottom:10px">
    <input type="text" class="form-control" placeholder="Digite sua Turma" name="turma" style="margin-bottom:10px">
    <input type="text" class="form-control" placeholder="Digite sua Matrícula" name="matricula" style="">

      <div class="form-check mb-3">
        <label class="form-check-label" style="margin-left: 2px">
          <input class="form-check-input" type="checkbox" name="remember"> Lembrar de mim
        </label>
      </div>
  
      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal" style="border-radius:20px;">Enviar </button>
      
   
      <!-- The Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title" style="text-align: center; font-family: Arial, Helvetica, sans-serif;">Seu Cadastro</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
            <p>Usuário cadastrado com sucesso!</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Finalizar</button>
            </div>
      
          </div>
        </div>
</div>
    </form>
</div>

</body>
</html>

<?php

?>