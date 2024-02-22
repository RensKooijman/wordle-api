<?php

require_once 'vendor/autoload.php';

use Models\Woorden;

class PostRequestTest
{
    public function sendQuery()
    {
        $obj = new Woorden();
        $request = $obj->insert();
    }
}
