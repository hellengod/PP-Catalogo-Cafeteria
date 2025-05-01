<?php

class Usuario
{
    private string $nome;
    private string $email;
    private string $password;

    public function __construct($nome, $email, $senha)
    {

    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function addUser(){

    }


}