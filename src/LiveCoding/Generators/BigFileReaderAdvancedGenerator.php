<?php
declare(strict_types=1);

namespace App\LiveCoding\Generators;

use Exception;
use Generator;

class BigFileReaderAdvancedGenerator
{
    public function readBigFile(string $filePath, int $bufferSize = 8192): Generator
    {
        if (!is_readable($filePath)) {
            throw new Exception("Файл недоступен для чтения: $filePath");
        }

        $file = fopen($filePath, 'rb'); // 'b' для бинарного режима (быстрее на некоторых системах)
        if ($file === false) {
            throw new Exception("Ошибка открытия файла: $filePath");
        }

        try {
            while (!feof($file)) {
                $chunk = fread($file, $bufferSize);
                $lines = explode("\n", $chunk);

                foreach ($lines as $line) {
                    if ($line !== '') {
                        yield trim($line);
                    }
                }
            }
        } finally {
            fclose($file);
        }
    }
}