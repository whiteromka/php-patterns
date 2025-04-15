<?php
declare(strict_types=1);

namespace App\LiveCoding\Generators;

use Exception;
use Generator;

class BigFileReader
{
    public function readBigFile(string $file): void
    {
        if (!file_exists($file)) {
            throw new Exception('Файл не существует ' . $file);
        }

        $content = file_get_contents($file);
        echo $content;
    }
}