<?php

class Login {

	public function __toString() {

		return "" . new Div("color-default-background", array(
			new HeaderTitle("LOGIN", 'text-center'),
			new Div ("row", array(
				new Input("user", "user", "Usuário", "text", null)
			)),
			new Div ("row", array(
				new Input("pass", "pass", "Senha", "password", null)
			))
		));
	}
}