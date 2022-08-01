<?php 
namespace Stive\Notas\lib;

use PDO;
use PDOException;

class Database{
    private string $host;
    private string $user;
    private string $password;
    private string $db;
    private string $charset;
    
    public function __construct(){
        $this->host='localhost';
        $this->user='root';
        $this->password='';
        $this->db='proyectos';
        // $this->charset='utf8mb4';

        
    }
    public function connect()
    {
        try {
            $connection ="mysql:host={$this->host};dbname={$this->db}";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

?>