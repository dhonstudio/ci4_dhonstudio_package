<?php

namespace Dhonstudio\Ci4basec;

class DhonBase
{
    public $assets;
    public $api_url;

    public function __construct()
    {
        $this->assets = getenv('app.assetsURL');
        $this->api_url = getenv('app.apiURL');
    }
}
