<?php

class Link {

    private $url;
    private $rel;
    private $integrity;
    private $crossorigin;

    function Link($url,$rel,$integrity,$crossorigin) {
        $this->url    = $url;
        $this->rel    = $rel;
        $this->integrity    = $integrity;
        $this->crossorigin  = $crossorigin;
    }

    public function __toString() {
        return '<link href="' . $this->url. '" rel="'.$this->rel . '" integrity="'.$this->integrity . '" crossorigin="' . $this->crossorigin . '">';
    }

}