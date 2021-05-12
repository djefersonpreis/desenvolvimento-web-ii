<?php


class FileController {

    private $file;

    public function FileController($file){
        $this->file = $file;
    }

    public function isExists(){
        try {
            $file = fopen($this->file, "r");
            fclose($file);
            return true;
        } catch (Exception $e){
            return false;
        }
    }

    public function getContent(){
        try {
            $file = fopen($this->file, "r");

            $response = array(); 
            while (($line = fgets($file)) !== false) {
                $response[] = $line;
            }

            fclose($file);
            return $response;
        } catch (Exception $e){
            return false;
        }
    }

    public function appendContent($content){
        try {
            $file = fopen($this->file, "w");
            fwrite($file, $content);
            fclose($file);
            return true;
        } catch (Exception $e){
            return false;
        }
    }
}