<?php


class Input {

	private $id;
	private $name;
	private $descricao;
	private $type;
	private $otherParams;
	private $value;

	/**
	 * Input constructor.
	 * @param $id
	 * @param $name
	 * @param $descricao
	 * @param $type
	 * @param $otherParams
	 */
	public function __construct($id, $name, $descricao, $type, $otherParams = null, $value = null) {
		$this->id = $id;
		$this->name = $name;
		$this->descricao = $descricao;
		$this->type = $type;
		$this->otherParams = $otherParams;
		$this->value = $value;
	}




	public function __toString() {
		if($this->type == "hidden"){
			$html = "<input class='form-control' id='" . $this->id . "' name='" . $this->name . "' type='" . $this->type . "' placeholder='" . $this->descricao . "' value='" . $this->value . "' />\n";
		} else {
			$html = "<span class='sr-only' id='span-" . $this->id . "' >" . $this->descricao . "</span>\n";
			$html .= "<input class='form-control' aria-describedby='span-" . $this->id . "' id='" . $this->id . "' name='" . $this->name . "' type='" . $this->type . "' placeholder='" . $this->descricao . "'/>\n";
		}
		return $html;
	}


}