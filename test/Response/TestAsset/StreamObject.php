<?php

namespace LaminasTest\Http\Response\TestAsset;

class StreamObject
{
    /** @var string */
    private $tempFile;

    /** @param string $tempFile */
    public function __construct($tempFile)
    {
        $this->tempFile = $tempFile;
    }

    public function __toString()
    {
        return $this->tempFile;
    }
}
