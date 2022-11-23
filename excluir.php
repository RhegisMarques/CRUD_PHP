<?php

include_once('conexao.php');

$id = $_GET['codigo'];

$sql_excluir = mysqli_query($con, "DELETE FROM tb_alunos WHERE id = '$id' ");

if ($sql_excluir == true) {

  echo "<script>
  alert('EXCLUIDO COM SUCESSO!');
  window.location.href='principal.php';
    </script> ";
}
else {
  
  echo "<script>
  alert('FALHA AO EXCLUIR!');
  window.location.href='principal.php';
    </script> ";
}

?>