<?php 

include_once('conexao.php');

$id = $_GET['codigo'];

$sql_consulta = mysqli_query($con , "SELECT *FROM tb_alunos WHERE id = '$id' ");

$dados = mysqli_fetch_array($sql_consulta);

?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar</title>
  </head>

  <body>
  <font face="Verdana"> 
    <center>

      <h1>EDITAR DADOS</h1>
      <hr />

      <form method="POST" action="atualizar.php">
        <br />
        
        <input type="hidden" name="codigo" value='<?=$dados[0] ?>'>

        Nome: <br />
        <input type="text" name="txt_aluno" value='<?=$dados[1] ?>'><br>
        Curso: <br/>
        <input type="text" name="txt_curso" value='<?=$dados[2] ?>'><br>
        Matricula: <br />
        <input type="number" name="txt_matricula" value='<?=$dados[3] ?>'><br> <br>
        
        <input type="submit" value="Atualizar" /><br><br>

        <a href="principal.php">Voltar</a>
      </form>
      
    </center>
  </font>
  </body>
</html>
