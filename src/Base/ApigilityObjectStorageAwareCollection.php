<?php
/**
 * Created by PhpStorm.
 * User: api-ia
 * Date: 2016/12/8
 * Time: 13:50
 */
namespace ApigilityPorttitorFoundation\Base;

use Zend\ServiceManager\ServiceManager;

abstract class ApigilityObjectStorageAwareCollection extends ApigilityCollection
{
    protected $serviceManager;

    public function __construct($adapter, ServiceManager $services)
    {
        parent::__construct($adapter);
        $this->serviceManager = $services;
    }

    protected function createItem($item)
    {
        return new $this->itemType($item, $this->serviceManager);
    }
}
