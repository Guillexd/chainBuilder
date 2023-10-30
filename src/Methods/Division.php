<?php 
namespace Guille\ChainBuilder\Methods;
use Guille\ChainBuilder\Interfaces\OperationInterface;
class Division implements OperationInterface
{
    public function operate($result, ...$values)
    {
        return $result / array_product($values);
    }
}