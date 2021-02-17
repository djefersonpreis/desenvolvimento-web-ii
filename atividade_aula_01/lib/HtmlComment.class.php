<?php

class HtmlComment {

    private $txt;

    function HtmlComment($txt) {
        $this->txt    = $txt;
    }

    public function __toString() {
        return '<!-- ' . $this->txt . ' -->';
    }
}