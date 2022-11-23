<?php


require_once('conexao.php');

$id = $_POST['codigo'];
$nome = $_POST['txt_aluno'];
$curso = $_POST['txt_curso'];
$matricula = $_POST['txt_matricula'];

$sql_atualizar = mysqli_query($con , "UPDATE tb_alunos SET nome = '$nome', curso = '$curso', matricula = '$matricula' WHERE id= '$id' "); 

if ($sql_atualizar == true) {

  echo "<script>
  alert('DADOS ATUALIZADO COM SUCESSO!');
  window.location.href='principal.php';
    </script> ";
}
else {
  
  echo "<script>
  alert('FALHA AO ATUALIZAR!');
  window.location.href='editar.php';
    </script> ";
}

?>