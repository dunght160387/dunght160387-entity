<?php

namespace Tagcade\EntityBundle\Entity\Core;

use Tagcade\EntityBundle\Model\Core\EntityTest as EntityTestModel;

class EntityTest extends EntityTestModel
{
    protected $id;
    protected $name;

    public function __construct()
    {
        parent::__construct();
    }
}