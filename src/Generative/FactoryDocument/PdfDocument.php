<?php

namespace App\Generative\FactoryDocument;

class PdfDocument implements IDocument
{
    public function showText()
    {
        echo 'показывает PDF документ!';
    }
}