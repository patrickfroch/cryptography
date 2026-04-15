<?php

/**
 * @package     cryptography
 * @version     1.0.0
 * @since       19.09.2022 - 20:09
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @see         http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2022
 */

declare(strict_types = 1);

namespace Esit\Cryptography\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class EsitCryptographyExtension extends Extension
{


    /**
     * Lädt die Konfigurationen
     * @param array            $mergedConfig
     * @param ContainerBuilder $container
     * @throws \Exception
     */
    public function load(array $mergedConfig, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );

        if (\is_file(__DIR__ . '/../Resources/config/services.yml')) {
            $loader->load('services.yml');
        }
    }
}
