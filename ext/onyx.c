
/* This file was generated automatically by Zephir do not modify it! */

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include <php.h>

#include "php_ext.h"
#include "onyx.h"

#include <ext/standard/info.h>

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/globals.h"
#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"



zend_class_entry *onyx_url_ce;

ZEND_DECLARE_MODULE_GLOBALS(onyx)

PHP_INI_BEGIN()
	
PHP_INI_END()

static PHP_MINIT_FUNCTION(onyx)
{
	REGISTER_INI_ENTRIES();
	zephir_module_init();
	ZEPHIR_INIT(Onyx_Url);
	
	return SUCCESS;
}

#ifndef ZEPHIR_RELEASE
static PHP_MSHUTDOWN_FUNCTION(onyx)
{
	
	zephir_deinitialize_memory(TSRMLS_C);
	UNREGISTER_INI_ENTRIES();
	return SUCCESS;
}
#endif

/**
 * Initialize globals on each request or each thread started
 */
static void php_zephir_init_globals(zend_onyx_globals *onyx_globals TSRMLS_DC)
{
	onyx_globals->initialized = 0;

	/* Memory options */
	onyx_globals->active_memory = NULL;

	/* Virtual Symbol Tables */
	onyx_globals->active_symbol_table = NULL;

	/* Cache Enabled */
	onyx_globals->cache_enabled = 1;

	/* Recursive Lock */
	onyx_globals->recursive_lock = 0;

	/* Static cache */
	memset(onyx_globals->scache, '\0', sizeof(zephir_fcall_cache_entry*) * ZEPHIR_MAX_CACHE_SLOTS);

	
	
}

/**
 * Initialize globals only on each thread started
 */
static void php_zephir_init_module_globals(zend_onyx_globals *onyx_globals TSRMLS_DC)
{
	
}

static PHP_RINIT_FUNCTION(onyx)
{
	zend_onyx_globals *onyx_globals_ptr;
#ifdef ZTS
	tsrm_ls = ts_resource(0);
#endif
	onyx_globals_ptr = ZEPHIR_VGLOBAL;

	php_zephir_init_globals(onyx_globals_ptr TSRMLS_CC);
	zephir_initialize_memory(onyx_globals_ptr TSRMLS_CC);

	
	return SUCCESS;
}

static PHP_RSHUTDOWN_FUNCTION(onyx)
{
	
	zephir_deinitialize_memory(TSRMLS_C);
	return SUCCESS;
}



static PHP_MINFO_FUNCTION(onyx)
{
	php_info_print_box_start(0);
	php_printf("%s", PHP_ONYX_DESCRIPTION);
	php_info_print_box_end();

	php_info_print_table_start();
	php_info_print_table_header(2, PHP_ONYX_NAME, "enabled");
	php_info_print_table_row(2, "Author", PHP_ONYX_AUTHOR);
	php_info_print_table_row(2, "Version", PHP_ONYX_VERSION);
	php_info_print_table_row(2, "Build Date", __DATE__ " " __TIME__ );
	php_info_print_table_row(2, "Powered by Zephir", "Version " PHP_ONYX_ZEPVERSION);
	php_info_print_table_end();
	
	DISPLAY_INI_ENTRIES();
}

static PHP_GINIT_FUNCTION(onyx)
{
	php_zephir_init_globals(onyx_globals TSRMLS_CC);
	php_zephir_init_module_globals(onyx_globals TSRMLS_CC);
}

static PHP_GSHUTDOWN_FUNCTION(onyx)
{
	
}


zend_function_entry php_onyx_functions[] = {
	ZEND_FE_END

};

zend_module_entry onyx_module_entry = {
	STANDARD_MODULE_HEADER_EX,
	NULL,
	NULL,
	PHP_ONYX_EXTNAME,
	php_onyx_functions,
	PHP_MINIT(onyx),
#ifndef ZEPHIR_RELEASE
	PHP_MSHUTDOWN(onyx),
#else
	NULL,
#endif
	PHP_RINIT(onyx),
	PHP_RSHUTDOWN(onyx),
	PHP_MINFO(onyx),
	PHP_ONYX_VERSION,
	ZEND_MODULE_GLOBALS(onyx),
	PHP_GINIT(onyx),
	PHP_GSHUTDOWN(onyx),
#ifdef ZEPHIR_POST_REQUEST
	PHP_PRSHUTDOWN(onyx),
#else
	NULL,
#endif
	STANDARD_MODULE_PROPERTIES_EX
};

#ifdef COMPILE_DL_ONYX
ZEND_GET_MODULE(onyx)
#endif
