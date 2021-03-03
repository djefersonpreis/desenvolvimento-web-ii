<?php


class Input {

	private $id;
	private $name;
	private $descricao;
	private $type;
	private $otherParams;

	/**
	 * Input constructor.
	 * @param $id
	 * @param $name
	 * @param $descricao
	 * @param $type
	 * @param $otherParams
	 */
	public function __construct($id, $name, $descricao, $type, $otherParams) {
		$this->id = $id;
		$this->name = $name;
		$this->descricao = $descricao;
		$this->type = $type;
		$this->otherParams = $otherParams;
	}

	public function __toString() {
		$html = "<div class='form-group'>";
		$html .= "<span for='" . $this->name . "'>" . $this->descricao . "</span>";

		$html .= "<input id='" . $this->id . "' name='" . $this->name . "' type='" . $this->type . "'";

		foreach ($this->otherParams as $obj) {

		}
		$html .= "/>";
		$html .= "</div>";
		return $html;
	}


}