<?php
    Class Conexao{
        private $server = "127.0.0.1";
        private $usuario = "root";
        private $senha = "";
        private $banco = "controleLogin";

        /* corrigir o ip para localhost
            adicionar email para ser um criterio de login
        */ 

        public function conectar(){
            try{
                $conexao = new PDO("mysql:host=$this->server;dbname=$this->banco", $this->usuario,$this->email, $this->senha);
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $erro){
                $conexao = null;
            }

            return $conexao;
        }
    };   
?>