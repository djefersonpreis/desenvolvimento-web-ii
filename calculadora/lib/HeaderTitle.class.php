<?php

class HeaderTitle {

	private $txt;
	private $class;

	function HeaderTitle($txt, $class = '') {
		$this->txt = $txt;
		$this->class = $class;
	}

	public function __toString() {
		return '<h1 class="' . $this->class . '">' . $this->txt . '</h1>';
	}

}