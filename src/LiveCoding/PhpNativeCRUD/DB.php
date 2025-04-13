<?php

namespace App\LiveCoding\PhpNativeCRUD;

use PDO;
use PDOException;
use Exception;

final class DB {
    private static ?self $instance = null;
    private PDO $connection;
    private ILogger $logger;

    private function __construct(ILogger $logger)
    {
        $this->logger = $logger;

        $host = 'localhost';
        $dbname = 'your_database';
        $username = 'your_username';
        $password = 'your_password';

        try {
            $this->connection = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $username,
                $password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch (PDOException $e) {
            $this->logger->log(
                'DB connection error: ' . $e->getMessage(),
                [
                    'trace' => $e->getTrace(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine()
                ]
            );
            throw new Exception('Database connection error. Please try again later.');
        }
    }

    public static function getInstance(ILogger $logger): self
    {
        if (self::$instance === null) {
            self::$instance = new self($logger);
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }

    /**
     * @param string $sql SQL query
     * @param array<string|int, mixed> $params
     * @return \PDOStatement
     * @throws Exception
     */
    public function query(string $sql, array $params = []): \PDOStatement
    {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            $this->logger->log(
                'DB query error: ' . $e->getMessage(),
                [
                    'sql' => $sql,
                    'params' => $params,
                    'trace' => $e->getTrace()
                ]
            );
            throw new Exception('Database query error. Please try again later.');
        }
    }

    private function __clone() {}
    private function __wakeup() {}
}