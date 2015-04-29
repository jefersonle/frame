<html>
    <head>
        <title>Editar Produto</title>
    </head>
    <body>
        <h1>Editar Produto</h1>
        <form action="index.php?controlador=produto&acao=update&id=<?=$_GET['id']?>" method="POST">
            <p>
                Nome:<input type="text" name="nome" value="<?=$data['nome']?>" />
            </p>
            <p>
                Modelo <input type="text" name="modelo" value="<?=$data['modelo']?>"/>
            </p>
            <p>
                Peso <input type="text" name="peso" value="<?=$data['peso']?>"/>
            </p>
            <p>
                Preço <input type="text" name="preco" value="<?=$data['preco']?>"/>
            </p>
            <p>
                Descrição <textarea name="descricao"><?=$data['descricao']?></textarea>
            </p>
            <input type="hidden" name="id" value="<?=$_GET['id']?>" />
            <input type="submit" name="salvar" value="Alterar"/>
        </form>
        <p><a href="index.php?controlador=produto&acao=listar">Lista de Produtos</a></p>
    </body>
</html>
