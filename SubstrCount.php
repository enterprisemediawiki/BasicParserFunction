<?php
/**
 * @author James Montalvo
 * @copyright © 2015 by James Montalvo
 * @licence GNU GPL v3+
 */

namespace BasicParserFunction;
use ParserFunctionHelper\ParserFunctionHelper;

class SubstrCount extends ParserFunctionHelper {


	public function __construct ( \Parser &$parser ) {

		parent::__construct(
			$parser,
			'substr_count',
			array( 'haystack' => '1,2,3,4,5', 'needle' => ',' ),
			array( 'max' => 10 )
		);

	}

	public function render ( \Parser &$parser, $params ) {
		$numberOfNeedlesInHaystack = substr_count( $params['haystack'], $params['needle'] );

		if ( $numberOfNeedlesInHaystack > $params['max'] ) {
			$numberOfNeedlesInHaystack = $params['max'];
		}

		return $numberOfNeedlesInHaystack;
	}

}