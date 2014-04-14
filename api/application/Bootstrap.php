<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    protected function _initAutoload() {
        // $db = $this->getPluginResource('db')->getDbAdapter();
        $autoloader = new Zend_Application_Module_Autoloader(array(
            'namespace' => '',
            'basePath' => dirname(__FILE__),
        ));
        return $autoloader;
    }

    protected function _initDb() {
        $resource = $this->getPluginResource('db');
        $db = $resource->getDbAdapter();
        Zend_Registry::set("db", $db);
        $db->query("SET NAMES 'utf8'");
        // Zend_Registry::set('db', $db);    
    }

    protected function _initFrontController() {
        $front = Zend_Controller_Front::getInstance();
        $front->addControllerDirectory(APPLICATION_PATH . "/controllers");

        $config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/routers.ini', 'routers');
        $router = new Zend_Controller_Router_Rewrite();

        $router = $router->addConfig($config, 'routes');

        $front->setRouter($router);

        return $front;
    }

}
