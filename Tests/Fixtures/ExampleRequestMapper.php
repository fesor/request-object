<?php

namespace Fesor\RequestObject\Tests\Fixtures;

use Symfony\Component\HttpFoundation\Request;

class ExampleRequestMapper
{
    public function someSetterForService(string $someParameter)
    {
        // do nothing
    }

    public function exampleMapper(Request $request, callable $next): ExampleRequestObject
    {
        return new ExampleRequestObject();
    }
}