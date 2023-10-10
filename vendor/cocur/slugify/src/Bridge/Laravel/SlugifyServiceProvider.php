<?php

/**
 * This file is part of cocur/slugify.
 *
 * (c) Florian Eckerstorfer <florian@eckerstorfer.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocur\Slugify\Bridge\Laravel;

use Cocur\Slugify\Slugify;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * SlugifyServiceProvider
 *
 * @package    cocur/slugify
 * @subpackage bridge
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @author     Colin Viebrock
 * @copyright  2012-2014 Florian Eckerstorfer
 * @license    http://www.opensource.org/licenses/MIT The MIT License
 */
class SlugifyServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
<<<<<<< HEAD
    public function register(): void
=======
    public function register()
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        $this->app->singleton('slugify', function () {
            return new Slugify();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
<<<<<<< HEAD
    public function provides(): array
=======
    public function provides()
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        return ['slugify'];
    }
}
