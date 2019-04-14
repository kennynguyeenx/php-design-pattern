<?php

namespace Kennynguyeenx\DesignPattern\BuilderPattern;

/**
 * Interface AbstractResponseBuilder
 * @package Kennynguyeenx\DesignPattern\BuilderPattern
 */
interface AbstractResponseBuilder
{
    /**
     * @param string $url
     * @return void
     */
    public function setRedirect(string $url);

    /**
     * @param string $template
     * @return void
     */
    public function setTemplate(string $template);

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title);

    /**
     * @return HttpResponse
     */
    public function build(): HttpResponse;
}