<?php
App::uses('Solicitud', 'Model');

/**
 * Solicitud Test Case
 */
class SolicitudTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.solicitud',
		'app.usuario',
		'app.empresa',
		'app.recaudo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Solicitud = ClassRegistry::init('Solicitud');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Solicitud);

		parent::tearDown();
	}

}
