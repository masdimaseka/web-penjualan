<?php
session_start();
require("../connection/conn-db.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "" || $password == "" || $email == "") {
        $_SESSION['message'] = [
            'type' => 'danger',
            'content' => 'Pastikan semua sudah terisi dan tidak kosong!',
        ];
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $connection->prepare("INSERT INTO administrator(email, username, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $username, $hashedPassword);

        try {
            $stmt->execute();
            $_SESSION['message'] = [
                'type' => 'success',
                'content' => 'Registrasi berhasil',
            ];
        } catch (mysqli_sql_exception $e) {
            $_SESSION['message'] = [
                'type' => 'danger',
                'content' => 'Error: ' . $e->getMessage(),
            ];
        }
    }
}


header("Location: ../pages/auth/register.php");
exit;
