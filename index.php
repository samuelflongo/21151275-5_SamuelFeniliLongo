<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Caseiro de Verdade - Doces Caseiros</title>
        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/estilo.css" type="text/css" />
    </head>
  
    <body>
        <header>

            <div class="faixa_superior">
            </div>

            <div class="logo">
                <img src="images/site_logo.png" height="150px">
            </div>

            <nav>
                <ul>
                    <li><a href="index.php?pagina=pages/home.php">Home</a></li>
                    <li><a href="index.php?pagina=pages/quem_somos.php">Quem Somos</a></li>
                    <li><a href="index.php?pagina=pages/contato.php">Contatos</a></li>
                    <li><a href="index.php?pagina=pages/localizacao.php">Localização</a></li>      
                
                </ul>
            </nav>
    
        </header>

        <main>
            <?php
                if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
                    $pagina = $_GET["pagina"];
                    include ($pagina);

                }  else {
                    include ("pages/home.php");
                }            
            ?>

        
        </main>



        <footer>
            
            <p class="samuel">Samuel Fenili Longo</p>
                     
             <table>                    
                <tr>
                    <td><img class="aluno" src="images\unicesumar.jpg"></img></td>
                    <td class="dados_aluno">RA 21151275-5</td>
                </tr>
                <tr>
                    <td><img class="aluno" src="images\gmail.jpg"></img></td>
                    <td class="dados_aluno">sami.eu@gmail.com</td>
                </tr>
                <tr>
                    <td><img class="aluno" src="images\linkedin.png"></img></td>
                    <td class="dados_aluno">linkedin.com/in/samuelflongo</td>
                </tr>
                <tr>
                    <td><img class="aluno" src="images\github.jpg"></img></td>
                    <td class="dados_aluno"> github.com/samuelflongo</td>
                </tr>
            </table>
           
            <p>
            <?php
                echo '<span class="data">'. date('d/m/Y') . '</span>';
            ?>
            </p>
           
        </footer>

    </body>

</html>