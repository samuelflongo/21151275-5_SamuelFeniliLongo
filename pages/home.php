<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8" />
        <title>Caseiro de Verdade - Doces Caseiros</title>
        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/estilo.css" type="text/css" />
    </head>

    <body>
        <h1>Conheça nossos saborosos Doces Caseiros</h1>

                        
        <?php

            include ("./dados/produtos.php");

            foreach($produto as $value) {
        ?>
                <div class="card">
                    <a href="index.php?pagina=pages/descricao_produto.php&id=<?=$value["nome"];?>"><img class="foto_produto" src="<?=$value['link'];?>"></a>
                    <p class="nome_produto"> <?php echo $value["nome"]; ?> </p>
                    <p class="detalhe">clique na foto para saber mais</p>
                </div>
        <?php
             }
        ?>
      

    </body>

</html>