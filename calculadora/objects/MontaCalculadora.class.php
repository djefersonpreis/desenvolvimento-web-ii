<?php


class MontaCalculadora {

    private $value;

	/**
	 * Constructor.
	 * @param $value
	 */
	public function __construct($value = 0) {
		$this->value = $value;
	}

	public function __toString() {
        $html = "<form method='post' class='container calculadora' action='index.php'> \n";
        $html .= new VisorCalculadora($this->value);
        $html .= "<div class='row'> \n";
        $html .= new BotaoCalculadora("num", "7");
        $html .= new BotaoCalculadora("num", "8");
        $html .= new BotaoCalculadora("num", "9");
        $html .= new BotaoCalculadora("op", "%");
        $html .= "</div> \n";
        $html .= "<div class='row'> \n";
        $html .= new BotaoCalculadora("num", "4");
        $html .= new BotaoCalculadora("num", "5");
        $html .= new BotaoCalculadora("num", "6");
        $html .= new BotaoCalculadora("op", "X");
        $html .= "</div> \n";
        $html .= "<div class='row'> \n";
        $html .= new BotaoCalculadora("num", "1");
        $html .= new BotaoCalculadora("num", "2");
        $html .= new BotaoCalculadora("num", "3");
        $html .= new BotaoCalculadora("op", "+");
        $html .= "</div> \n";
        $html .= "<div class='row'> \n";
        $html .= new BotaoCalculadora("num", "0");
        $html .= new BotaoCalculadora("op", "CE");
        $html .= new BotaoCalculadora("op", "=");
        $html .= new BotaoCalculadora("op", "-");
        $html .= "</div> \n";
        $html .= "</form> \n";
        
		return $html;
	}

}