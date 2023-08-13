<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include_once ("header.html"); ?>

<?php
    require_once('../conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM professor where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $cpf = $array_retorno['cpf'];
   $endereco = $array_retorno['endereco'];
   $datanascimento = $array_retorno['datanascimento'];
   $estatus = $array_retorno['estatus'];
   


?>

  <form method="POST" action="crudprofessor.php">
    
      <p> ID: <br> <input type="text" name="id" id="" value=<?php echo $id?> > </p>

       <p> Nome: <br>  <input type="text" name="nome" id="" value=<?php echo $nome?> > </p>
                                                
       <p> IDADE: <br> <input type="text" name="idade" id="" value=<?php echo $idade ?> > </p> 

       <p> CPF: <br> <input type="text" name="cpf" id="" value=<?php echo $cpf ?> > </p>
       
       <p> ENDEREÇO: <br> <input type="text"  name="endereco" id="" value=<?php echo $endereco ?>> </p>
     
      <p> DATA DE NASCIMENTO: <br> <input type="date" name="datanascimento" id="" value=<?php echo $datanascimento ?>> </p>
    
      <p> STATUS: <br> <input type="text" name="estatus" id="" value=<?php echo $estatus ?> > </p>
     
      
    
        
        <input type="submit" name="update" value="Alterar">
  </form>

  <?php include_once ("footer.html"); ?>
  
</body>
</html>