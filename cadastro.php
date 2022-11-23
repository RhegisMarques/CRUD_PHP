<?php


require_once('conexao.php');

$nome = $_POST['txt_aluno'];
$curso = $_POST['txt_curso'];
$matricula = $_POST['txt_matricula'];

$sql_cadastro = mysqli_query($con , "INSERT INTO tb_alunos (nome, curso, matricula) values ('$nome','$curso','$matricula')");

if ($sql_cadastro == true) {

  echo "<script>
  alert('CADASTRO REALIZADO COM SUCESSO!');
  window.location.href='principal.php';
    </script> ";
}
else {
  
  echo "<script>
  alert('FALHA NO CADASTRO!');
  window.location.href='principal.php';
    </script> ";
}

?>