<?php
declare(strict_types=1);

namespace App\LiveCoding\Generators;

use Exception;
use Generator;

class BigFileReaderGenerator
{
    public function readBigFile(string $file): Generator
    {
        if (!file_exists($file)) {
            throw new Exception('Файл не существует ' . $file);
        }

        $fileOpen = fopen($file, 'r'); // resource
        if ($fileOpen === false) {
            throw new Exception('Не удалось открыть файл ' . $file);
        }

        try {
            while (($line = fgets($fileOpen)) !== false) {
                yield trim($line);
            }
        } finally {
            fclose($fileOpen);
        }
    }
}