<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servidor = "";
    $username = "";
    $password = "";

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    try {
        $conn = new PDO("mysql:host=$servidor;dbname=mydb", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $login = "SELECT usuarios.nome FROM usuarios WHERE email =='renan' and senha=='1234'";
        $login = $conn->prepare($login);
        $result = $login->fetch();
        if ($email == "renan" and $senha == "1234") {
            header('Content-Type: text/html; charset=utf-8');
            echo "Login efetuado com sucesso!, seja bem vindo <b>";
            header("Location:cadastrar.html");
            exit;
        } else {
            echo "Falha ao realizar o login!";
        }

        $conn = null;
        exit();
    } catch (PDOException $e) {
        echo " Falha na conexão:" . $e->getMessage();
    }
}
exit();
?>