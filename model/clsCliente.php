<?php
  /**
   *
   */
  class Cliente {
    private $id, $nome, $sexo, $email, $cpf, $telefone, $senha, $admin;

    function __construct($id = NULL, $nome = NULL, $sexo = NULL, $email = NULL,
            $cpf = NULL, $telefone = NULL, $senha = NULL, $admin = NULL) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->senha = $senha;
        $this->admin = $admin;
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEmail() {
        return $this->email;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSenha() {
        return $this->senha;
    }

    function getAdmin() {
        return $this->admin;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setAdmin($admin) {
        $this->admin = $admin;
    }
  }

?>
