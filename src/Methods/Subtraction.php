<?php 
namespace ComsitecxD\ChainBuilder\Methods;
use ComsitecxD\ChainBuilder\Interfaces\OperationInterface;
class Subtraction implements OperationInterface
{
    public function operate($result, ...$values)
    {
        return $result - array_sum($values);
    }
}