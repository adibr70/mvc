<?php
    //Load config
    require_once 'config/config.php';

    //Load helpers
    require_once 'helpers/url_helper.php';
    require_once 'helpers/session.php';

    //Autoload Core Libraries
    spl_autoload_register(function($className){

        require_once 'libraries/' . $className . '.php';

    });