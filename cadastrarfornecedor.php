<?php
$conexao=mysqli_connect("localhost","root","","mercadodotoninho");
$categoria=$_POST['nome'];
$marca=$_POST['endereco'];
$descricao=$_POST['descricao'];
$preco=$_POST['cnpj'];
$qtd=$_POST['qtd'];
echo "{$nome}-{$endereco}-{$descricao}-{$cnpj}";
$sql_inserir="insert into tabfornecedor(nome,endereco,descricao,cnpj,qtd) values ('{$nome}','{$endereco}','{$descricao}',{$cnpj},{$qtd})";
mysqli_query($conexao, $sql_inserir);
mysqli_close($conexao);
?>                