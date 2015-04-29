<html>
    <head>
        <title>Listagem de Produto</title>
    </head>
    <body>
        <h1>Listagem de Produtos</h1>
        <table border="1">
            <tr>    
                <td>
                    Nome
                </td>
                <td>
                    Modelo
                </td>
                <td>
                    Peso
                </td>
                <td>
                    Preço
                </td>
                <td>
                    Descrição
                </td>
                <td>
                    Ver
                </td>
                <td>
                    Editar
                </td>
                <td>
                    Excluir
                </td>
            </tr>
            
            <?php
                foreach($data as $item){
            ?>
            <tr>    
                <td>
                    <?=$item['nome']?>
                </td>
                <td>
                    <?=$item['modelo']?>
                </td>
                <td>
                    <?=$item['peso']?>
                </td>
                <td>
                    <?=$item['preco']?>
                </td>
                <td>
                    <?=$item['descricao']?>
                </td>
                <td>
                    <a href="index.php?controlador=produto&acao=recover&id=<?=$item['id_produto']?>">Ver</a>
                </td>
                <td>
                    <a href="index.php?controlador=produto&acao=update&id=<?=$item['id_produto']?>">Editar</a>
                </td>
                <td>
                    <a href="index.php?controlador=produto&acao=delete&id=<?=$item['id_produto']?>">Excluir</a>
                </td>
            </tr>

            <?php
                }
            ?>

        </table>
        <p><a href="index.php">Home</a> </p>     
        </form>
    </body>
</html>