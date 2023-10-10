<?php

/**
 * This file is part of cocur/slugify.
 *
 * (c) Florian Eckerstorfer <florian@eckerstorfer.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocur\Slugify;

use Cocur\Slugify\RuleProvider\DefaultRuleProvider;
use Cocur\Slugify\RuleProvider\RuleProviderInterface;

/**
 * Slugify
 *
 * @package   Cocur\Slugify
 * @author    Florian Eckerstorfer <florian@eckerstorfer.co>
 * @author    Ivo Bathke <ivo.bathke@gmail.com>
 * @author    Marchenko Alexandr
 * @copyright 2012-2015 Florian Eckerstorfer
 * @license   http://www.opensource.org/licenses/MIT The MIT License
 */
class Slugify implements SlugifyInterface
{
<<<<<<< HEAD
    public const LOWERCASE_NUMBERS_DASHES = '/[^A-Za-z0-9]+/';
=======
    const LOWERCASE_NUMBERS_DASHES = '/[^A-Za-z0-9]+/';
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c

    /**
     * @var array<string,string>
     */
<<<<<<< HEAD
    protected array $rules = [];
=======
    protected $rules = [];
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c

    /**
     * @var RuleProviderInterface
     */
<<<<<<< HEAD
    protected RuleProviderInterface $provider;
=======
    protected $provider;
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c

    /**
     * @var array<string,mixed>
     */
<<<<<<< HEAD
    protected array $options = [
=======
    protected $options = [
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
        'regexp'    => self::LOWERCASE_NUMBERS_DASHES,
        'separator' => '-',
        'lowercase' => true,
        'lowercase_after_regexp' => false,
        'trim' => true,
        'strip_tags' => false,
        'rulesets'  => [
            'default',
            // Languages are preferred if they appear later, list is ordered by number of
            // websites in that language
            // https://en.wikipedia.org/wiki/Languages_used_on_the_Internet#Content_languages_for_websites
            'armenian',
            'azerbaijani',
            'burmese',
            'hindi',
            'georgian',
            'norwegian',
            'vietnamese',
            'ukrainian',
            'latvian',
            'finnish',
            'greek',
            'czech',
            'arabic',
            'slovak',
            'turkish',
            'polish',
            'german',
            'russian',
            'romanian'
        ],
    ];

    /**
     * @param array                 $options
     * @param RuleProviderInterface $provider
     */
    public function __construct(array $options = [], RuleProviderInterface $provider = null)
    {
        $this->options  = array_merge($this->options, $options);
        $this->provider = $provider ? $provider : new DefaultRuleProvider();

        foreach ($this->options['rulesets'] as $ruleSet) {
            $this->activateRuleSet($ruleSet);
        }
    }

    /**
     * Returns the slug-version of the string.
     *
     * @param string            $string  String to slugify
     * @param string|array|null $options Options
     *
     * @return string Slugified version of the string
     */
<<<<<<< HEAD
    public function slugify(string $string, array|string|null $options = null): string
=======
    public function slugify(string $string, $options = null): string
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        // BC: the second argument used to be the separator
        if (is_string($options)) {
            $separator            = $options;
            $options              = [];
            $options['separator'] = $separator;
        }

        $options = array_merge($this->options, (array) $options);

        // Add a custom ruleset without touching the default rules
        if (isset($options['ruleset'])) {
            $rules = array_merge($this->rules, $this->provider->getRules($options['ruleset']));
        } else {
            $rules = $this->rules;
        }

        $string = ($options['strip_tags'])
            ? strip_tags($string)
            : $string;

        $string = strtr($string, $rules);
        unset($rules);

        if ($options['lowercase'] && !$options['lowercase_after_regexp']) {
            $string = mb_strtolower($string);
        }

        $string = preg_replace($options['regexp'], $options['separator'], $string);

        if ($options['lowercase'] && $options['lowercase_after_regexp']) {
            $string = mb_strtolower($string);
        }

        return ($options['trim'])
            ? trim($string, $options['separator'])
            : $string;
    }

    /**
     * Adds a custom rule to Slugify.
     *
     * @param string $character   Character
     * @param string $replacement Replacement character
     *
     * @return Slugify
     */
<<<<<<< HEAD
    public function addRule($character, $replacement): self
=======
    public function addRule($character, $replacement)
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        $this->rules[$character] = $replacement;

        return $this;
    }

    /**
     * Adds multiple rules to Slugify.
     *
     * @param array <string,string> $rules
     *
     * @return Slugify
     */
<<<<<<< HEAD
    public function addRules(array $rules): self
=======
    public function addRules(array $rules)
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        foreach ($rules as $character => $replacement) {
            $this->addRule($character, $replacement);
        }

        return $this;
    }

    /**
     * @param string $ruleSet
     *
     * @return Slugify
     */
<<<<<<< HEAD
    public function activateRuleSet($ruleSet): self
=======
    public function activateRuleSet($ruleSet)
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        return $this->addRules($this->provider->getRules($ruleSet));
    }

    /**
     * Static method to create new instance of {@see Slugify}.
     *
     * @param array <string,mixed> $options
     *
     * @return Slugify
     */
<<<<<<< HEAD
    public static function create(array $options = []): self
=======
    public static function create(array $options = [])
>>>>>>> 6bdbc33dff69e834385e05134dea9b68775ad77c
    {
        return new static($options);
    }
}
