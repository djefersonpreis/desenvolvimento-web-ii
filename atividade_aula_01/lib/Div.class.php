<?php

class Div {
	private $lista = array();
	private $class;

	public function __construct($class = '', $contentArray = array()) {
		$this->class = $class;
		$this->lista = $contentArray;
	}

	public function addElementToDiv($array) {
		$this->lista[] = $array;
	}

	public function __toString() {
		$div = '<div class="' . $this->class . '">';

		foreach ($this->lista as $valor) {
			$div .= $valor;
		}

		$div .= "</div>";

		return $div;
	}
}