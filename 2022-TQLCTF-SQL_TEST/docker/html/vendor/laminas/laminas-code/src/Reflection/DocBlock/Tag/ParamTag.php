<?php

namespace Laminas\Code\Reflection\DocBlock\Tag;

use function explode;
use function preg_match;
use function preg_replace;
use function trim;

class ParamTag implements TagInterface, PhpDocTypedTagInterface
{
    /**
     * @var string[]
     * @psalm-return list<string>
     */
    protected $types = [];

    /** @var string */
    protected $variableName;

    /** @var string */
    protected $description;

    /**
     * @return string
     */
    public function getName()
    {
        return 'param';
    }

    /**
     * Initializer
     *
     * @param  string $tagDocBlockLine
     */
    public function initialize($tagDocBlockLine)
    {
        $matches = [];

        if (! preg_match('#((?:[\w|\\\]+(?:\[\])*\|?)+)(?:\s+(\$\S+))?(?:\s+(.*))?#s', $tagDocBlockLine, $matches)) {
            return;
        }

        $this->types = explode('|', $matches[1]);

        if (isset($matches[2])) {
            $this->variableName = $matches[2];
        }

        if (isset($matches[3])) {
            $this->description = trim(preg_replace('#\s+#', ' ', $matches[3]));
        }
    }

    /**
     * Get parameter variable type
     *
     * @deprecated 2.0.4 use getTypes instead
     *
     * @return string
     */
    public function getType()
    {
        if (empty($this->types)) {
            return '';
        }

        return $this->types[0];
    }

    /** {@inheritDoc} */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Get parameter name
     *
     * @return string
     */
    public function getVariableName()
    {
        return $this->variableName;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
