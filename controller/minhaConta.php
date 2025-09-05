<?php
    include ('conexao.php');

        //verifica se id foi enviado
if (isset($_GET ['id'])) {

        //pega o id da url
$id = $_GET['id'];

        //prepara a consulta sql para excluir o registro
 $sql = "DELETE FROM usuarios WHERE id = ?";


        //preparar a consulta

 if ($stmt = $conn->prepare($sql)){

        //vincula o valor do parametro

 $stmt->bind_param('i', $id); // "i" é pq o parametro é inteiro

        //executar a consulta 
 if($stmt->execute());

        //se a exclusao for sucedida
    echo "Registro excluído com sucesso!";
    header("Location: login.php"); //redireciona para a pagina de login
    exit();

  }  else {

    //se tiver um erro na exclusão

  echo "Erro ao excluir o registro";

    //fechar a declaração

 $stmt->close();

} else {

    //se o id nao for fornecido
    echo "ID não fornecido";

    $stmt->close();

} 
}
    ;





