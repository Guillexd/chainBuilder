<?php 
namespace Guille\ChainBuilder\Methods;
use Guille\ChainBuilder\Interfaces\OperationInterface;
class Subtraction implements OperationInterface
{
    public function operate($result, ...$values)
    {
        return $result - array_sum($values);
    }
}