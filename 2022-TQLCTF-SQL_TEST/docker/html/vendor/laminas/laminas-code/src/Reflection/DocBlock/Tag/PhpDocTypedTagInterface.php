<?php

namespace Laminas\Code\Reflection\DocBlock\Tag;

interface PhpDocTypedTagInterface
{
    /**
     * Return all types supported by the tag definition
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public function getTypes();
}
