<?php

namespace Cocur\Slugify\Bridge\Latte;

use Cocur\Slugify\SlugifyInterface;

/**
 * SlugifyHelper
 *
 * @package    cocur/slugify
 * @subpackage bridge
 * @author     Lukáš Unger <looky.msc@gmail.com>
 * @license    http://www.opensource.org/licenses/MIT The MIT License
 */
class SlugifyHelper
{
    /** @var SlugifyInterface */
    private $slugify;

    /**
     * @codeCoverageIgnore
     */
    public function __construct(SlugifyInterface $slugify)
    {
        $this->slugify = $slugify;
    }

    /**
     * @param string      $string
     * @param string|null $separator
     *
     * @return string
     */
<<<<<<< HEAD
    public function slugify($string, $separator = null): string
=======
    public function slugify($string, $separator = null)
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        return $this->slugify->slugify($string, $separator);
    }
}
