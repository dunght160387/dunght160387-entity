<?php

namespace Tagcade\EntityBundle\Model\Core;


interface EntityTestInterface
{
    /**
     * @return string|null
     */
    public function getName();

    /**
     * @param string $name
     * @return self
     */
    public function setName($name);
}