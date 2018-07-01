
extern zend_class_entry *onyx_url_ce;

ZEPHIR_INIT_CLASS(Onyx_Url);

PHP_METHOD(Onyx_Url, getBaseUri);

ZEPHIR_INIT_FUNCS(onyx_url_method_entry) {
	PHP_ME(Onyx_Url, getBaseUri, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
