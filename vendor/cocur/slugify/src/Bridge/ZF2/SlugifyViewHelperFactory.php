<?php

namespace Cocur\Slugify\Bridge\ZF2;

use Cocur\Slugify\Slugify;
use Zend\View\HelperPluginManager;

/**
 * Class SlugifyViewHelperFactory
 * @package    cocur/slugify
 * @subpackage bridge
 * @license    http://www.opensource.org/licenses/MIT The MIT License
 */
class SlugifyViewHelperFactory
{
    /**
     * @param HelperPluginManager $vhm
     *
     * @return SlugifyViewHelper
     */
    public function __invoke($vhm)
    {
        /** @var Slugify $slugify */
<<<<<<< HEAD
        $slugify = $vhm->getServiceLocator()->get(Slugify::class);
=======
        $slugify = $vhm->getServiceLocator()->get('Cocur\Slugify\Slugify');
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c

        return new SlugifyViewHelper($slugify);
    }
}
