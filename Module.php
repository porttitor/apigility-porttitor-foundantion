<?php
/**
 * Created by PhpStorm.
 * User: api-ia
 * Date: 2016/11/15
 * Time: 11:01
 */
namespace ApigilityPorttitorFoundation;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Config\Config;

class Module implements AutoloaderProviderInterface
{
    public function getConfig()
    {
        $module_config = new Config(include __DIR__ . '/config/module.config.php');

        return $module_config;
    }

    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src',
                ],
            ],
        ];
    }
}
