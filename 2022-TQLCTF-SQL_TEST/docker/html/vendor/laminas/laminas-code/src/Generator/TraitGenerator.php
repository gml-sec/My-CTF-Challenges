<?php

namespace Laminas\Code\Generator;

use Laminas\Code\Reflection\ClassReflection;

use function str_replace;
use function strtolower;

class TraitGenerator extends ClassGenerator
{
    public const OBJECT_TYPE = 'trait';

    /**
     * Build a Code Generation Php Object from a Class Reflection
     *
     * @return static
     */
    public static function fromReflection(ClassReflection $classReflection)
    {
        // class generator
        $cg = new static($classReflection->getName());

        $cg->setSourceContent($cg->getSourceContent());
        $cg->setSourceDirty(false);

        if ($classReflection->getDocComment() != '') {
            $cg->setDocBlock(DocBlockGenerator::fromReflection($classReflection->getDocBlock()));
        }

        // set the namespace
        if ($classReflection->inNamespace()) {
            $cg->setNamespaceName($classReflection->getNamespaceName());
        }

        $properties = [];
        foreach ($classReflection->getProperties() as $reflectionProperty) {
            if ($reflectionProperty->getDeclaringClass()->getName() == $classReflection->getName()) {
                $properties[] = PropertyGenerator::fromReflection($reflectionProperty);
            }
        }
        $cg->addProperties($properties);

        $methods = [];
        foreach ($classReflection->getMethods() as $reflectionMethod) {
            $className     = $cg->getName();
            $namespaceName = $cg->getNamespaceName();
            if ($namespaceName !== null) {
                $className = $namespaceName . '\\' . $className;
            }
            if ($reflectionMethod->getDeclaringClass()->getName() == $className) {
                $methods[] = MethodGenerator::fromReflection($reflectionMethod);
            }
        }
        $cg->addMethods($methods);

        return $cg;
    }

    /**
     * Generate from array
     *
     * @configkey name           string        [required] Class Name
     * @configkey filegenerator  FileGenerator File generator that holds this class
     * @configkey namespacename  string        The namespace for this class
     * @configkey docblock       string        The docblock information
     * @configkey properties
     * @configkey methods
     * @throws Exception\InvalidArgumentException
     * @param  array $array
     * @return static
     */
    public static function fromArray(array $array)
    {
        if (! isset($array['name'])) {
            throw new Exception\InvalidArgumentException(
                'Class generator requires that a name is provided for this object'
            );
        }

        $cg = new static($array['name']);
        foreach ($array as $name => $value) {
            // normalize key
            switch (strtolower(str_replace(['.', '-', '_'], '', $name))) {
                case 'containingfile':
                    $cg->setContainingFileGenerator($value);
                    break;
                case 'namespacename':
                    $cg->setNamespaceName($value);
                    break;
                case 'docblock':
                    $docBlock = $value instanceof DocBlockGenerator ? $value : DocBlockGenerator::fromArray($value);
                    $cg->setDocBlock($docBlock);
                    break;
                case 'properties':
                    $cg->addProperties($value);
                    break;
                case 'methods':
                    $cg->addMethods($value);
                    break;
            }
        }

        return $cg;
    }

    /**
     * @inheritDoc
     * @param int[]|int $flags
     */
    public function setFlags($flags)
    {
        return $this;
    }

    /**
     * @param int $flag
     * @return static
     */
    public function addFlag($flag)
    {
        return $this;
    }

    /**
     * @param int $flag
     * @return static
     */
    public function removeFlag($flag)
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setFinal($isFinal)
    {
        return $this;
    }

    /**
     * @param ?string $extendedClass
     * @return static
     */
    public function setExtendedClass($extendedClass)
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setImplementedInterfaces(array $implementedInterfaces)
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setAbstract($isAbstract)
    {
        return $this;
    }
}
