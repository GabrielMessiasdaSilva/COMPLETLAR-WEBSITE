<?php
if (!class_exists('Conectar')) {
    class Conectar extends PDO
    {
        private static $instancia;

        private $query; // comando SQL

        private $host = "127.0.0.1"; // número de host (endereço do servidor MySQL)

        private $usuario = "root"; // nome do usuário do banco de dados

        private $senha = ""; // senha de acesso

        private $db = "completlar"; // nome do banco de dados

        private $pdo; // a conexão PDO

        public function __construct() {
            parent::__construct("mysql:host=$this->host;dbname=$this->db", $this->usuario, $this->senha);
        }

        public static function getInstance() {
            if (!isset(self::$instancia)) {
                try {
                    self::$instancia = new Conectar();
                } catch (PDOException $e) {
                    echo 'Falha ao conectar: ' . $e->getMessage();
                    exit();
                }
            }
            return self::$instancia;
        }

        public function sql($query) {
            $this->pdo = $this->getInstance();
            $this->query = $query;
            $stmt = $this->pdo->prepare($this->query);
            $stmt->execute();
        }
    }
}

?>
