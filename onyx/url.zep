
/*
 +------------------------------------------------------------------------+
 | Phalcon Framework                                                      |
 +------------------------------------------------------------------------+
 | Copyright (c) 2011-2017 Phalcon Team (https://phalconphp.com)          |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file LICENSE.txt.                             |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to license@phalconphp.com so we can send you a copy immediately.       |
 +------------------------------------------------------------------------+
 | Authors: Andres Gutierrez <andres@phalconphp.com>                      |
 |          Eduar Carvajal <eduar@phalconphp.com>                         |
 +------------------------------------------------------------------------+
 Comment
 */

 use std;
namespace Onyx;


class Url
{

	protected _dependencyInjector;

	protected _baseUri = null;

	protected _staticBaseUri = null;

	protected _basePath = null;

	protected _router;


	/**
	 * Returns the prefix for all the generated urls. By default /
	 */
	public function getBaseUri() -> string
	{
		var baseUri, phpSelf, uri;

		let baseUri = this->_baseUri;
		if baseUri === null {

			if fetch phpSelf, _SERVER["PHP_SELF"] {
				let uri = phalcon_get_uri(phpSelf);
			} else {
				let uri = null;
			}

			if !uri {
				let baseUri = "/";
			} else {
				let baseUri = "/" . uri ."/";
			}

			let this->_baseUri = baseUri;
		}
		return baseUri;
	}

	
}
