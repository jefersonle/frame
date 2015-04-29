<html>
    <head>
        <title>Cadastrar Produto</title>
    </head>
    <body>
        <h1>Cadastro de Produtos</h1>
        <form action="index.php?controlador=produto&acao=salvar" method="POST">
            <p>
                Nome:<input type="text" name="nome" />
            </p>
            <p>
                Modelo <input type="text" name="modelo"/>
            </p>
            <p>
                Peso <input type="text" name="peso"/>
            </p>
            <p>
                Preço <input type="text" name="preco"/>
            </p>
            <p>
                Descrição <textarea name="descricao"></textarea>
            </p>
            <input type="submit" name="salvar" value="Salvar"/>
        </form>

        <p><a href="index.php?controlador=produto&acao=listar">Lista de Produtos</a></p>
        <p><a href="index.php">Home</a></p>
    </body>
</html>
