<?php
require_once __DIR__ . '/../src/Final2.php';

class Final2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName() //1st test case
    {
        $simple2 = new Final2();
        $simple2->setName('yawamushi');
        $this->assertEquals($simple2->getName(), 'yawamushi');
    }

    public function testGetAge()
    {
        $simple2 = new Final2();
        $simple2->setAge(22);
        $this->assertEquals($simple2->getAge(), 22);
    }

    public function testFaveColor()
    {
        $simple2 = new Final2();
        $simple2->setFaveColor('Red');
        $this->assertEquals($simple2->getFaveColor(), 'Red');
    }

    public function testGetNameCheckString()
    {
        $simple2 = new Final2();
        $simple2 ->setName('yawamushi');
        $this->assertIsString($simple2->getName(), 'yawamushi');
    }

    public function testGetAgeCheckInt()
    {
        $simple2 = new Final2();
        $simple2->setAge(22);
        $this->assertIsInt($simple2->getAge(), 22);
    }

    public function testGetAgeCheckNumeric()
    {
        $simple2 = new Final2();
        $simple2->setAge(22);
        $this->assertIsNumeric($simple2->getAge(), 22);
    }
    
    public function testFaveColorCheckString()
    {
        $simple2 = new Final2();
        $simple2->setFaveColor('Red');
        $this->assertIsString($simple2->getFaveColor(), 'Red');
    }

    public function testGetTogetherInput()
    {
        $simple2 = new Final2();
        $simple2->setTogetherInput('yawamushi', 21, 'Red');
        $this->assertEquals($simple2->getTogetherInput(), 'yawamushi', 21, 'Red');
    }

}