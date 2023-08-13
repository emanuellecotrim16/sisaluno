<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include_once ("header.html"); ?>
 



 
  <div class="t1"> </div> 

  <div class="conteudo">     

<form method="GET" action="crudisciplina.php">

     <label for="">NOME DISCIPLINA </label>
     <input type="text" name="nomedisciplina" required value="" placeholder="NOME" >     
     <label for="">CH</label>
     <input type="text" name="ch" placeholder="CH"> 
     <label for="">SEMESTRE</label>
     <input type="text" name="semestre" placeholder="SEMESTRE">
     <label for="">IDPROFESSOR</label>
     <input type="text" name="idprofessor" placeholder="ID">
     
    

     <input type="submit" name="cadastrar" value="cadastrar">

     </form> 
     </div> 

     <button class="button"><a href="indexd.php">voltar</a></button>
            
     
            <?php include_once ("footer.html"); ?>
    

</body>
</html>