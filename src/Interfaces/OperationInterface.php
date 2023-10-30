<?php

namespace ComsitecxD\ChainBuilder\Interfaces;
interface OperationInterface {
    public function operate($result, ...$values);
}