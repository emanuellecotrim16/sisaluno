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
  <div class="conteudo">
  <form method="GET" action="crudaluno.php">

    <label for="">nome </label>
     <input type="text" name="nome" required value="" >
     <label for="">idade</label>
     <input type="text" name="idade">
 
     <label for="">endereco</label>
     <input type="text" name="endereco"> 
     <label for="">datadenacimento</label>
     <input type="date" name="datanascimento"> 
     <label for="">estatus</label>
     <input type="text" name="estatus">
     <label for="">matricula</label>
     <input type="text" name="matricula">
     <input type="submit" name="cadastrar" value="cadastrar">
  </form>
</div>

     <button class="button"><a href="index.php">voltar</a></button>

</body>
</html>