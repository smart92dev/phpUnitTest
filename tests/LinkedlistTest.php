<?php

namespace std;

require __DIR__."/../src/Linkedlist.php";
use PHPUnit\Framework\TestCase;

class LinkedlistTest extends TestCase
{
    public function testInsertFirst()
    {
        $list = new Linkedlist();
        $list->insertFirst(5);
        $this->assertEquals(5, $list->readNode(1));
    }

    public function testInsertLast()
    {
        $list = new Linkedlist();
        $list->insertLast(10);
        $list->insertLast(5);
        $this->assertEquals(5, $list->readNode(2));
    }

    public function testDeleteFirstNode()
    {
        $list = new Linkedlist();
        $list->insertFirst(5);
        $list->insertFirst(10);
        $list->deleteFirstNode();
        $this->assertEquals(5, $list->readNode(1));
    }

    public function testDeleteLastNode()
    {
        $list = new Linkedlist();
        $list->insertFirst(5);
        $list->insertFirst(10);
        $list->deleteLastNode();
        $this->assertEquals(10, $list->readNode(1));
    }

    public function testDeleteNode()
    {
        $list = new Linkedlist();
        $list->insertFirst(5);
        $list->insertFirst(10);
        $list->insertFirst(15);
        $list->deleteNode(10);
        $this->assertEquals(15, $list->readNode(1));
    }

    public function testFind()
    {
        $list = new Linkedlist();
        $list->insertFirst(5);
        $list->insertFirst(10);
        $list->insertFirst(15);
        $node = $list->find(10);
        $this->assertEquals(10, $node->readNode());
    }

    public function testReverseList()
    {
        $list = new Linkedlist();
        $list->insertFirst(5);
        $list->insertFirst(10);
        $list->insertFirst(15);
        $list->reverseList();
        $this->assertEquals(5, $list->readNode(1));
        $this->assertEquals(10, $list->readNode(2));
        $this->assertEquals(15, $list->readNode(3));
    }
}