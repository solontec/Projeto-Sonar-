<?php
include ('connClass.php');

if (isset($_POST['email']) || isset($_POST['senha'])){

if(strlen($_POST ['email']) == 0){
    echo "preencha seu e-mail";
}else if(strlen($_POST['senha']) == 0 ) {
    echo "preencha sua senha";
} else {

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli -> query($sql_code) or die ("falha na execução SQL:" . $mysqli -> error );

    $quantidade = $sql_query ->num_rows;

    if($quantidade == 1){

        $usuario = $sql_query -> fetch_assoc();
        if(!isset($_SESSION)){
            session_start();
        }


        } else{
            echo "falha ao logar, email ou senha incorreto";
        }

    }

}
?>

