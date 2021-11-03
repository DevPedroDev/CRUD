<?php 

session_start();
include_once("connection.php");
include_once("url.php");

$data = $_POST; 



//Modificações no banco
if (!empty($data)) {

    

    //Criar contato
    if($data['type']=== 'create') {

        $name = $data['nome_cad'];
        $horas = $data['time_cad'];
        $mensagem = $data['message_cad'];

        $query = "INSERT INTO eventos (nome_cad, time_cad, message_cad) VALUES (:name, :horas, :mensagem)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":horas", $horas);
        $stmt->bindParam(":mensagem", $mensagem);

        try {

          $stmt->execute();
          $_SESSION["msg"] = "Cadastrado com sucesso!";
        
        } catch(PDOException $e) {
            //error na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        
        }


    } else if ($data['type']=== "edit") {

        $name = $data['nome_cad'];
        $horas = $data['time_cad'];
        $mensagem = $data['message_cad'];
        $id = $data['id'];

        $query = "UPDATE eventos
         SET nome_cad = :name, time_cad = :horas, message_cad = :mensagem WHERE id= :id";
        $stmt = $conn->prepare($query);
         $stmt->bindParam(":name", $name);
        $stmt->bindParam(":horas", $horas);
        $stmt->bindParam(":mensagem", $mensagem);
        $stmt->bindParam(":id", $id);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Editado com sucesso!";
          
          } catch(PDOException $e) {
              //error na conexão
              $error = $e->getMessage();
              echo "Erro: $error";
          
          }

    } else if ($data['type'] === "delete") {
        $id = $data["id"];
        $query = "DELETE FROM eventos WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Removido com sucesso!";
          
          } catch(PDOException $e) {
              //error na conexão
              $error = $e->getMessage();
              echo "Erro: $error";
          
          }
    }


    //Redirect HOME

    header("Location:". $BASE_URL."../index.php");

} else {

    

//retorna o dado de um contato

if(!empty($_GET)) {
    $id = $_GET['id'];
}
//retorna todos contatos

if(!empty($_GET)) {
    $query = "SELECT * FROM eventos where id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    
    $contact = $stmt->fetch();
}

    
else {
    $contacts =[];

    $query = "SELECT * FROM eventos";
    
    $stmt = $conn->prepare($query);
    
    $stmt->execute();
    
    $contacts = $stmt->fetchAll();
}

}

//fechar conexao

$conn = null;


