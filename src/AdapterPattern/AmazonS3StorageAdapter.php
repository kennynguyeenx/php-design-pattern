<?php

namespace Kennynguyeenx\DesignPattern\AdapterPattern;

/**
 * Class AmazonS3StorageAdapter
 * @package Kennynguyeenx\DesignPattern\AdapterPattern
 */
class AmazonS3StorageAdapter extends AbstractStorage
{
    /**
     * @var ExternalLibForAmazonS3
     */
    private $externalLibForAmazonS3;

    /**
     * AmazonS3StorageAdapter constructor.
     * @param ExternalLibForAmazonS3 $externalLibForAmazonS3
     */
    public function __construct(ExternalLibForAmazonS3 $externalLibForAmazonS3)
    {
        $this->externalLibForAmazonS3 = $externalLibForAmazonS3;
    }

    /**
     * @param string $data
     * @param string $path
     * @return bool
     */
    public function save(string $data, string $path): bool
    {
        return $this->externalLibForAmazonS3->saveObject($data, $path);
    }

    /**
     * @param string $path
     * @return string
     */
    public function load(string $path): string
    {
        return $this->externalLibForAmazonS3->loadObject($path);
    }

    /**
     * @param string $path
     * @return bool
     */
    public function delete(string $path): bool
    {
        return $this->externalLibForAmazonS3->deleteObject($path);
    }
}