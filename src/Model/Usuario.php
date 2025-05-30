<?php

class Usuario
{
    private string $nome;
    private string $email;
    private string $password;
    private PDO $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function salvar(): bool
    {
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nome' => $this->nome,
            ':email' => $this->email,
            ':senha' => $this->password,
        ]);
    }

}