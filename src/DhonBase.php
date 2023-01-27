<?php

namespace Dhonstudio\Ci4basec;

class DhonBase
{
    /**
     * Assets URL.
     *
     * @var string
     */
    public $assets;

    /**
     * API URL.
     *
     * @var string
     */
    public $api_url;

    /**
     * @var string
     */
    public $userSessionName;

    /**
     * User session expiration.
     * 
     * @var int
     */
    public $userSessionExpiration;

    /**
     * @var string
     */
    public $redirectSessionName;

    /**
     * Redirect session expiration.
     * 
     * @var int
     */
    public $redirectSessionExpiration;

    /**
     * @var string
     */
    public $bearerTokenSessionName;

    /**
     * Bearer session expiration.
     * 
     * @var int
     */
    public $bearerTokenSessionExpiration;

    public function __construct()
    {
        $this->assets = getenv('app.assetsURL');
        $this->api_url = getenv('app.apiURL');
        $this->userSessionName = getenv('session.userName');
        $this->userSessionExpiration = getenv('session.userExpiration');
        $this->redirectSessionName = getenv('session.redirectName');
        $this->redirectSessionExpiration = getenv('session.redirectExpiration');
        $this->bearerTokenSessionName = getenv('session.bearerName');
        $this->bearerTokenSessionExpiration = getenv('session.bearerExpiration');
    }
}
