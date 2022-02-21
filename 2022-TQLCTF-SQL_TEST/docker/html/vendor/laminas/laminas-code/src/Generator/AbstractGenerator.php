<?php

namespace Laminas\Code\Generator;

use Traversable;

use function get_class;
use function gettype;
use function is_array;
use function is_object;
use function method_exists;
use function sprintf;

abstract class AbstractGenerator implements GeneratorInterface
{
    /**
     * Line feed to use in place of EOL
     */
    public const LINE_FEED = "\n";

    protected bool $isSourceDirty = true;

    /** @var string 4 spaces by default */
    protected string $indentation = '    ';

    /**
     * TODO: Type should be changed to "string" in the next major version. Nullable for BC
     */
    protected ?string $sourceContent = null;

    /**
     * @param  array $options
     */
    public function __construct($options = [])
    {
        if ($options) {
            $this->setOptions($options);
        }
    }

    /**
     * @param  bool $isSourceDirty
     * @return AbstractGenerator
     */
    public function setSourceDirty($isSourceDirty = true)
    {
        $this->isSourceDirty = (bool) $isSourceDirty;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSourceDirty()
    {
        return $this->isSourceDirty;
    }

    /**
     * @param  string $indentation
     * @return AbstractGenerator
     */
    public function setIndentation($indentation)
    {
        $this->indentation = (string) $indentation;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndentation()
    {
        return $this->indentation;
    }

    /**
     * @param  ?string $sourceContent
     * @return AbstractGenerator
     */
    public function setSourceContent($sourceContent)
    {
        $this->sourceContent = (string) $sourceContent;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getSourceContent()
    {
        return $this->sourceContent;
    }

    /**
     * @param  array|Traversable $options
     * @throws Exception\InvalidArgumentException
     * @return AbstractGenerator
     */
    public function setOptions($options)
    {
        if (! is_array($options) && ! $options instanceof Traversable) {
            throw new Exception\InvalidArgumentException(sprintf(
                '%s expects an array or Traversable object; received "%s"',
                __METHOD__,
                is_object($options) ? get_class($options) : gettype($options)
            ));
        }

        foreach ($options as $optionName => $optionValue) {
            $methodName = 'set' . $optionName;
            if (method_exists($this, $methodName)) {
                $this->{$methodName}($optionValue);
            }
        }

        return $this;
    }
}
