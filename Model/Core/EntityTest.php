<?php

namespace Tagcade\EntityBundle\Model\Core;


class EntityTest implements EntityTestInterface
{
    protected $id;
    protected $name;

    function __construct()
    {
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @inheritdoc
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}