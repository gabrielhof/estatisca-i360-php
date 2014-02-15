<?php
include_once '../Estatistica.php';

Class EstatisticaTest extends PHPUnit_Framework_TestCase {
	
	private $numeros = array(6, 9, 15, -2, 92, 11);
	private $estatistica;
	
	protected function setUp() {
		$this->estatistica = new Estatistica($this->numeros);
	}
	
	public function testValorMinimoTeste(){
		$this->assertTrue($this->estatistica->getValorMinimo() == -2);
	}
	
	public function testValorMaximoTeste(){
		$this->assertFalse($this->estatistica->getValorMaximo() == 15);
		$this->assertEquals(92, $this->estatistica->getValorMaximo());
	}
	
	public function testNumeroElementosTeste(){
		$this->assertFalse($this->estatistica->getNumeroElementos() == 7);
		$this->assertEquals(6, $this->estatistica->getNumeroElementos());
	}
	
	public function testValorMedioTeste(){
		//$this->assertLessThan(19, $estatistica.getValorMedio());
		//$this->assertGreaterThan(18, $estatistica.getValorMedio());
		$this->assertEquals(21.83, $this->estatistica->getValorMedio(), "", 0.01);
	}
}