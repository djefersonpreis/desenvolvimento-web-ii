<?php


class MontaCrud {

    private $title;
    private $content;

    public function MontaCrud($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

	public function __toString() {

        $response = "";
        $html = new Div("container");
        $html->addElementToDiv(new Div('row', new HeaderTitle($this->title, 'text-center')));

        $isHeadDefined = false;
        $tableHead = new THead('');
        {
            $tableHeadRow = new TR('');
            $tableHeadRow->addElement(new TH('', "ID"));
            $tableHeadRow->addElement(new TH('', "Nome"));
            $tableHeadRow->addElement(new TH('', "Valor"));
            $tableHeadRow->addElement(new TH('', "Qauntidade em Estoque"));
            $tableHead->addElement($tableHeadRow);
        }


        $tableBody = new TBody('');

        
        $html->addElementToDiv(new Table('', 'table table-dark', $tableHead, $tableBody, null));

		return "" . $html;
	}
}