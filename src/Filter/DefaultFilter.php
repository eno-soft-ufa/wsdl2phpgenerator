<?php
namespace EnoWsdl2PhpGenerator\Filter;


use EnoWsdl2PhpGenerator\Service;

/**
 * Default filter implementation.
 *
 * It does not do anything.
 */
class DefaultFilter implements FilterInterface
{
    /**
     * @inheritdoc
     */
    public function filter(Service $service)
    {
        return $service;
    }
}
