<?php
    class conexao{
        private $host;
        private $user;
        private $pass;
        private $db;
        public $conn;

        public function __construct(){
            $this->host = "localhost";
            $this->user = "root";
            $this->pass = "24022005Marc";
            $this->db = "eletromarc_beta";
            $this->mysqlConn();
        }

        public function mysqlConn(){
            try{
                $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
            } catch(Exception $ex){
                echo "Erro ao conectar".$ex->getMessage();
            }
        }

    }
?>