<?php


class BotaoCalculadora {

	private $name;
	private $value;

	/**
	 * Constructor.
	 * @param $name
	 * @param $value
	 */
	public function __construct($name, $value) {
		$this->name = $name;
		$this->value = $value;
	}


	public function __toString() {
		return "<input class='col-3 text-center bot_calc' type='submit' name='" . $this->name . "' value='" . $this->value . "'> \n";
	}

}