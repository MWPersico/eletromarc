<?php
    class conexao{
        private $host;
        private $user;
        private $pass;
        private $db;
        public $conn;

        public function __construct(){
            /*Informações de conexão ocultas*/
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
