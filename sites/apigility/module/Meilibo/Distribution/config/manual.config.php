<?php
/**
 * Created by PhpStorm.
 * User: figo-007
 * Date: 2016/11/30
 * Time: 16:32
 */
return [
    'zf-mvc-auth' => [
        'authentication' => [
            'map' => [
                'Meilibo\\Distribution\\V1' => 'meilibo',
            ],
        ],
    ],
    'zf-apigility-doctrine-query-create-filter' => [
        'factories' => [
            \Meilibo\Distribution\Doctrine\Query\CreateFilter\MeiliboDistributor::class => \Zend\ServiceManager\Factory\InvokableFactory::class,
        ],
    ],
    'zf-apigility' => [
        'doctrine-connected' => [
            \Meilibo\Distribution\V1\Rest\MeiliboDistributor\MeiliboDistributorResource::class => [
                'query_create_filter' => \Meilibo\Distribution\Doctrine\Query\CreateFilter\MeiliboDistributor::class,
            ],
        ],
    ],
];