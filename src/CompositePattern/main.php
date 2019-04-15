<?php

use Kennynguyeenx\DesignPattern\CompositePattern\File;
use Kennynguyeenx\DesignPattern\CompositePattern\Folder;

require __DIR__ . '/../../vendor/autoload.php';

try {
    $parentFolder = new Folder('Parent Folder', []);
    $file1 = new File('File 1', 14);
    $file2 = new File('File 2', 12);
    $file3 = new File('File 3', 15);
    $childrenFolder = new Folder('Children folder', []);
    $childrenFolder->addItem($file1);
    $childrenFolder->addItem($file2);
    $parentFolder->addItem($childrenFolder);
    $parentFolder->addItem($file3);

    printf('Parent folder has size: ' . $parentFolder->getSizeInByte() . ' bytes' . PHP_EOL);
    $parentFolder->removeItem($file3);
    printf('After removing file3, Parent folder has size: ' . $parentFolder->getSizeInByte() . ' bytes' . PHP_EOL);
} catch (Exception $exception) {
    printf($exception->getMessage() . PHP_EOL);
}
