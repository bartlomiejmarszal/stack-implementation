<?php
/**
 * Created by PhpStorm.
 * User: bmarszal
 * Date: 10.05.17
 * Time: 22:11
 */

/**
 * Class Stack
 * Stack implementation
 */
class Stack
{
    protected $stack;

    /**
     * @return array
     */
    public function getStack()
    {
        return $this->stack;
    }

    public function __construct()
    {
        // Init stack array
        $this->stack = array();
    }

    /**
     * add item to stack
     * @param $item
     */
    public function push($item)
    {
        array_unshift($this->stack, $item);
    }

    /**
     * take item from stack
     * @return mixed
     */
    public function pop()
    {
        if ($this->isEmpty()) {
            // trap for stack underflow
            throw new \RuntimeException('Stack is empty!');
        } else {
            // pop item from the start of the array
            return array_shift($this->stack);
        }
    }

    /**
     * check if stack is not empty
     * @return bool
     */
    private function isEmpty() {
        return empty($this->stack);
    }
}