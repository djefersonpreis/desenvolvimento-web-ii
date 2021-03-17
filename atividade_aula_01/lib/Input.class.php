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

//		<div class="input-group mb-3">
//		  <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
//		  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
//		</div>
		$html = "<div class='input-group'>";
		$html .= "<span class='input-group-text' id='span-" . $this->id . "' >" . $this->descricao . "</span>";

		$html .= "<input class='form-control' aria-describedby='span-" . $this->id . "' id='" . $this->id . "' name='" . $this->name . "' type='" . $this->type . "'/>";
		$html .= "</div>";
		return $html;
	}


}