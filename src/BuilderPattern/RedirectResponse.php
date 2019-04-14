<?php

namespace Kennynguyeenx\DesignPattern\BuilderPattern;

/**
 * Class RedirectResponse
 * @package Kennynguyeenx\DesignPattern\BuilderPattern
 */
class RedirectResponse extends HttpResponse
{
    /**
     * @var int
     */
    protected $httpCode = 301;
    /**
     * @var string
     */
    protected $url = '';

    /**
     * RedirectResponse constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    public function render()
    {
        printf('You will be redirected to url: ' . $this->getUrl() . PHP_EOL);
    }
}
