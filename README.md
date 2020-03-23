# PHP-Translator

# Install 
```sh
composer require phpesher/php-translator
```

# Using
```php
$translator = new Translator('you yandex key');
$res = $translator->translateText( 'ru', 'en', 'Привет, мир!' )

print_r($res);
```
