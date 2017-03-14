<?php
/**
 * Created by PhpStorm.
 * User: api-ia
 * Date: 2016/12/6
 * Time: 15:15
 */
namespace ApigilityPorttitorFoundation\Base;

use Zend\EventManager\EventManager;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\EventManager\EventManagerInterface;

abstract class ApigilityEventAwareObject implements EventManagerAwareInterface
{
    protected $events;
    protected $eventManager;

    public function setEventManager(EventManagerInterface $events)
    {
        $events->setIdentifiers([
            __CLASS__,
            get_called_class(),
        ]);
        $this->events = $events;
        return $this;
    }

    public function getEventManager()
    {
        if (null === $this->events) {
            $this->setEventManager(new EventManager());
        }
        return $this->events;
    }
}
