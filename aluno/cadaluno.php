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
 
<div class="t1"></div> 

     <div class="conteudo">
        <form class="form" method="post" action="crudaluno.php">

<div>
     <label for="">NOME </label>
     <input type="text" name="nome" required value="" placeholder="SEU NOME" >
     <label for="">IDADE</label>
     <input type="number" name="idade" placeholder="IDADE" min="18" max="50" required>
     </div> 

     <div>
     <label for="">ENDEREÇO</label>
     <input type="text" name="endereco" placeholder="ENDEREÇO"> 
     <label for="">DATADENASCIMENTO</label>
     <input type="date" name="datadenascimento" > 
     </div>
     
     
     
     <div>
     <label for="">STATUS</label>
     <input type="text" name="estatus" placeholder="STATUS">
     
     
 
    </div>
              
          

            
            
                    <button class="button" class="btn">
                   <b>Casdastar</b>
            </button>
            

        
                <button class="button"><a href="indexa.php"> voltar</a>
                 
          </button>

          

           
            </form>
     
            <?php include_once ("footer.html"); ?>
    

</body>
</html>