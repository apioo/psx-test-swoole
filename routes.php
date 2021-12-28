<?php

return [

    # API
    [['ANY'], '/population/popo', \PSX\Framework\App\Api\Population\CollectionPopo::class],
    [['ANY'], '/population/popo/:id', \PSX\Framework\App\Api\Population\EntityPopo::class],
    [['ANY'], '/population/typeschema', \PSX\Framework\App\Api\Population\CollectionTypeSchema::class],
    [['ANY'], '/population/typeschema/:id', \PSX\Framework\App\Api\Population\EntityTypeSchema::class],

    # tool controller
    [['GET'], '/tool', \PSX\Framework\Controller\Tool\DefaultController::class],
    [['GET'], '/tool/discovery', \PSX\Framework\Controller\Tool\DiscoveryController::class],
    [['GET'], '/tool/doc', \PSX\Framework\Controller\Tool\Documentation\IndexController::class],
    [['GET'], '/tool/doc/:version/*path', \PSX\Framework\Controller\Tool\Documentation\DetailController::class],
    [['GET'], '/tool/routing', \PSX\Framework\Controller\Tool\RoutingController::class],

    [['GET'], '/generator/:type/:version/*path', \PSX\Framework\Controller\Generator\GeneratorController::class],

];
