<?php
namespace Model;

// Connection Class Making Connection
class Database
{

    public function getConnection()
    {
        $host = '127.0.0.1:3308';
        $user = 'root';
        $pass = '';
        $dbname = 'blog';

        $dsn = "mysql:host=$host;dbname=$dbname";

        $conn = new \PDO($dsn, $user, $pass);
        return $conn;
    }
}
