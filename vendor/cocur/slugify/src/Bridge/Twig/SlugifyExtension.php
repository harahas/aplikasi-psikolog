<?php

/**
 * This file is part of cocur/slugify.
 *
 * (c) Florian Eckerstorfer <florian@eckerstorfer.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocur\Slugify\Bridge\Twig;

use Cocur\Slugify\SlugifyInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * SlugifyExtension
 *
 * @package    cocur/slugify
 * @subpackage bridge
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012-2015 Florian Eckerstorfer
 * @license    http://www.opensource.org/licenses/MIT The MIT License
 */
class SlugifyExtension extends AbstractExtension
{
    /**
     * @var SlugifyInterface
     */
    private $slugify;

    /**
     * Constructor.
     *
     * @param SlugifyInterface $slugify
     *
     * @codeCoverageIgnore
     */
    public function __construct(SlugifyInterface $slugify)
    {
        $this->slugify = $slugify;
    }

    /**
     * Returns the Twig functions of this extension.
     *
     * @return TwigFilter[]
     */
<<<<<<< HEAD
    public function getFilters(): array
=======
    public function getFilters()
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        return [
            new TwigFilter('slugify', [$this, 'slugifyFilter']),
        ];
    }

    /**
     * Slugify filter.
     *
     * @param string      $string
     * @param string|null $separator
     *
     * @return string
     */
<<<<<<< HEAD
    public function slugifyFilter($string, $separator = null): string
=======
    public function slugifyFilter($string, $separator = null)
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        return $this->slugify->slugify($string, $separator);
    }

    /**
     * get Name
     *
     * @return string
     */
<<<<<<< HEAD
    public function getName(): string
=======
    public function getName()
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        return "SlugifyExtension";
    }
}
