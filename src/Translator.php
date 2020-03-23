<?php
namespace PHPTranslator\src;

use PHPTranslator\src\TranslatorException\TranslatorException;
use SimpleXMLElement;

/**
 * Class Translator
 * @package PHPTranslator\src
 * @author Nikita ( Phpesher )
 * @see
 * @license MIT
 * @api
 * @version 0.1
 */
class Translator
{
    /**
     * @author Nikita ( Phpesher )
     */
    private const APP_VERSION = '1.4';

    /**
     * Keep you Yandex secret key
     * @author Nikita ( Phpesher )
     * @see https://translate.yandex.ru/developers/keys
     * @var string
     */
    private $key;

    /**
     * Translator constructor.
     * @author Nikita ( Phpesher )
     * @param $key
     * @reutrn void
     */
    public function __construct( $key )
    {
        // Write yandex key
        $this->key= $key;
    }

    /**
     * Main method of this libary
     * @param $lFirst ( What language of translation )
     * @param $lSecond ( What language to translate )
     * @param $text
     * @return SimpleXMLElement
     * @throws TranslatorException
     * @author Nikita ( Phpesher )
     */
    public function translateText( $lFirst, $lSecond, $text )
    {
        if ( ! empty ( $lFirst ) && ! empty ( ! $lSecond ) )
        {
            if ( ! empty ( $text ) )
            {
                // We feed the language for reference
                $lang = $lFirst . '-' . $lSecond;

                // Yandex API url
                $url = "https://translate.yandex.net/api/v1.5/tr/translate?key=" . $this->key . "&lang=" . $lang . "&text=" . $text;

                // And get result
                $result = simplexml_load_file( $url );

                if ( ! empty ( $result ) )
                {
                    // Return result ( SimpleXMLElement )
                    return $result;
                } else {
                    throw new TranslatorException('Something went wrong!' );
                }
            } else {
                throw new TranslatorException('Text for translate empty!' );
            }
        } else {
            throw new TranslatorException('First or second language empty!' );
        }
    }
}