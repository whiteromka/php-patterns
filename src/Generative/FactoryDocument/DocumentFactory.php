<?php

namespace App\Generative\FactoryDocument;

use http\Exception\InvalidArgumentException;

class DocumentFactory
{
    public static function createDocument(string $type): IDocument
    {
        return match ($type) {
            'pdf' => new PdfDocument(),
            //'word' => '....'
            default => throw new InvalidArgumentException('Нет такого типа документов')
        };
    }
}