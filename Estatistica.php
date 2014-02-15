<?php

class Estatistica {
	private $maior=0;
	private $menor=0;
	private $soma=0;
	private $count=0;
	private $medio=0;
	private $numeros;
	
	public function __construct(array $n) {
		$this->inicializaValores($n);
	}

	public function inicializaValores($n){
		$this->numeros = $n;
		$this->menor= $this->numeros[0];
		$this->maior= $this->numeros[0];
		foreach ($this->numeros as $num){
			$this->soma += $num;
			$this->count++;
			$this->verificaMaior($num);
			$this->verificaMenor($num);
		}
		$this->calculaMedia();
	}

	private function verificaMaior($numero){
		if ($numero > $this->maior) {
			$this->maior = $numero;
		}
	}
	
	private function verificaMenor($numero){
		if ($numero < $this->menor) {
			$this->menor = $numero;
		}
	}
	
	private function calculaMedia(){
		$this->medio = $this->soma / $this->count;
	}
	
	public function getValorMinimo() {
		return $this->menor;
	}
	
	public function getValorMaximo() {
		return $this->maior;
	}
	
	public function getNumeroElementos() {
		return $this->count;
	}
	
	public function getValorMedio() {
		return $this->medio;
	}
	
}