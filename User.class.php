<?php
class User {

    private $id;
    private $email;
    private $password;


    public static function Register(string $email, string $password) {
    
    $dh - new mysqli('localhost', 'root', '', 'cms')
    $q = $db->prepare("INSERT INTO user VALUES (NULL, ?, ?)");
    $passwordHash = password_hash($password, PASSWORD_ARGON2I);
    $q->bind_param("ss", $email, $passwordHash);
    $result = $q->execute();


    }
    public static function Login(string $email, string $password) {


    }
    public function Logout() {
    

    }
}
?>