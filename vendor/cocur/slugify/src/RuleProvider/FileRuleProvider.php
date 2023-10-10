<?php

/**
 * This file is part of cocur/slugify.
 *
 * (c) Florian Eckerstorfer <florian@eckerstorfer.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocur\Slugify\RuleProvider;

/**
 * FileRuleProvider
 *
 * @package   Cocur\Slugify\RuleProvider
 * @author    Florian Eckerstorfer
 * @copyright 2015 Florian Eckerstorfer
 */
class FileRuleProvider implements RuleProviderInterface
{
    /**
     * @var string
     */
<<<<<<< HEAD
    protected string $directoryName;
=======
    protected $directoryName;
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c

    /**
     * @param string $directoryName
     */
<<<<<<< HEAD
    public function __construct(string $directoryName)
=======
    public function __construct($directoryName)
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        $this->directoryName = $directoryName;
    }

    /**
<<<<<<< HEAD
     * @param string $ruleset
     *
     * @return array
     */
    public function getRules(string $ruleset): array
    {
        $fileName = $this->directoryName . DIRECTORY_SEPARATOR . $ruleset . '.json';
=======
     * @param $ruleset
     *
     * @return array
     */
    public function getRules($ruleset)
    {
        $fileName = $this->directoryName.DIRECTORY_SEPARATOR.$ruleset.'.json';
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c

        return json_decode(file_get_contents($fileName), true);
    }
}
