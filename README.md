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

Per the installation instructions, you should have added the following to your LocalSettings.php file: 

```php
require_once "$IP/extensions/BasicParserFunction/BasicParserFunction.php";
```

What this does is tell MediaWiki to load the main file of your extension. This main file is where we'll start. It performs six functions:

1. Tell the file to exit if it isn't being accessed properly
2. Provide credits for the extension (name, authors, URL, etc) to MediaWiki
3. Tell MediaWiki the name of your parser function(s) in a variety of languages
4. Give MediaWiki any other translated or translatable text for use in your extension
5. Tell MediaWiki where to find the file(s) associated with your parser function(s)
6. Tell MediaWiki to automatically load any files associated with your parser function(s)

