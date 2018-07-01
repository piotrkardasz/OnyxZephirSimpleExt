<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Onyx',
    'file' => 'C:\\onyx\\onyx\\url.zep',
    'line' => 23,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Url',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_dependencyInjector',
          'file' => 'C:\\onyx\\onyx\\url.zep',
          'line' => 28,
          'char' => 10,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_baseUri',
          'default' => 
          array (
            'type' => 'null',
            'file' => 'C:\\onyx\\onyx\\url.zep',
            'line' => 28,
            'char' => 27,
          ),
          'file' => 'C:\\onyx\\onyx\\url.zep',
          'line' => 30,
          'char' => 10,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_staticBaseUri',
          'default' => 
          array (
            'type' => 'null',
            'file' => 'C:\\onyx\\onyx\\url.zep',
            'line' => 30,
            'char' => 33,
          ),
          'file' => 'C:\\onyx\\onyx\\url.zep',
          'line' => 32,
          'char' => 10,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_basePath',
          'default' => 
          array (
            'type' => 'null',
            'file' => 'C:\\onyx\\onyx\\url.zep',
            'line' => 32,
            'char' => 28,
          ),
          'file' => 'C:\\onyx\\onyx\\url.zep',
          'line' => 34,
          'char' => 10,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_router',
          'file' => 'C:\\onyx\\onyx\\url.zep',
          'line' => 39,
          'char' => 3,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getBaseUri',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'baseUri',
                  'file' => 'C:\\onyx\\onyx\\url.zep',
                  'line' => 42,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'phpSelf',
                  'file' => 'C:\\onyx\\onyx\\url.zep',
                  'line' => 42,
                  'char' => 23,
                ),
                2 => 
                array (
                  'variable' => 'uri',
                  'file' => 'C:\\onyx\\onyx\\url.zep',
                  'line' => 42,
                  'char' => 28,
                ),
              ),
              'file' => 'C:\\onyx\\onyx\\url.zep',
              'line' => 44,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'baseUri',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => 'C:\\onyx\\onyx\\url.zep',
                      'line' => 44,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_baseUri',
                      'file' => 'C:\\onyx\\onyx\\url.zep',
                      'line' => 44,
                      'char' => 31,
                    ),
                    'file' => 'C:\\onyx\\onyx\\url.zep',
                    'line' => 44,
                    'char' => 31,
                  ),
                  'file' => 'C:\\onyx\\onyx\\url.zep',
                  'line' => 44,
                  'char' => 31,
                ),
              ),
              'file' => 'C:\\onyx\\onyx\\url.zep',
              'line' => 45,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'baseUri',
                  'file' => 'C:\\onyx\\onyx\\url.zep',
                  'line' => 45,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => 'C:\\onyx\\onyx\\url.zep',
                  'line' => 45,
                  'char' => 23,
                ),
                'file' => 'C:\\onyx\\onyx\\url.zep',
                'line' => 45,
                'char' => 23,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fetch',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'phpSelf',
                      'file' => 'C:\\onyx\\onyx\\url.zep',
                      'line' => 47,
                      'char' => 40,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => '_SERVER',
                        'file' => 'C:\\onyx\\onyx\\url.zep',
                        'line' => 47,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'PHP_SELF',
                        'file' => 'C:\\onyx\\onyx\\url.zep',
                        'line' => 47,
                        'char' => 38,
                      ),
                      'file' => 'C:\\onyx\\onyx\\url.zep',
                      'line' => 47,
                      'char' => 40,
                    ),
                    'file' => 'C:\\onyx\\onyx\\url.zep',
                    'line' => 47,
                    'char' => 40,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'uri',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'phalcon_get_uri',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'phpSelf',
                                  'file' => 'C:\\onyx\\onyx\\url.zep',
                                  'line' => 48,
                                  'char' => 38,
                                ),
                                'file' => 'C:\\onyx\\onyx\\url.zep',
                                'line' => 48,
                                'char' => 38,
                              ),
                            ),
                            'file' => 'C:\\onyx\\onyx\\url.zep',
                            'line' => 48,
                            'char' => 39,
                          ),
                          'file' => 'C:\\onyx\\onyx\\url.zep',
                          'line' => 48,
                          'char' => 39,
                        ),
                      ),
                      'file' => 'C:\\onyx\\onyx\\url.zep',
                      'line' => 49,
                      'char' => 4,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'uri',
                          'expr' => 
                          array (
                            'type' => 'null',
                            'file' => 'C:\\onyx\\onyx\\url.zep',
                            'line' => 50,
                            'char' => 19,
                          ),
                          'file' => 'C:\\onyx\\onyx\\url.zep',
                          'line' => 50,
                          'char' => 19,
                        ),
                      ),
                      'file' => 'C:\\onyx\\onyx\\url.zep',
                      'line' => 51,
                      'char' => 4,
                    ),
                  ),
                  'file' => 'C:\\onyx\\onyx\\url.zep',
                  'line' => 53,
                  'char' => 5,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'uri',
                      'file' => 'C:\\onyx\\onyx\\url.zep',
                      'line' => 53,
                      'char' => 12,
                    ),
                    'file' => 'C:\\onyx\\onyx\\url.zep',
                    'line' => 53,
                    'char' => 12,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'baseUri',
                          'expr' => 
                          array (
                            'type' => 'string',
                            'value' => '/',
                            'file' => 'C:\\onyx\\onyx\\url.zep',
                            'line' => 54,
                            'char' => 20,
                          ),
                          'file' => 'C:\\onyx\\onyx\\url.zep',
                          'line' => 54,
                          'char' => 20,
                        ),
                      ),
                      'file' => 'C:\\onyx\\onyx\\url.zep',
                      'line' => 55,
                      'char' => 4,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'baseUri',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => '/',
                                'file' => 'C:\\onyx\\onyx\\url.zep',
                                'line' => 56,
                                'char' => 21,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'uri',
                                'file' => 'C:\\onyx\\onyx\\url.zep',
                                'line' => 56,
                                'char' => 27,
                              ),
                              'file' => 'C:\\onyx\\onyx\\url.zep',
                              'line' => 56,
                              'char' => 27,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '/',
                              'file' => 'C:\\onyx\\onyx\\url.zep',
                              'line' => 56,
                              'char' => 29,
                            ),
                            'file' => 'C:\\onyx\\onyx\\url.zep',
                            'line' => 56,
                            'char' => 29,
                          ),
                          'file' => 'C:\\onyx\\onyx\\url.zep',
                          'line' => 56,
                          'char' => 29,
                        ),
                      ),
                      'file' => 'C:\\onyx\\onyx\\url.zep',
                      'line' => 57,
                      'char' => 4,
                    ),
                  ),
                  'file' => 'C:\\onyx\\onyx\\url.zep',
                  'line' => 59,
                  'char' => 6,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '_baseUri',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'baseUri',
                        'file' => 'C:\\onyx\\onyx\\url.zep',
                        'line' => 59,
                        'char' => 32,
                      ),
                      'file' => 'C:\\onyx\\onyx\\url.zep',
                      'line' => 59,
                      'char' => 32,
                    ),
                  ),
                  'file' => 'C:\\onyx\\onyx\\url.zep',
                  'line' => 60,
                  'char' => 3,
                ),
              ),
              'file' => 'C:\\onyx\\onyx\\url.zep',
              'line' => 61,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'baseUri',
                'file' => 'C:\\onyx\\onyx\\url.zep',
                'line' => 61,
                'char' => 17,
              ),
              'file' => 'C:\\onyx\\onyx\\url.zep',
              'line' => 62,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns the prefix for all the generated urls. By default /
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => 'C:\\onyx\\onyx\\url.zep',
                'line' => 41,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => 'C:\\onyx\\onyx\\url.zep',
            'line' => 41,
            'char' => 2,
          ),
          'file' => 'C:\\onyx\\onyx\\url.zep',
          'line' => 40,
          'last-line' => 65,
          'char' => 16,
        ),
      ),
      'file' => 'C:\\onyx\\onyx\\url.zep',
      'line' => 23,
      'char' => 5,
    ),
    'file' => 'C:\\onyx\\onyx\\url.zep',
    'line' => 23,
    'char' => 5,
  ),
);