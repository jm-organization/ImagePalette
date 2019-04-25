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

use JMOrganization\ImagePalette\Client;
use PHPUnit\Framework\TestCase;

/**
 * Class LaravelTest
 */
class LaravelTest extends TestCase {
	/**
	 * Test Client
	 *
	 * @return mixed
	 * @throws Exception
	 */
    public function testDoesClientReturnArray()
    {
        $load = new Client;
        $colors = $load->getColors(__DIR__.'/test.jpg', 5);

        return $this->assertTrue(is_array($colors));
    }
} 