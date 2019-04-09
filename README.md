# PHP-Autoloader
This library helps to autoload php files in a project. 

Please Note: this library is not for projects which uses the composer.

## Usage
```php
require_once 'Autoloader.php';
$autoload_dir = 'Path/To/Directory/To/Autoload';
Autoloader::runAutoloader($autoload_dir);
```
If you do not present a parameter to the __runAutoloader__ function the default parameter well be __\_\_DIR____

[![Donate](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WPDZYBK6E4ZAG&source=url)
