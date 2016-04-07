# dunght160387-entity
Easy steps to use dunght160387-entity:

1. Add requirement to composer.json
```
"require": {
    ...,
    "tagcade/entitybundle" : "dev-master"
},
"repositories" : [{
    "type" : "vcs",
    "url" : "https://github.com/dunght160387/dunght160387-entity.git"
}]
```
then `composer install`

1. Register bundle in AppKernel.php
```
$bundles = array(
    ...,
    new Tagcade\EntityBundle\TagcadeEntityBundle(),
);
```

1. Add prefix for bundle in autoload.php
```
$loader = require __DIR__.'/../vendor/autoload.php';
...
// new prefix here
$loader->add('Tagcade', (__DIR__.'/../vendor/tagcade/entitybundle'));
// end - new prefix
...
return $loader;
```

1. Modify config.yml for doctrine
```
doctrine:
      dbal: ...
      orm:
          ...
          entity_managers:
              default:
                  connection:         default
                  naming_strategy:    doctrine.orm.naming_strategy.underscore
                  mappings:
                      # custom entities
                      CoreEntities:
                          type:       yml
                          dir:        %kernel.root_dir%/../vendor/tagcade/entitybundle/Tagcade/EntityBundle/Resources/config/doctrine/Core
                          prefix:     Tagcade\EntityBundle\Entity\Core
                          alias:      TagcadeCoreEntity
                          is_bundle:  false
```

1. Update schema and enjoy
```
php app/console doctrine:schema:update --dump-sql
```

---
Great working!!!
---
