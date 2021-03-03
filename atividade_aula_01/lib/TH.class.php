<?php


class TH {
	private $classes;
	private $content;

	/**
	 * TH constructor.
	 * @param $classes
	 * @param $content
	 */
	public function __construct($classes, array $content) {
		$this->classes = $classes;
		$this->content = $content;
	}

	function addContent($content) {
		$this->content[] = $content;
	}

	public function __toString() {
		$html = "<th";
		if (!is_null($this->classes) && !empty($this->classes)) {
			$html .= " class='" . $this->classes . "'";
		}
		$html .= ">";

		foreach ($this->content as $obj) {
			$html .= $obj;
		}

		$html .= "</th>";

		return $html;
	}
}