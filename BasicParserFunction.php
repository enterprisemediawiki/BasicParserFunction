<?php
/** 
 * This extension demonstrates a very basic implementation of a MediaWiki
 * parser function using the ParserFunctionHelper extension. This extension
 * depends on the ParserFunctionHelper extension
 * 
 * Documentation, support, source code:
 * https://github.com/jamesmontalvo3/BasicParserFunction
 *
 * @author James Montalvo
 * @copyright © 2015 by James Montalvo
 * @licence GNU GPL v3+
 */


# This text is another type of comment. See the following URL if you don't know
# what that means. http://php.net/manual/en/language.basic-syntax.comments.php


# The code below causes this file to stop running if the MEDIAWIKI "constant"
# is not set. This "constant" is set each time a MediaWiki page is requested,
# so if it is not set then this file is not being used properly and should quit
if ( ! defined( 'MEDIAWIKI' ) ) {
	die( 'MiscParserFunctions extension' );
}


# FIXME: maybe read about "messsages

# The code below sets some information about the extension. Each field is
# described below:
#
#   path: The path to this file. Don't change this.
#   name: The name of your extension.
#   namemsg: The name of your extension as shown in your "messages" files.
#       "Messages" are a way for MediaWiki to be easy to translate. Basically
#       you'll create a i18n/en.json file with a bunch of translate-able text
#       in it. See the following links for more info:
#       https://www.mediawiki.org/wiki/Help:System_message
#       https://www.mediawiki.org/wiki/Localisation
#   url: The URL where people can get more info about your extension
#   author: Your name
#   descriptionmsg: This is the "message" which includes a description of your
#       extension. make sure to update the file "i18n/en.json" with the proper
#       message below
#   version: The version number of your extension
#
# See the following URL for more info on the wgExtensionCredits variable:
# https://www.mediawiki.org/wiki/Manual:$wgExtensionCredits
$GLOBALS['wgExtensionCredits']['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'BasicParserFunction',
	'namemsg'        => 'basicparserfunction-name',
	'url'            => 'http://github.com/jamesmontalvo3/BasicParserFunction',
	'author'         => 'James Montalvo',
	'descriptionmsg' => 'basicparserfunction-desc',
	'version'        => '0.1.0'
);

# Tell MediaWiki the location of your "messages" directory. This is almost
# always in the "i18n" directory within your extension's directory.
$GLOBALS['wgMessagesDirs']['BasicParserFunction'] = __DIR__ . '/i18n';

# Location that defines the name of your parser function. 
$GLOBALS['wgExtensionMessagesFiles']['BasicParserFunctionMagic'] = __DIR__ . '/Magic.php';

// Autoload for setup
$GLOBALS['wgAutoloadClasses']['BasicParserFunction\Setup'] = __DIR__ . '/includes/Setup.php';

// Autoload for each parser function
$GLOBALS['wgAutoloadClasses']['BasicParserFunction\SubstrCount'] = __DIR__ . '/includes/SubstrCount.php';

// Setup parser functions
$GLOBALS['wgHooks']['ParserFirstCallInit'][] = 'BasicParserFunction\Setup::setupParserFunctions';
