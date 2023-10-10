<?php

namespace Cocur\Slugify\Bridge\ZF2;

use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

/**
 * Class Module
 * @package    cocur/slugify
 * @subpackage bridge
 * @license    http://www.opensource.org/licenses/MIT The MIT License
 */
class Module implements ServiceProviderInterface, ViewHelperProviderInterface
{
    const CONFIG_KEY = 'cocur_slugify';

    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array<string,array<string,string>>
     */
<<<<<<< HEAD
    public function getServiceConfig(): array
=======
    public function getServiceConfig()
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        return [
            'factories' => [
                'Cocur\Slugify\Slugify' => 'Cocur\Slugify\Bridge\ZF2\SlugifyService'
            ],
            'aliases' => [
                'slugify' => 'Cocur\Slugify\Slugify'
            ]
        ];
    }

    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array<string,array<string,string>>|\Zend\ServiceManager\Config
     */
<<<<<<< HEAD
    public function getViewHelperConfig(): array
=======
    public function getViewHelperConfig()
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        return [
            'factories' => [
                'slugify' => 'Cocur\Slugify\Bridge\ZF2\SlugifyViewHelperFactory'
            ]
        ];
    }
}
