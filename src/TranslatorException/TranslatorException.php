<?php
namespace PHPTranslator\src\TranslatorException;

use Throwable;

/**
 * Class TranslatorException
 * @package PHPTranslator\src\TranslatorException
 * @author Nikita ( Phpesher )
 * @api
 */
class TranslatorException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct( $message, $code, $previous );
    }
}