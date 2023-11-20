<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Processo Seletivo de 2024 </title>
    <link href="form.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    
<?php include 'cabecalho.php'; ?>


    <h2>Formulário de Inscrição </h2>

<form action="/processar-formulario" method="post">
    
    <label for="nomeCompleto">NomeCompleto:</label>
    <input type="text" id="nomeCompleto" name="nomeCompleto" required>

    <br>
    
     <label for="nomeSocial">Nome social:</label>
    <input type="text" id="nomeSocial" name="nomeSocial" required>

    <br>
    
    <label for="estrangeiro"> Estrangeiro?:</label>

    <br>
     <select id="estrangeiro" name="estrangeiro">
          <option value="sim">Sim</option>
        <option value="nao">Não</option>
    </select>
    
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" required>

     <br>
     
     
    <label for="rg">RG:</label>
    <input type="text" id="rg" name="rg" required>

    <br>
  
    
     <label for="data">Data de Nascimento:</label>
    <input type="date" id="data" name="data">
    <br>
    

    <label for="identidadeGenero">Identidade de Gênero:</label>
    
      <select id="identidadeGenero" name="identidadeGenero">
        <option value="mulherCis">Mulher Cisgênero</option>
        <option value="homemCis">Homem Cisgênero</option>
        <option value="pessoaTrans">Pessoa Transgênero</option>
        <option value="generoNaoBinario">Gênero Não-Binário</option>
        <option value="generoFluido">Gênero Fluido</option>
        <option value="agenero">Agênero</option>
        <option value="bigenero">Bigênero</option>
        <option value="demiboyDemigirl">Demiboy/Demigirl</option>
    </select>

    <br>
    
    
    <label for="numeroDeTelefone">Número de Telefone:</label>
    <input type="text" id="numeroDeTelefone" name="numeroDeTelefone" required>

    <br>
    
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required>

    <br>
    
    
    <label for="confirmarEmail">Confirmar email:</label>
    <input type="text" id="confirmarEmail" name="confirmarEmail" required>

      <br>
    
    <label for="nomeDoResponsavel">Nome do Responsavel:</label>
    <input type="text" id="nomeDoResponsavel" name="nomeDoResponsavel" required>

    <br>
    
    
    <label for="rgDoResponsavel">RG do Responsavel:</label>
    <input type="text" id="rgDoResponsavel" name="rgDoResponsavel" required>

    <br>
    
     <label for="grauDeParentesco">Grau de Parentesco do Responsavel:</label>
    <input type="text" id="grauDeParentesco" name="grauDeParentesco" required>

    <br>
    
   
     <label for="telefoneResponsavel">Telefone Responsavel:</label>
    <input type="text" id="telefoneResponsavel" name="telefoneResponsavel" required>

    <br>
    
 
    <input type="submit" value="Enviar">
</form>

<?php include 'rodape.php'; ?>
</body>
</html>