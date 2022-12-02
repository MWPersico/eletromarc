<?php
    class conexao{
        private $host;
        private $user;
        private $pass;
        private $db;
        public $conn;

        public function __construct(){
            $this->host = "marcprojects.com";
            $this->user = "u226543733_eletromarc";
            $this->pass = "24022005Marc";
            $this->db = "u226543733_eletromarcBeta";
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