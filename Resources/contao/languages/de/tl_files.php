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
    'tastaturberuf_image_copyright_legend' => 'Copyright-Einstellungen',

    'ic_copyright' => ['Copyright-Hinweis', 'Geben Sie einen Copyright-Hinweis an.'],
    'ic_href'      => ['Link', 'Linkziel für den Copyright Hinweis.'],
    'ic_hide'      => ['In Liste verstecken', 'Zeigen Sie diese Datei im Copyright-Modul nicht an.'],
    'ic_imageID'      => ['Bild-ID', 'Bild-ID auf der Website, auf der das Bild gekauft wurde'],
    'ic_websiteName'      => ['Name der Foto-Website', 'Website, wo Foto gekauft wird'],
    'ic_date'      => ['Datum', 'Datum, an dem das Foto gekauft wurde'],
    'ic_buyersName'      => ['Name des Käufers', 'Name des Käufers/Unternehmens, das das Foto gekauft hat'],
    'ic_pages'      => ['Seitenauswahl', 'Wählen Sie Seiten aus, die dieses Bild enthalten']
]);
