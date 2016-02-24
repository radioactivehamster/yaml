<?php

namespace RadHam;

use RuntimeException;
use SplFileInfo;
use Symfony\Component\Yaml\Yaml as SymfonyYaml;

class Yaml
{
    public static function parse($yaml)
    {
        return SymfonyYaml::parse(
            $yaml,
            $exceptionOnInvalidType = true,
            $objectSupport          = true,
            $objectForMap           = true
        );
    }

    public static function parseFile($filename)
    {
        $file     = new SplFileInfo($filename);
        $contents = file_get_contents($file->getPathname());

        return self::parse($contents);
    }
}
