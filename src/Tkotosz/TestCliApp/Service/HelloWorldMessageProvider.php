<?php

namespace Tkotosz\TestCliApp\Service;

use Tkotosz\TestCliApp\Service\Calculator2;

class HelloWorldMessageProvider
{    
    public function get(): string
    {
        return 'Hello World!';
    }
}
