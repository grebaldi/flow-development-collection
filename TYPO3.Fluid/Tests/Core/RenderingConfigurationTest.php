<?php
declare(ENCODING = 'utf-8');
namespace F3\Fluid\Core;

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * @package Fluid
 * @subpackage Tests
 * @version $Id: ParsingStateTest.php 2265 2009-05-19 18:52:02Z sebastian $
 */
/**
 * Testcase for RenderingConfiguration
 *
 * @package Fluid
 * @subpackage Tests
 * @version $Id: ParsingStateTest.php 2265 2009-05-19 18:52:02Z sebastian $
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class RenderingCofigurationTest extends \F3\Testing\BaseTestCase {

	/**
	 * RenderingConfiguration
	 * @var \F3\Fluid\Core\RenderingConfiguration
	 */
	protected $renderingConfiguration;

	public function setUp() {
		$this->renderingConfiguration = new \F3\Fluid\Core\RenderingConfiguration();
	}
	
	/**
	 * @test
	 * @author Sebastian Kurfürst <sebastian@typo3.org>
	 */
	public function objectAccessorPostProcessorCanBeReadOutAgain() {
		$objectAccessorPostProcessor = $this->getMock('F3\Fluid\Core\ObjectAccessorPostProcessorInterface');
		$this->renderingConfiguration->setObjectAccessorPostProcessor($objectAccessorPostProcessor);
		$this->assertSame($objectAccessorPostProcessor, $this->renderingConfiguration->getObjectAccessorPostProcessor());
	}
}
?>