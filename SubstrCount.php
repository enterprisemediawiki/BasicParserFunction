<?php
/**
 * @author James Montalvo
 * @copyright © 2015 by James Montalvo
 * @licence GNU GPL v3+
 */

namespace BasicParserFunction;
use ParserFunctionHelper\ParserFunctionHelper;

class SubstrCount extends ParserFunctionHelper {


	// The __construct function sets up your parser function with its name,
	// parameter names and defaults
	public function __construct ( \Parser &$parser ) {

		parent::__construct(

			// this is a reference to the MediaWiki parser, and it SHOULD NOT BE CHANGED.
			$parser,

			// The name of your parser function. This should be the same as in Magic.php
			'substr_count',

			// the "ordered" parameters to your parser function. the first element of this
			// array will be the first element of the parser function, and so on. So in this
			// case in MediaWiki you'd do:
			// {{#substr_count: this-is-the-haystack | this-is-the-needle }}
			// The values along with haystack and needle are defaults
			array(
				'haystack' => '1,2,3,4,5',
				'needle' => ','
			),

			// these are "named" parameters. So you'd do something like:
			// {{#substr_count: this-is-the-haystack | this-is-the-needle | max = 50 }}
			// the above would set the max to 50 instead of the default 10
			array( 'max' => 10 )
		);

	}


	// the render function takes in the parameters you defined above and performs
	// the required logic.
	public function render ( \Parser &$parser, $params ) {

		// This parser function just uses the built in PHP function "substr_count". See
		// http://php.net/manual/en/function.substr-count.php for more info.
		// In a nutshell: we're counting how many needles in the haystack
		$numberOfNeedlesInHaystack = substr_count( $params['haystack'], $params['needle'] );

		// if the number of needles in the haystack is more than our defined maximum
		// then set it to the maximum instead
		if ( $numberOfNeedlesInHaystack > $params['max'] ) {
			$numberOfNeedlesInHaystack = $params['max'];
		}

		// return the value. This will print the output to MediaWiki
		return $numberOfNeedlesInHaystack;
	}

}