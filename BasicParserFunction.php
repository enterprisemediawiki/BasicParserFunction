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


# The code below causes this file to stop running if the MEDIAWIKI "constant"
# is not set. This "constant" is set each time a MediaWiki page is requested,
# so if it is not set then this file is not being used properly and should quit
if ( ! defined( 'MEDIAWIKI' ) ) {
	die( 'BasicParserFunction extension' );
}


# The code below sets some information about the extension. See the following
# URL for more info on the wgExtensionCredits variable:
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


# File that defines the name of your parser function in a variety of languages
$GLOBALS['wgExtensionMessagesFiles']['BasicParserFunctionMagic'] = __DIR__ . '/Magic.php';


# Tell MediaWiki the location of your "messages" directory.
$GLOBALS['wgMessagesDirs']['BasicParserFunction'] = __DIR__ . '/i18n';


# Define a new parser function class for ParserFunctionHelper to setup
$GLOBALS['egParserFunctionHelperClasses'][] = 'BasicParserFunction\SubstrCount';


# Tell MediaWiki where your parser function class is
$GLOBALS['wgAutoloadClasses']['BasicParserFunction\SubstrCount'] = __DIR__ . '/SubstrCount.php';
