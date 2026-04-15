<?php

/**
 * @since       19.09.2022 - 20:09
 *
 * @author      Patrick Froch <info@easySolutionsIT.de>
 *
 * @see         http://easySolutionsIT.de
 *
 * @copyright   e@sy Solutions IT 2022
 */

declare(strict_types=1);

namespace Esit\Cryptography\Classes\Contao\Manager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Config\ConfigInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Esit\Cryptography\EsitCryptographyBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * @param ParserInterface $parser
     *
     * @return array|ConfigInterface[]
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [BundleConfig::create(EsitCryptographyBundle::class)->setLoadAfter([ContaoCoreBundle::class])];
    }
}
