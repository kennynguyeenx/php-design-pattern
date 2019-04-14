<?php

namespace Kennynguyeenx\DesignPattern\BuilderPattern;

/**
 * Class OkResponse
 * @package Kennynguyeenx\DesignPattern\BuilderPattern
 */
class OkResponse extends HttpResponse
{
    /**
     * @var int
     */
    protected $httpCode = 200;
    /**
     * @var string
     */
    protected $template = '';

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate(string $template)
    {
        $this->template = $template;
    }

    public function render()
    {
        printf('Page will be rendered with template: ' . $this->getTemplate() .
            ' and title: ' . $this->getTitle() . PHP_EOL);
    }
}
