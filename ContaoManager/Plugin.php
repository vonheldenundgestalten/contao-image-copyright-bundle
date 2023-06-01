<?php

/**
 * ImageCopyright for Contao Open Source CMS
 *
 * @copyright   2016 – 2020 Tastaturberuf <tastaturberuf.de>
 * @author      Daniel Jahnsmüller <tastaturberuf.de>
 * @license     LGPL-3.0-or-later
 */

declare(strict_types=1);


namespace Tastaturberuf\ContaoImageCopyrightBundle\ContaoManager;


use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Tastaturberuf\ContaoImageCopyrightBundle\TastaturberufContaoImageCopyrightBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Contao\ManagerPlugin\Config\ConfigPluginInterface;


class Plugin implements BundlePluginInterface, ConfigPluginInterface
{

    /**
     * @inheritDoc
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(TastaturberufContaoImageCopyrightBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader, array $config)
    {
        $loader->load('@TastaturberufContaoImageCopyrightBundle/Resources/config/config.yaml');
    }

}
