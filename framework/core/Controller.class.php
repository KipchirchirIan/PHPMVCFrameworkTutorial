<?php
/**
 * Created by PhpStorm.
 * Author: Ian Kipchirchir
 * Date: 6/4/20
 * Time: 10:04 AM
 */

// Base controller
class Controller
{
    // Base controller has a property called $loader, it is
    // an instance of the Loader class
    protected $loader;

    public function __construct()
    {
        $this->loader = new Loader();
    }

    public function redirect($url, $message, $wait = 0)
    {
        if ($wait == 0) {
            header("Location: $url");
        } else {
            include CURR_VIEW_PATH . "message.html";
        }

        exit;
    }
}