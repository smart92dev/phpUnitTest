<?php

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    private $mysqli;

    protected function setUp(): void
    {
        $this->mysqli = new mysqli(
            'localhost',
            'root',
            '',
            'world'
        );
    }

    public function testCreateTable()
    {
        $tableSql = "
            CREATE TABLE *TABLE* (
                id int PRIMARY KEY AUTO_INCREMENT,
                fullName varchar(255) NOT NULL,
                age int UNSIGNED,
                sex ENUM('f','m'),
                isSingle boolean DEFAULT 1
            )
        ";

        for ($i = 1; $i <= 7; $i++) {
            $tableSql = str_replace("*TABLE*", "people$i", $tableSql);
            if ($this->mysqli->query($tableSql)) {
                $this->assertTrue(true);
            } else {
                $this->fail('Table people' . $i . ' is not created');
            }
        }
    }

    public function testDeleteTable()
    {
        for ($i = 1; $i <= 7; $i++) {
            if ($this->mysqli->query("DROP TABLE IF EXISTS people$i")) {
                $this->assertTrue(true);
            } else {
                $this->fail('Failed to delete table people' . $i);
            }
        }
    }
}
