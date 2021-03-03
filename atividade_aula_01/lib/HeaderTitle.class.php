<?php

class HeaderTitle {

	private $txt;

	function HeaderTitle($txt) {
		$this->txt = $txt;
	}

	public function __toString() {
		return '<h1>' . $this->txt . '</h1>';
	}

}