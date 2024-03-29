<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-color: #7B8F82;
            height: 100px;
            width: 300px;
            border-radius: 15px;
            margin-top: 100px;
            padding: 10px;
        }
    </style>
</head>
<body style="background-color: #DCDCDC; padding: 0; height: 100vh; width: 100%; font-family: 'Arial Black', Gadget, sans-serif; color:#DCDCDC; display: flex; justify-content: center; align-items:center; flex-direction: column; margin: 0">

    <header style = "background-color: #7B8F82; height: 100px; margin: 0; display: flex; justify-content: center; align-items: center;  font-size: larger; width: 100%;  padding: 0;">
    <h2 style="">CADASTRO DE ALUNO</h2> 
    </header>
<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
      
        $nome = $_GET["nome"];
        $endereco = $_GET["endereco"];
        $idade = $_GET["idade"];
        //$statusaluno = $_GET["statusaluno"];
        $matricula = $_GET["matricula"];

        $datadenascimento = $_GET["datadenascimento"];


        ##codigo SQL
        $sql = "INSERT INTO aluno(nome,endereco,idade, matricula, datadenascimento ) 
                VALUES('$nome','$endereco','$idade', '$matricula', '$datadenascimento')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo "<div>";
                echo " <strong>OK!</strong> O aluno
                $nome foi cadastrado com sucesso!!!"; 
                echo "</div>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $endereco = $_POST["endereco"];

    $id = $_POST["id"];
   
      ##codigo sql
    $sql = "UPDATE  aluno SET nome= :nome, idade= :idade, endereco= :endereco WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo "<div>";
            echo " <strong>OK!</strong> o aluno
             $nome foi alterado com sucesso."; 
            echo "</div>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `aluno` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo "<div>"; 
            echo " <strong>OK!</strong> o aluno
             $id foi excluido com sucesso."; 
             echo "</div>";

        }

}

        
?>


<button class="button" style = "height: 40px; width: 100px; background-color: #7B8F82 ; border-radius: 10px; border-color: transparent;  text-decoration: none; color: white; font-family: 'Arial Black', Gadget, sans-serif; margin-top: 50px; "><a href="index.php">Página Inicial</a></button>
<button class="button" style = "height: 40px; width: 100px; background-color: #7B8F82 ; border-radius: 10px; border-color: transparent;  text-decoration: none; color: white; font-family: 'Arial Black', Gadget, sans-serif; margin-top: 50px; "><a href="listaaluno.php">Lista de Alunos</a></button>


</body>
</html>


