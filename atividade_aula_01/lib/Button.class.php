<?php


class Button {
	private $description;
	private $type;

	/**
	 * Button constructor.
	 * @param $description
	 * @param $type
	 */
	public function __construct($description, $type) {
		$this->description = $description;
		$this->type = $type;
	}

	public function __toString() {
		$html = "<button />";

		return $html;
	}


}