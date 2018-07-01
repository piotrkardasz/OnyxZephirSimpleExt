[
    {
        "type": "namespace",
        "name": "Onyx",
        "file": "C:\\onyx\\onyx\\url.zep",
        "line": 23,
        "char": 5
    },
    {
        "type": "class",
        "name": "Url",
        "abstract": 0,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_dependencyInjector",
                    "file": "C:\\onyx\\onyx\\url.zep",
                    "line": 28,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_baseUri",
                    "default": {
                        "type": "null",
                        "file": "C:\\onyx\\onyx\\url.zep",
                        "line": 28,
                        "char": 27
                    },
                    "file": "C:\\onyx\\onyx\\url.zep",
                    "line": 30,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_staticBaseUri",
                    "default": {
                        "type": "null",
                        "file": "C:\\onyx\\onyx\\url.zep",
                        "line": 30,
                        "char": 33
                    },
                    "file": "C:\\onyx\\onyx\\url.zep",
                    "line": 32,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_basePath",
                    "default": {
                        "type": "null",
                        "file": "C:\\onyx\\onyx\\url.zep",
                        "line": 32,
                        "char": 28
                    },
                    "file": "C:\\onyx\\onyx\\url.zep",
                    "line": 34,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_router",
                    "file": "C:\\onyx\\onyx\\url.zep",
                    "line": 39,
                    "char": 3
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getBaseUri",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "baseUri",
                                    "file": "C:\\onyx\\onyx\\url.zep",
                                    "line": 42,
                                    "char": 14
                                },
                                {
                                    "variable": "phpSelf",
                                    "file": "C:\\onyx\\onyx\\url.zep",
                                    "line": 42,
                                    "char": 23
                                },
                                {
                                    "variable": "uri",
                                    "file": "C:\\onyx\\onyx\\url.zep",
                                    "line": 42,
                                    "char": 28
                                }
                            ],
                            "file": "C:\\onyx\\onyx\\url.zep",
                            "line": 44,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "baseUri",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "C:\\onyx\\onyx\\url.zep",
                                            "line": 44,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_baseUri",
                                            "file": "C:\\onyx\\onyx\\url.zep",
                                            "line": 44,
                                            "char": 31
                                        },
                                        "file": "C:\\onyx\\onyx\\url.zep",
                                        "line": 44,
                                        "char": 31
                                    },
                                    "file": "C:\\onyx\\onyx\\url.zep",
                                    "line": 44,
                                    "char": 31
                                }
                            ],
                            "file": "C:\\onyx\\onyx\\url.zep",
                            "line": 45,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "baseUri",
                                    "file": "C:\\onyx\\onyx\\url.zep",
                                    "line": 45,
                                    "char": 16
                                },
                                "right": {
                                    "type": "null",
                                    "file": "C:\\onyx\\onyx\\url.zep",
                                    "line": 45,
                                    "char": 23
                                },
                                "file": "C:\\onyx\\onyx\\url.zep",
                                "line": 45,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fetch",
                                        "left": {
                                            "type": "variable",
                                            "value": "phpSelf",
                                            "file": "C:\\onyx\\onyx\\url.zep",
                                            "line": 47,
                                            "char": 40
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "_SERVER",
                                                "file": "C:\\onyx\\onyx\\url.zep",
                                                "line": 47,
                                                "char": 29
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "PHP_SELF",
                                                "file": "C:\\onyx\\onyx\\url.zep",
                                                "line": 47,
                                                "char": 38
                                            },
                                            "file": "C:\\onyx\\onyx\\url.zep",
                                            "line": 47,
                                            "char": 40
                                        },
                                        "file": "C:\\onyx\\onyx\\url.zep",
                                        "line": 47,
                                        "char": 40
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "uri",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "phalcon_get_uri",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "phpSelf",
                                                                    "file": "C:\\onyx\\onyx\\url.zep",
                                                                    "line": 48,
                                                                    "char": 38
                                                                },
                                                                "file": "C:\\onyx\\onyx\\url.zep",
                                                                "line": 48,
                                                                "char": 38
                                                            }
                                                        ],
                                                        "file": "C:\\onyx\\onyx\\url.zep",
                                                        "line": 48,
                                                        "char": 39
                                                    },
                                                    "file": "C:\\onyx\\onyx\\url.zep",
                                                    "line": 48,
                                                    "char": 39
                                                }
                                            ],
                                            "file": "C:\\onyx\\onyx\\url.zep",
                                            "line": 49,
                                            "char": 4
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "uri",
                                                    "expr": {
                                                        "type": "null",
                                                        "file": "C:\\onyx\\onyx\\url.zep",
                                                        "line": 50,
                                                        "char": 19
                                                    },
                                                    "file": "C:\\onyx\\onyx\\url.zep",
                                                    "line": 50,
                                                    "char": 19
                                                }
                                            ],
                                            "file": "C:\\onyx\\onyx\\url.zep",
                                            "line": 51,
                                            "char": 4
                                        }
                                    ],
                                    "file": "C:\\onyx\\onyx\\url.zep",
                                    "line": 53,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "variable",
                                            "value": "uri",
                                            "file": "C:\\onyx\\onyx\\url.zep",
                                            "line": 53,
                                            "char": 12
                                        },
                                        "file": "C:\\onyx\\onyx\\url.zep",
                                        "line": 53,
                                        "char": 12
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "baseUri",
                                                    "expr": {
                                                        "type": "string",
                                                        "value": "\/",
                                                        "file": "C:\\onyx\\onyx\\url.zep",
                                                        "line": 54,
                                                        "char": 20
                                                    },
                                                    "file": "C:\\onyx\\onyx\\url.zep",
                                                    "line": 54,
                                                    "char": 20
                                                }
                                            ],
                                            "file": "C:\\onyx\\onyx\\url.zep",
                                            "line": 55,
                                            "char": 4
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "baseUri",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "string",
                                                                "value": "\/",
                                                                "file": "C:\\onyx\\onyx\\url.zep",
                                                                "line": 56,
                                                                "char": 21
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "uri",
                                                                "file": "C:\\onyx\\onyx\\url.zep",
                                                                "line": 56,
                                                                "char": 27
                                                            },
                                                            "file": "C:\\onyx\\onyx\\url.zep",
                                                            "line": 56,
                                                            "char": 27
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "\/",
                                                            "file": "C:\\onyx\\onyx\\url.zep",
                                                            "line": 56,
                                                            "char": 29
                                                        },
                                                        "file": "C:\\onyx\\onyx\\url.zep",
                                                        "line": 56,
                                                        "char": 29
                                                    },
                                                    "file": "C:\\onyx\\onyx\\url.zep",
                                                    "line": 56,
                                                    "char": 29
                                                }
                                            ],
                                            "file": "C:\\onyx\\onyx\\url.zep",
                                            "line": 57,
                                            "char": 4
                                        }
                                    ],
                                    "file": "C:\\onyx\\onyx\\url.zep",
                                    "line": 59,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_baseUri",
                                            "expr": {
                                                "type": "variable",
                                                "value": "baseUri",
                                                "file": "C:\\onyx\\onyx\\url.zep",
                                                "line": 59,
                                                "char": 32
                                            },
                                            "file": "C:\\onyx\\onyx\\url.zep",
                                            "line": 59,
                                            "char": 32
                                        }
                                    ],
                                    "file": "C:\\onyx\\onyx\\url.zep",
                                    "line": 60,
                                    "char": 3
                                }
                            ],
                            "file": "C:\\onyx\\onyx\\url.zep",
                            "line": 61,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "baseUri",
                                "file": "C:\\onyx\\onyx\\url.zep",
                                "line": 61,
                                "char": 17
                            },
                            "file": "C:\\onyx\\onyx\\url.zep",
                            "line": 62,
                            "char": 2
                        }
                    ],
                    "docblock": "**\r\n\t * Returns the prefix for all the generated urls. By default \/\r\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "C:\\onyx\\onyx\\url.zep",
                                "line": 41,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "C:\\onyx\\onyx\\url.zep",
                        "line": 41,
                        "char": 2
                    },
                    "file": "C:\\onyx\\onyx\\url.zep",
                    "line": 40,
                    "last-line": 65,
                    "char": 16
                }
            ],
            "file": "C:\\onyx\\onyx\\url.zep",
            "line": 23,
            "char": 5
        },
        "file": "C:\\onyx\\onyx\\url.zep",
        "line": 23,
        "char": 5
    }
]