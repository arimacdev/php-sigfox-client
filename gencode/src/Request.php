<?php
namespace Arimac\Sigfox\GenCode;

class Request extends Definition {
    protected $getter = false;

    public function setQuery(array $query) {
        $this->setArrayProperty("query", $query); 
    }

    public function setBody(array $body){
        $this->setArrayProperty("body", $body);
    }
}
