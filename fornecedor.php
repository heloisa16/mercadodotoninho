<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Cadastro do Fornecedor</h1>
    <hr> 
    <br>
    <form method="post" id="cadastro" action="cadastrarprodutos.php">
    <fieldset id="cad">
        <legend> Fornecedor</legend>
        <p><label for="nome">nome:</label><input type="text" name="categoria" id="categoria" size="60" maxlenght="100" placeholder="Digite a Categoria do produto"></p>

        <p><label for="endereco">endereco:</label><input type="text" name="endereco" id="endereco" size="30" maxlenght="100" placeholder="Digite o seu endereço"></p>

        <p><label for="cnpj">CNPJ:</label><input type="number" name="cnpj" id="cnpj" size="10" maxlenght="100" placeholder="Digite o seu cnpj"></p>

</fieldset>
<br>
<hr>
<input type="submit" value="Cadastrar">
<hr>
</form>

    </body>
</html>