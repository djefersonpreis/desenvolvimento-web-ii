<?php


class TR {
    private $classes;
    private $content;

    /**
     * TR constructor.
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
        $html = "<tr";
        if(!is_null($this->classes) && !empty($this->classes)){
            $html .= " class='" . $this->classes . "'";
        }
        $html .= ">";

        foreach ($this->content as $obj){
            $html .= $obj;
        }

        $html .= "</tr>";

        return $html;
    }
}