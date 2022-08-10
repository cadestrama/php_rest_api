<?php
declare(strict_types=1);



class View{

    private function __construct(protected $data,protected $viewpath, protected $viewName){

    }

    public static function setView(Array $data,$viewpath,$viewName): SELF{

        return new static($data,$viewpath,$viewName);
    }

    public function render(){

        $data = $this->data;
        $path = $this->viewpath.$this->viewName;

        if(file_exists($path)){
            include($path);    
        }

    }


}