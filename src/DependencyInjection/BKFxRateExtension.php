<?php

namespace BK\FxRateBundle\DependencyInjection;

use BK\FxRateBundle\BKFxRate;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class BKFxRateExtension  extends Extension
{
    public function load(array $configs, ContainerBuilder $container){
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('bk_fx_rate.bk_rate');

        $definition->setArgument(0, $config['endpoints']);
        $definition->setArgument(1, $config['api_key']);

    }

    public function getAlias()
    {
        return 'bk_fx_rate';
    }
}