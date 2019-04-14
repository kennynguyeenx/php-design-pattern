<?php

namespace Kennynguyeenx\DesignPattern\BuilderPattern;

/**
 * Class ResponseBuilder
 * @package Kennynguyeenx\DesignPattern\BuilderPattern
 */
class ResponseBuilder implements AbstractResponseBuilder
{
    /**
     * @var HttpResponse|null
     */
    private $response = null;

    /**
     * @param string $url
     * @return void
     */
    public function setRedirect(string $url)
    {
        $this->response = new RedirectResponse($url);
    }

    /**
     * @param string $template
     * @return void
     */
    public function setTemplate(string $template)
    {
        if (!($this->response instanceof OkResponse)) {
            $this->response = new OkResponse();
        }

        $this->response->setTemplate($template);
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        if (!($this->response instanceof OkResponse)) {
            $this->response = new OkResponse();
        }

        $this->response->setTitle($title);
    }

    /**
     * @return HttpResponse
     * @throws InvalidResponseException
     */
    public function build(): HttpResponse
    {
        if (!($this->response instanceof HttpResponse)) {
            throw new InvalidResponseException('Invalid response');
        }

        return $this->response;
    }
}