<html>
    <head>
        <title>Ver Produto</title>
    </head>
    <body>
        <h1>Ver Produto</h1>
        <form action="index.php?controlador=produto&acao=salvar" method="POST">
            <p>
                Nome: <?=$data['nome']?>
            </p>
            <p>
                Modelo: <?=$data['modelo']?>
            </p>
            <p>
                Peso: <?=$data['peso']?>
            </p>
            <p>
                Preço: <?=$data['preco']?>
            </p>
            <p>
                Descrição:<?=$data['descricao']?>
            </p>

            <p>
                <a href="index.php?controlador=produto&acao=update&id=<?=$data['id_produto']?>">Editar</a>
            </p>

            <p>
               <a href="index.php?controlador=produto&acao=listar">Lista de Produtos</a>
            </p>
        </form>
    </body>
</html>
