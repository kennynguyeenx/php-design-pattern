<?php

namespace Kennynguyeenx\DesignPattern\ChainOfResponsibilityPattern;

/**
 * Class Handler
 * @package Kennynguyeenx\DesignPattern\ChainOfResponsibilityPattern
 */
abstract class Handler
{
    /**
     * @var Handler|null
     */
    protected $successor;

    /**
     * @param Handler $successor
     */
    public function setSuccessor(Handler $successor)
    {
        $this->successor = $successor;
    }

    /**
     * @param Request $request
     */
    public function handleRequest(Request $request)
    {
        $handledByThisNode = $this->handleRequestImpl($request);
        if (!is_null($this->successor) && !$handledByThisNode) {
            $this->successor->handleRequest($request);
        }
    }

    /**
     * @param Request $request
     * @return bool
     */
    public abstract function handleRequestImpl(Request $request): bool;
}
