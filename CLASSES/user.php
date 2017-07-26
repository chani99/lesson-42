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
}
