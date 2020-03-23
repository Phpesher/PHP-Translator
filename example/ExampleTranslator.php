<?php
require_once '../vendor/autoload.php';

use PHPTranslator\src\Translator;

$translator = new Translator('YOU KEY');

try {
    echo $translator->translateText( 'ru', 'en', 'Яблоки у бабушки на даче были очень вкусные!' );
} catch ( \PHPTranslator\src\TranslatorException\TranslatorException $e ) {
    echo $e->getMessage();
}


