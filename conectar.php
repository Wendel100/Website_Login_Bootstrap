<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de usuário e senha foram preenchidos
    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $username = $_POST['email'];
        $password = $_POST['senha'];

        // Aqui você pode adicionar sua lógica de validação de login
        // Por exemplo, você pode consultar um banco de dados para verificar as credenciais do usuário

        // Exemplo simples: verifica se o usuário é 'admin' e a senha é 'password'
        if ($username === 'email' && $password === 'senha') {
            // Login bem-sucedido
            echo "Login successful. Welcome, $username!";
        } else {
            // Login falhou
            echo "Invalid username or password. Please try again.";
        }
    } else {
        // Caso algum campo esteja em branco
        echo "Both username and password are required.";
    }
} else {
    // Se alguém tentar acessar diretamente o arquivo processa_login.php sem enviar os dados do formulário
    echo "Access denied.";
}
?>
