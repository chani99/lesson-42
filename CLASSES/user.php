<?php
class user {
    public $id;
    public $neme;
    public $StartDate;


    function __construct ($id, $neme, $StartDate) {
        $this->id = $id;
        $this->neme = $neme;
        $this->StartDate = $StartDate;
        
    }

    function userDetails() {
        $userArr = array(
            "id"=>$this->id,
            "name"=>$this->name,
            "start-date"=>$this->StartDate);
            return $userArr;
    }
}
