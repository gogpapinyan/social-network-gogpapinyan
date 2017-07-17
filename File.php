<?php

class File
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getHandle()
    {
        return fopen($this->filename, "r");
    }

    public function explodeRow($handle)
    {
        $row = fgets($handle);
        return explode(" ", $row);
    }

    public function isEndOfFile($handle)
    {
        return feof($handle);
    }

    public function closeHandle($handle)
    {
        fclose($handle);
    }
}