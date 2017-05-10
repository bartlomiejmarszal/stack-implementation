<?php

/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 10.05.17
 * Time: 22:15
 */
class StackTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Stack
     */
    private $stack;

    protected function setUp()
    {
        parent::setUp();
        $this->stack = new Stack();
    }

    /**
     * @test
     */
    public function simple_push_test()
    {
        $this->stack->push('test item');
        $this->assertEquals(1, $this->count($this->stack->getStack()));
    }

    /**
     * @test
     */
    public function simple_pop_test()
    {
        $this->stack->push('item');
        $popResult = $this->stack->pop();
        $this->assertEquals('item', $popResult);
    }

    /**
     * @test
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Stack is empty!
     */
    public function empty_stack_pop_action()
    {
        $this->stack->pop();
    }
}