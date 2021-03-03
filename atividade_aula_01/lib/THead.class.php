<?php


class THead {
	private $classes;
	private $trs;

	/**
	 * THead constructor.
	 * @param $classes
	 * @param $trs
	 */
	public function __construct($classes, array $trs) {
		$this->classes = $classes;
		$this->trs = $trs;
	}

	function addTr($tr) {
		$this->trs[] = $tr;
	}

	public function __toString() {
		$html = "<thead";
		if (!is_null($this->classes) && !empty($this->classes)) {
			$html .= " class='" . $this->classes . "'";
		}
		$html .= ">";

		foreach ($this->trs as $obj) {
			$html .= $obj;
		}

		$html .= "</thead>";

		return $html;
	}
}