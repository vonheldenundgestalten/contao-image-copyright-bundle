<?php

/**
 * ImageCopyright for Contao Open Source CMS
 *
 * @copyright   2016 – 2020 Tastaturberuf <tastaturberuf.de>
 * @author      Daniel Jahnsmüller <tastaturberuf.de>
 * @license     LGPL-3.0-or-later
 */

declare(strict_types=1);


namespace Tastaturberuf\ContaoImageCopyrightBundle\Contao\Translation;


$GLOBALS['TL_LANG']['tl_files'] = array_replace_recursive($GLOBALS['TL_LANG']['tl_files'],
[
    'tastaturberuf_image_copyright_legend' => 'Copyright settings',

    'ic_copyright' => ['Copyright notice', 'Insert a copyright hint.'],
    'ic_href'      => ['Link', 'Link target for the copyright notice.'],
    'ic_hide'      => ['Hide in list', 'Don’t show this file in the copyright module.'],
    'ic_imageID'      => ['Image ID', 'Image ID on website where image is bought'],
    'ic_websiteName'      => ['Name of photo website', 'Website where photo is bought'],
    'ic_date'      => ['Date', 'Date when photo is bought'],
    'ic_buyersName'      => ['Buyers Name', 'Name of buyer/company who bought photo'],
    'ic_pages'      => ['Page Picker', 'Pick pages where image is included'],
    'ic_licensehide' => ['Hide license information below image','Hides license information below image']
]);
