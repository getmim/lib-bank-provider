<?php

return [
    '__name' => 'lib-bank-provider',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-bank-provider.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-bank-provider' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibBankProvider\\Iface' => [
                'type' => 'file',
                'base' => 'modules/lib-bank-provider/interface'
            ],
            'LibBankProvider\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-bank-provider/library'
            ]
        ],
        'files' => []
    ]
];