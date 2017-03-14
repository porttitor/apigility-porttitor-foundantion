<?php
/**
 * Created by PhpStorm.
 * User: api-ia
 * Date: 2016/12/5
 * Time: 20:03
 */
namespace ApigilityPorttitorFoundation\Base;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use Zend\ServiceManager\ServiceManager;

class ApigilityResource extends AbstractResourceListener
{
    /**
     * @var ServiceManager
     */
    protected $serviceManager;

    public function __construct(ServiceManager $services)
    {
        $this->serviceManager = $services;
    }
}
