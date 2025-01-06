<?php
session_start();

require("../connection/conn-db.php");


if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    if ($username == "" || $password == "") {
        $_SESSION['message'] = [
            'type' => 'danger',
            'content' => 'Username atau password tidak boleh kosong!',
        ];
    } else {
        $stmt = $connection->prepare("SELECT * FROM administrator WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        try {
            if ($row && password_verify($password, $row['password'])) {
                $_SESSION['valid'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];

                header('Location: ../index.php');
                exit;
            } else {
                $_SESSION['message'] = [
                    'type' => 'danger',
                    'content' => 'Username dan password tidak valid!',
                ];
            }
        } catch (mysqli_sql_exception $e) {
            $_SESSION['message'] = [
                'type' => 'danger',
                'content' => 'Error: ' . $e->getMessage(),
            ];
        }
    }
}

header("Location: ../pages/auth/login.php");
exit;
