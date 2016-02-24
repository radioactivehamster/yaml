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

    function it_should_parse_a_yaml_string()
    {
        $control = ['hello', 'world'];
        $yaml    = '[hello, world]';

        self::parse($yaml)->shouldBeLike($control);
    }

    function it_should_parse_a_yaml_file()
    {
        $control  = ['hello' => 'world'];
        $filename = __DIR__ . '/data/hello-world.yml';

        self::parseFile($filename)->shouldBeLike($control);
    }

    function it_should_throw_a_runtime_exception_if_an_invalid_filename_is_supplied_to_parse_a_yaml_file()
    {
        $invalidFile = __DIR__ . '/data/not-a-real-yaml-file.yml';

        $this->shouldThrow('RuntimeException')->duringParseFile($invalidFile);
    }
}
