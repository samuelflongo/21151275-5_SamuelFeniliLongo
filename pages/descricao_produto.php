<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8" />
        <title>Caseiro de Verdade - Doces Caseiros</title>
        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/estilo.css" type="text/css" />
    </head>

    <body>
                  
        <?php

            include ("./dados/produtos.php");

            if (isset($_GET["id"]) && !empty($_GET["id"])) {
                $id = $_GET["id"];
            } else {
                return 0;
            }

            foreach($produto as $value) {
                if ($value["nome"] == $id) {                
        ?>
                            
                    
                            <p class="nome_descricao"> <?=$value["nome"];?></p>

                            <table class="tabela_descricao">
                                <tr>
                                    <td>
                                        <figure class="figura_descricao">
                                        <img class="foto_descricao" src="<?=$value['link'];?>"></img>
                                        </figure>
                                    </td>

                                    <td>
                                        <p class="descricao_descricao">Origem<br> <?=$value["descricao"];?></p>
                                        <p class="ingredientes_descricao">Ingredientes<br> <?=$value["ingredientes"];?></p>
                                    </td>

                                </tr>

                            

                            <div class="div_descricao">                                
                                
                            </div>

                            </table>
                    <?php
                } else {
                    //
                    }

            }
        ?>
     
    </body>

</html>