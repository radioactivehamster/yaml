<?php

namespace RadHam;

use RuntimeException;
use SplFileInfo;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml as SymfonyYaml;

class Yaml
{
    /**
     * Parse YAML into an object or array.
     *
     * @param  string $yaml
     * @throws ParseException
     * @return mixed
     */
    public static function parse($yaml)
    {
        return SymfonyYaml::parse(
            $yaml,
            $exceptionOnInvalidType = true,
            $objectSupport          = true,
            $objectForMap           = false
        );
    }

    /**
     * Parse a YAML file into an object or array.
     *
     * @param  string $filename
     * @throws RuntimeException
     * @return mixed
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
