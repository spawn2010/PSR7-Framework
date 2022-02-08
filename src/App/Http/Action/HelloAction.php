<?php

namespace App\Http\Action;

use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;

class HelloAction
{
    public function __invoke(ServerRequestInterface $request)
    {

        $name = $request->getQueryParams()['name'] ?? 'Guest';

        $html =  require 'templates/hello.php';

        return new HtmlResponse($html);
    }
}
