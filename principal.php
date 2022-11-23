<?php 

include_once('conexao.php');

?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
  </head>
  

  <body>
  <font face="Verdana"> 
    <center>
      <br /><br />
      <h1>CADASTRO DE ALUNOS</h1>
      <hr />
      <br />
      <a href="cadastroAluno.html"><button>+Incluir</button></a>
      <br /><br />
      <table cellpadding = "8px"  rules="all">
        <thead>
          <tr bgcolor="#DCDCDC">
            
            <th>ID</th>
            <th>NOME</th>
            <th>MATRICULA</th>
            <th>CURSO</th>
            <th>EDITAR</th>
            <th>EXCLUIR</th>
          </tr>
        </thead>

        <tbody>

          <?php 
          
          $sql_consulta = mysqli_query($con, "SELECT *FROM tb_alunos");

          while ($dados = mysqli_fetch_array($sql_consulta)) {

            ?>

            <tr>
            <td> <?= $dados[0] ?> </td>
            <td> <?= $dados[1] ?> </td>
            <td> <?= $dados[2] ?> </td>
            <td> <?= $dados[3] ?> </td>

            <td bgcolor="#87CEEB"><a href="editar.php?codigo=<?= $dados[0] ?> ">Editar</a></td>
            <td bgcolor="#F08080"><a href="excluir.php?codigo=<?= $dados[0] ?> ">Excluir</a></td>

            </tr>

          <?php }

            ?>

        </tbody>
      </table>
      <br><br>
      
   <hr>
    <footer>
      <a href="index.html">Tela Inicial</a>
    </footer>
     </center>
    </font>
  </body>
</html>
