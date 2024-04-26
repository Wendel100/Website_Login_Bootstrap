<?php
$servidor = "";
$username = "";
$password = "";

$email = $_POST['email'];
$senha = $_POST['senha'];
try{
$conn = new PDO("myql:host=$dbname=mydb", $username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$login = "SELECT mydb.usuario FROM usuario WHERE email =:param1 && senha=param2;";
$login = $conn->prepare($login);
$login->bindValue("param1", $email);
$login->bindValue("param2", $senha);
$login->execute();
$result = $login->fetch();
if (isset($result) and $result != false) {
    header('content-Type: text/html;charset=utf-8');
    echo "Login efetuado com sucesso";
} else {
    echo "Falha ao realizar login";
}
$conn = null;
exit();
}cath(PDOException $e){
    echo " Falha na conexão:". $e->getMessage();
}
exit();