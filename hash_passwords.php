<?php

// Koneksi ke database
$host = '127.0.0.1'; // Ganti dengan host database Anda
$dbname = 'login'; // Nama database
$username = 'root'; // Username database
$password = ''; // Password database

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Ambil semua user
    $stmt = $pdo->query("SELECT id, password FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
        // Hash password menggunakan Bcrypt
        $hashedPassword = password_hash($user['password'], PASSWORD_BCRYPT);

        // Update password yang sudah di-hash ke database
        $updateStmt = $pdo->prepare("UPDATE users SET password = :password WHERE id = :id");
        $updateStmt->execute([
            ':password' => $hashedPassword,
            ':id' => $user['id']
        ]);
    }

    echo "Semua password berhasil di-hash dengan Bcrypt.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
