<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nomedisciplina = $_GET["nomedisciplina"];
        $ch = $_GET["ch"];
        $semestre = $_GET["semestre"];
        $idprofessor= $_GET["idprofessor"];
       
      


        ##codigo SQL
        $sql = "INSERT INTO disciplina(nomedisciplina,ch,semestre,idprofessor) 
                VALUES('$nomedisciplina','$ch', '$semestre', '$idprofessor')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco=$conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> a disciplina
                $nome foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='indexd.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $id = $_POST["id"];
    $nomedisciplina = $_POST["nomedisciplina"];
    $ch = $_POST["ch"];
    $semestre = $_POST["semestre"];
    $idprofessor= $_POST["idprofessor"];
   
   
      ##codigo sql
    $sql = "UPDATE  disciplina SET nomedisciplina= :nomedisciplina, ch= :ch, semestre= :semestre, idprofessor= :idprofessor WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nomedisciplina',$nomedisciplina, PDO::PARAM_STR);
    $stmt->bindParam(':ch',$ch, PDO::PARAM_INT);
    $stmt->bindParam(':semestre',$semestre, PDO::PARAM_STR);
    $stmt->bindParam(':idprofessor',$idprofessor, PDO::PARAM_STR);
   
  

 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> a disciplina
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='listadisci.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `disciplina` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo " <strong>OK!</strong> a disciplina

             $id foi excluido!!!"; 

            echo " <button class='button'><a href='listadisci.php'>voltar</a></button>";
        }

}

        
?>

