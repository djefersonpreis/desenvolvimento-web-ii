<?php


class Button {
	private $description;
	private $type;
	private $classes;
	private $name;

	/**
	 * Button constructor.
	 * @param $description
	 * @param $type
	 * @param $classes
	 */
	public function __construct($description, $type, $classes = null, $name = null) {
		$this->description = $description;
		$this->type = $type;
		$this->classes = $classes;
		$this->name = $name;
	}

	public function __toString() {
		$html = "<button type='" . $this->type . "'";

		if(!is_null($this->classes)){
			$html .= " class='" . $this->classes . "'";
		}
		
		if(!is_null($this->name)){
			$html .= " name='" . $this->name . "'";
		}

		$html .= ">" . $this->description . "</button>\n";
		return $html;
	}


}