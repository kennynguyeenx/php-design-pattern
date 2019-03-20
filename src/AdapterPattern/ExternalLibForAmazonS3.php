<?php

namespace Kennynguyeenx\DesignPattern\AdapterPattern;

/**
 * Class ExternalLibForAmazonS3
 * @package Kennynguyeenx\DesignPattern\AdapterPattern
 */
class ExternalLibForAmazonS3
{
    /**
     * @param string $objectPath
     * @return string
     */
    public function loadObject(string $objectPath)
    {
        printf('Load object with path: ' . $objectPath . ' from amazon S3' . PHP_EOL);
        // Do really load object and return it
        return 'Data of ' . $objectPath;
    }

    /**
     * @param string $data
     * @param string $objectPath
     * @return bool
     */
    public function saveObject(string $data, string $objectPath)
    {
        printf('Save object with data: ' . $data . ' to path: ' . $objectPath . ' in amazon S3' . PHP_EOL);
        // Do really save object and return result ok or error
        return true;
    }

    /**
     * @param string $objectPath
     * @return bool
     */
    public function deleteObject(string $objectPath)
    {
        printf('Delete object with path: ' . $objectPath . ' in amazon S3' . PHP_EOL);
        // Do really delete object and return result ok or error
        return true;
    }
}