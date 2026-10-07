<?php 
session_start();
include "service/env.php";

if (isset($_POST['regis'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (empty($username) || empty($password) || empty($email)) {
        echo "<script>alert('Kolom ga boleh kosong woy'); window.history.back();</script>";
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('username sudah digunakan'); window.history.back();</script>";
            exit();
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username, password_users, email) VALUES (?, ?, ?)";
            $stmt = $db->prepare($sql);
            $stmt->bind_param("sss", $username, $hash, $email);
            $stmt->execute();

            echo "<script>alert('Registrasi sukses'); window.history.back();</script>";
            exit();
        }
    }
}