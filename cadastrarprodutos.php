<?php
$conexao=mysqli_connect("localhost","root","","tabseries");
$nome_serie=$_POST['nome_serie'];
$atriz_principal=$_POST['atriz_principal'];
$ator_principal=$_POST['ator_principal'];
$qtd_temporadas=$_POST['qtd_temporadas'];
$total_episodios=$_POST['total_episodios'];
echo "{$titulo}-{$atriz}-{$ator}-{$qtd}-{$total}";
$sql_inserir="insert into tabseries('nome_serie','atriz_principal','ator_principal','qtd_temporadas','total_episodios') values ('{$nome_serie}','{$atriz_principal}','{$ator_principa}',{$qtd_temporadas},{$total_episodios})";
mysqli_query($conexao, $sql_inserir);
mysqli_close($conexao);
?>                