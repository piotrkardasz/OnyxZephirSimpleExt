
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/memory.h"
#include "kernel/object.h"
#include "kernel/operators.h"
#include "kernel/array.h"
#include "kernel/concat.h"
#include "onyx/utils.h"


ZEPHIR_INIT_CLASS(Onyx_Url) {

	ZEPHIR_REGISTER_CLASS(Onyx, Url, onyx, url, onyx_url_method_entry, 0);

	zend_declare_property_null(onyx_url_ce, SL("_dependencyInjector"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(onyx_url_ce, SL("_baseUri"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(onyx_url_ce, SL("_staticBaseUri"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(onyx_url_ce, SL("_basePath"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(onyx_url_ce, SL("_router"), ZEND_ACC_PROTECTED TSRMLS_CC);

	return SUCCESS;

}

/**
 * Returns the prefix for all the generated urls. By default /
 */
PHP_METHOD(Onyx_Url, getBaseUri) {

	zval *_SERVER, baseUri, phpSelf, uri;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&baseUri);
	ZVAL_UNDEF(&phpSelf);
	ZVAL_UNDEF(&uri);

	ZEPHIR_MM_GROW();
	zephir_get_global(&_SERVER, SL("_SERVER"));

	ZEPHIR_OBS_VAR(&baseUri);
	zephir_read_property(&baseUri, this_ptr, SL("_baseUri"), PH_NOISY_CC);
	if (Z_TYPE_P(&baseUri) == IS_NULL) {
		ZEPHIR_OBS_VAR(&phpSelf);
		if (zephir_array_isset_string_fetch(&phpSelf, _SERVER, SL("PHP_SELF"), 0)) {
			ZEPHIR_INIT_VAR(&uri);
			phalcon_get_uri(&uri, &phpSelf);
		} else {
			ZEPHIR_INIT_NVAR(&uri);
			ZVAL_NULL(&uri);
		}
		ZEPHIR_INIT_NVAR(&baseUri);
		if (!(zephir_is_true(&uri))) {
			ZVAL_STRING(&baseUri, "/");
		} else {
			ZEPHIR_CONCAT_SVS(&baseUri, "/", &uri, "/");
		}
		zephir_update_property_zval(this_ptr, SL("_baseUri"), &baseUri);
	}
	RETURN_CCTOR(&baseUri);

}

