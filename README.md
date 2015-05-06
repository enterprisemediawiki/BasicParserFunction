BasicParserFunction: A ParserFunctionHelper tutorial
====================================================

The ParserFunctionHelper MediaWiki extension is designed to make creating parser functions as simple as possible. This extension, the BasicParserFunction extension, is designed as a basic framework and tutorial for how to use the ParserFunctionHelper extension.

Installation
------------

1. Download the ParserFunctionHelper extension from https://github.com/enterprisemediawiki/ParserFunctionHelper and put the "ParserFunctionHelper" directory into your MediaWiki "extensions" directory.
2. Download this extension (BasicParserFunction) and put the "BasicParserFunction" directory into your MediaWiki "extensions" directory.
3. Add the following code at the bottom of your LocalSettings.php:
```php
require_once "$IP/extensions/ParserFunctionHelper/ParserFunctionHelper.php";
require_once "$IP/extensions/BasicParserFunction/BasicParserFunction.php";
```

Tutorial
--------
See https://github.com/enterprisemediawiki/ParserFunctionHelper
