<?php

namespace BK\FxRateBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('bk_fx_rate');

        $rootNode
            ->children()
            ->scalarNode('endpoints')->defaultNull()->info('Endpoint api url for fx rate')->end()
            ->scalarNode('api_key')->defaultNull()->info('api key')->end()
            ->end()
        ;


        return $treeBuilder;


    }

}