<?php

/**
 * 禁止 RSS 订阅
 *
 * @package GraceDisableRSS
 * @author Ryan
 * @version 1.0.0
 * @link https://github.com/benzBrake/GraceDisableRSS
 */
class GraceDisableRSS_Plugin implements Typecho_Plugin_Interface
{
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->handleInit = array(__CLASS__, 'disableFeed');
    }

    public static function deactivate()
    {
    }

    public static function disableFeed()
    {
        $request = Typecho_Request::getInstance();
        $response = Typecho_Response::getInstance();
        $action = $request->getRequestUri();
        if (!empty($action) && preg_match("/^(\/index\.php)?\/feed/", $action, $m)) {
            $response->setStatus(404);
        }
    }

    public static function config($form)
    {
    }

    public static function personalConfig($form)
    {
    }
}
