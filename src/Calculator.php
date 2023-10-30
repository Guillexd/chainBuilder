<?php

namespace ComsitecxD\ChainBuilder;

class Calculator
{
    private $result;
    private static array $operations = [];

    public function __construct($initialValue = 0)
    {
        $this->result = $initialValue;
    }

    public static function creator(string $operationName, string $operationClass )
    {
        self::$operations[$operationName] = $operationClass;
    }
    
    public static function start($initialValue = 0)
    {
        return new self($initialValue);
    }

    public function __call($operationName, $arguments)
    {
        if (isset(self::$operations[$operationName])) {
            $operationClass = self::$operations[$operationName];
            $operation = new $operationClass();
            $this->result = $operation->operate($this->result, ...$arguments);
            return $this;
        } else {
            throw new \BadMethodCallException("Operation $operationName does not exist.");
        }
    }
    public function getResult()
    {
        return $this->result;
    }
}