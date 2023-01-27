<?php

namespace Dhonstudio\Ci4basec;

class DhonBase
{
    protected $assets;

    public function __construct()
    {
        $this->assets = getenv('app.assetsURL');
    }
}
