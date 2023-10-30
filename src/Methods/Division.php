<?php 
namespace ComsitecxD\ChainBuilder\Methods;
use ComsitecxD\ChainBuilder\Interfaces\OperationInterface;
class Division implements OperationInterface
{
    public function operate($result, ...$values)
    {
        return $result / array_product($values);
    }
}