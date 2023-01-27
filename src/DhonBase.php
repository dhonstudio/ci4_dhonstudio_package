<?php

namespace Dhonstudio\Ci4basec;

class DhonBase
{
    public $assets;

    public function __construct()
    {
        $this->assets = getenv('app.assetsURL');
    }
}
