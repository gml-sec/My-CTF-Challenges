<?php

namespace Laminas\Code\Reflection\DocBlock\Tag;

use function explode;
use function preg_match;
use function preg_replace;
use function trim;

class ReturnTag implements TagInterface, PhpDocTypedTagInterface
{
    /** @var array */
    protected $types = [];

    /** @var string */
    protected $description;

    /**
     * @return string
     */
    public function getName()
    {
        return 'return';
    }

    /**
     * @param  string $tagDocBlockLine
     * @return void
     */
    public function initialize($tagDocBlockLine)
    {
        $matches = [];
        if (! preg_match('#((?:[\w|\\\]+(?:\[\])*\|?)+)(?:\s+(.*))?#s', $tagDocBlockLine, $matches)) {
            return;
        }

        $this->types = explode('|', $matches[1]);

        if (isset($matches[2])) {
            $this->description = trim(preg_replace('#\s+#', ' ', $matches[2]));
        }
    }

    /**
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
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
