<?php

namespace Guille\ChainBuilder\Interfaces;
interface OperationInterface {
    public function operate($result, ...$values);
}