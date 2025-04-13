<?php

namespace App\LiveCoding\PhpNativeCRUD;

class UserManager {
    private $db;

    public function __construct() {
        $this->db = DB::getInstance()->getConnection();
    }

    // Create (добавление нового пользователя)
    public function createUser($username, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        return $stmt->execute();
    }

    // Update (обновление данных пользователя)
    public function updateUser($id, $username, $email, $password = null) {
        $sql = "UPDATE users SET username = :username, email = :email";
        $params = [
            ':username' => $username,
            ':email' => $email,
            ':id' => $id
        ];
        if ($password) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql .= ", password = :password";
            $params[':password'] = $hashedPassword;
        }
        $sql .= " WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($params);
    }

    // Read (получение пользователя по ID)
    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Read (получение всех пользователей)
    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->db->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Delete (удаление пользователя)
    public function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }

    // Дополнительный метод для проверки существования пользователя
    public function userExists($username, $email) {
        $sql = "SELECT COUNT(*) FROM users WHERE username = :username OR email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetchColumn() > 0;
    }
}
?>