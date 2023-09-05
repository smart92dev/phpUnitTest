<?php 

require_once dirname(__FILE__) . '/../src/Wrapper.php';

use PHPUnit\Framework\TestCase;

class WrapperTest extends TestCase {
 
    function testWrapperFunction() {
        $wrapper = new Wrapper();
        $this->assertEquals('word', $wrapper->wrap('word'));
    }

    function testReturnFunction(){
    	$wrapper=new Wrapper();
    	$this->assertEquals('test', $wrapper->returnTest('test', 5));
    }
}
