<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Caseiro de Verdade - Doces Caseiros</title>
        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/estilo.css" type="text/css" />
    </head>
    <body>
       
    <p class="contato">Para entrar entrar em contato com a gente é só preencher o formulário abaixo.<br>Dê seu feedback sobre nossos produtos, solicite orçamento nosso representante ou faça sua sugestão para aumentarmos o rol dos nossos produtos.
    </p>

    <form action="" method="post">
    
    <p><label> Nome </label></p>
    <p><input class="nome_email" type="text" name="nome" placeholder="digite seu nome completo" required></p>
    <br>
    <p><label> Data de Nascimento </label></p>
    <p><input class="data" type="date" name="data_nascimento" required></p>
    <br>
    <p><label> Qual o gênero você se identifica</label></p>
    <p><input class="genero" type="radio" name="genero" value="Masculino" required>Masculino</p>
    <p><input class="genero" type="radio" name="genero" value="Feminino">Feminino</p>
    <p><input class="genero" type="radio" name="genero" value="Outro">Outro. Qual?
       <input class="qual" type="text" name="qual_genero" placeholder="se outro, digite qual..."></p>
    <p><input class="genero" type="radio" name="genero" value="Prefiro não dizer">Prefiro não dizer</p>
    <br>
    <p><label> E-mail </label></p>
    <p><input class="nome_email" type="email" name="email" placeholder="digite seu e-mail" required></p>
    <br>    
    <p><label> Seu contato é referente a... </label>
    <p><select name="sobre" placeholder="assunto" placeholder="digite seu nome completo" required></p>
        <option class="selecionar" value="selecionar" select>selecionar...</option>
        <option class="assunto" value="feedback">Feedback</option>
        <option class="assunto" value="sugestão">Sugestão</option>
        <option class="assunto" value="orcamento">Orçamento</option>
        <option class="assunto" value="outro">Outro assunto</option>    
    </select></p>
    <br>
    <p><label> Sua Mensagem </label></p>
    <p><textarea name="mensagem" rows="5" cols="30" minlength="20" placeholder="digite no mínimo 20 caracteres referente ao assunto selecionado no campo acima..." required></textarea></p>
    <br>        
    <p> <button type="submit">enviar contato</button></p>

    </form>



    
    <body>

</html>