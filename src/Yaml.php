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

    /**
     * Parse a YAML file into an object or array.
     *
     * @param string $filename
     * @return mixed
     * @throws RuntimeException
     */
    public static function parseFile($filename)
    {
        $file = new SplFileInfo($filename);

        if (!$file->isFile()) {
            throw new RuntimeException('Invalid filename supplied for `RadHam\Yaml::parseFile()`.');
        }

        $contents = file_get_contents($file->getPathname());

        return self::parse($contents);
    }
}
