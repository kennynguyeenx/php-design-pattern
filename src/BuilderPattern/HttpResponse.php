<?php

namespace Kennynguyeenx\DesignPattern\BuilderPattern;

/**
 * Class HttpResponse
 * @package Kennynguyeenx\DesignPattern\BuilderPattern
 */
abstract class HttpResponse
{
    /**
     * @var int
     */
    protected $httpCode = 0;
    /**
     * @var string
     */
    protected $title = '';
    /**
     * @var string
     */
    protected $header = '';
    /**
     * @var string
     */
    protected $body = '';

    /**
     * @return int
     */
    public function getHttpCode(): int
    {
        return $this->httpCode;
    }

    /**
     * @param int $httpCode
     */
    public function setHttpCode(int $httpCode)
    {
        $this->httpCode = $httpCode;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @param string $header
     */
    public function setHeader(string $header)
    {
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body)
    {
        $this->body = $body;
    }

    public abstract function render();
}
