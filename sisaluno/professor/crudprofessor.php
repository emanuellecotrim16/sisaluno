<?php include_once ("header.html"); ?>

<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');




##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $cpf = $_GET["cpf"];
        $endereco = $_GET["endereco"];
       
        $estatus= $_GET["estatus"];
       
      


        ##codigo SQL
        $sql = "INSERT INTO professor(nome,idade,endereco,cpf,estatus) 
                VALUES('$nome','$idade', '$endereco', '$cpf', '$estatus')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco=$conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o professor
                $nome foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='indexp.html'>voltar</a></button>";
            }
        }

if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    
    $estatus= $_POST["estatus"];
   
   
      ##codigo sql
    $sql = "UPDATE  professor SET nome= :nome, idade= :idade, endereco= :endereco, estatus= :estatus, cpf= :cpf WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
   
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_INT);
   
  

 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o professor
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='listaprof.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o professor

             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listaprof.php'>voltar</a></button>";
        }

}

        
?>

<?php include_once ("footer.html"); ?>

