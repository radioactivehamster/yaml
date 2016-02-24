YAML
====
> An extended variant of the Symfony PHP YAML library.

[![Packagist Version][PACKAGIST VERSION BADGE]][PACKAGIST PAGE] [![GitHub license][LICENSE BADGE]][LICENSE PAGE] [![Build Status][BUILD BADGE]][BUILD PAGE]

Install
-------
```sh
$ composer require radioactivehamster/yaml
```

Usage
-----
```php
<?php

use RadHam\Yaml;

$yaml = '[hello, world]';
$data = Yaml::parse($yaml)

$file = 'hello-world.yml';
Yaml::parseFile($file);
```

License
-------
The MIT License (Expat). See the [license file](LICENSE) for details.

[BUILD BADGE]:https://travis-ci.org/radioactivehamster/yaml.svg?branch=master
[BUILD PAGE]: https://travis-ci.org/radioactivehamster/yaml
[LICENSE BADGE]: https://img.shields.io/github/license/radioactivehamster/yaml.svg
[LICENSE PAGE]: https://github.com/radioactivehamster/yaml/blob/master/LICENSE
[PACKAGIST PAGE]: https://packagist.org/packages/radioactivehamster/yaml
[PACKAGIST VERSION BADGE]: https://img.shields.io/packagist/v/radioactivehamster/yaml.svg
