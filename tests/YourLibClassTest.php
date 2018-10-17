<?php
use PHPUnit\Framework\TestCase;

class YourLibClassTest extends TestCase
{
    public function testIsThereAnySyntaxError()
    {
        $var = new Yocmen\Template\YourLibClass("test");
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function tesYourLibClass()
    {
        $var = new Yocmen\Template\YourLibClass('Hello World');
        $this->assertTrue($var == 'Hello World');
        unset($var);
    }
}
