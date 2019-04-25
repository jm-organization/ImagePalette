<?php
/**
 * This file is part of the ImagePalette package.
 *
 * (c) Brian McDonald <brian@brianmcdonald.io>
 * (c) gandalfx - https://github.com/gandalfx
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JMOrganization\ImagePalette;

/**
 * Class Client
 * @package JMOrganization\ImagePalette
 */
class Client
{
	/**
	 * Get most prominent colors as array
	 * of JMOrganization\ImagePalette\Color
	 *
	 * @param mixed  $fileOrUrl
	 * @param int    $precision
	 * @param int    $maxNumColors
	 * @param string $overrideExt
	 *
	 * @return array
	 * @throws \Exception
	 */
    public function getColors($fileOrUrl, $precision = 10, $maxNumColors = 5, $overrideExt = 'gd')
    {
        $load = new ImagePalette($fileOrUrl, [
        	'precision' => $precision,
        	'paletteLength' => $maxNumColors,
        	'library' => $overrideExt,

        ]);
        return $load->getColors();
    }
} 
