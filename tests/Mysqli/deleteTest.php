<?php

use PHPUnit\Framework\TestCase;

class DeleteTest extends TestCase
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
        //TODO make users table???
        $query = "INSERT INTO users (userLASTNAME) VALUES ('Basirnia')";
        $this->mysqli->query($query);
    }

    public function testDeleteUserByLastName()
    {
        $mysqli = $this->mysqli;
        
        $query = "DELETE FROM users WHERE userLASTNAME = 'Basirnia' ";
        $result = $mysqli->query($query);
        
        $this->assertTrue($result);
    }
    protected function tearDown(): void
    {
        // Close the database connection
        $this->mysqli->close();
    }
}
