<?php
require_once(__DIR__ . '/../home/lib/autoload.php');
require_once(__DIR__ . '/../home/lib/3rd-party/smarty/libs/Smarty.class.php');

use controller\ContentController;



try {
    session_start();
    $lang = 'it';
    $controller = new ContentController();

    if(!isset($_SESSION['lang'])) {
        if(isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        if(isset( $_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            if(($lang != 'en') && ($lang != 'de')){
                $lang = 'en';
            }
        }
        if(!isset($_REQUEST['lang']) || (isset($_REQUEST['lang']) && ($_REQUEST['lang'] != 'en' && $_REQUEST['lang'] != 'de'))) {
            $_SESSION['lang'] = $_REQUEST['lang'] = $lang;
        }
    }
    if(isset($_REQUEST['lang'])) {
        $lang = $_SESSION['lang'] = $_REQUEST['lang'];
    }
	$controller->handleRequest($_REQUEST);
//	session_write_close();
} catch (Exception $e) {
    throw $e;
}