<?php

namespace Dhonstudio\Ci4basec;

require 'vendor/autoload.php';

class DhonBase
{
    protected $assets;

    public function __construct()
    {
        $this->assets = getenv('app.assetsURL');
    }
}
