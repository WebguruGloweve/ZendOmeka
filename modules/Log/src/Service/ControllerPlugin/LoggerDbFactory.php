<?php
namespace Log\Service\ControllerPlugin;

use Interop\Container\ContainerInterface;
use Omeka\Mvc\Controller\Plugin\Logger;
use Zend\ServiceManager\Factory\FactoryInterface;

class LoggerDbFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        return new Logger($services->get('Log\LoggerDb'));
    }
}
