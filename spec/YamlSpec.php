<?php

namespace spec\RadHam;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class YamlSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RadHam\Yaml');
    }

    function it_should_parse_a_yaml_file()
    {
        $control  = (object) ['hello' => 'world'];
        $filename = __DIR__ . '/data/hello-world.yml';

        $this::parseFile($filename)->shouldBeLike($control);
    }
}
