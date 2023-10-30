<?php

namespace Guille\ChainBuilder;
use Guille\ChainBuilder\Interfaces\OperationInterface;
use Guille\ChainBuilder\Calculator;
class CalculatorFactory
{
    public static function addOperation(string $operationName, OperationInterface $classIntance)
    {
        echo "Class " . get_class($classIntance) . " called - \n";
        Calculator::creator($operationName, get_class($classIntance));
    }
}