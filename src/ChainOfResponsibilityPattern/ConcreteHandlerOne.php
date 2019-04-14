<?php

namespace Kennynguyeenx\DesignPattern\ChainOfResponsibilityPattern;

/**
 * Class ConcreteHandlerOne
 * @package Kennynguyeenx\DesignPattern\ChainOfResponsibilityPattern
 */
class ConcreteHandlerOne extends Handler
{
    /**
     * @param Request $request
     * @return bool
     */
    public function handleRequestImpl(Request $request): bool
    {
        if ($request->getValue() < 0) {
            printf(
                'Request with value: ' . $request->getValue() . ' and description: ' .
                $request->getDescription() . ' is handled by ConcreteHandlerOne' . PHP_EOL
            );

            return true;
        } else {
            return false;
        }
    }
}
