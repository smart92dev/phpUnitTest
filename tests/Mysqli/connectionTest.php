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

        if ($this->mysqli->connect_errno) {
            $this->fail('There was an error connecting to the database: ' . $this->mysqli->connect_error);
        }

        $this->mysqli->set_charset('utf8');
    }

    public function testConnection()
    {
        $this->assertInstanceOf(mysqli::class, $this->mysqli);
    }
}